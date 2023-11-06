<?php

namespace App\Core;
use Exception;
use \PDO;


abstract class Model{

    private $dbc;

    final public function __construct(DatabaseConnection &$dbc){
        $this->dbc=$dbc;
    }


    protected function getFields() : array{
        return [ ];
    }

    final protected function getConnection(){
        return $this->dbc->getConnection();
    }
    
// 'App\Models\UserProfileModel' -> user_profile 
//  UserProfile
// _User_Profile 
// _user_profile



final  function getTableName(){

    $fullClassName = static::class;
    // 'App\Models\UserProfileModel' -> user_profile 

    $matches =[];
    preg_match('|^.*\\\((?:[A-Z][a-z]+)+)Model$|', $fullClassName, $matches);
    $className= $matches[1] ?? '';
    //  UserProfile

    $underscoredCalassName = preg_replace('|[A-Z]|','_$0', $className);
    // _User_Profile 
    $lowerCaseUnderscoredClassName= strtolower($underscoredCalassName);
    // _user_profile    
     $tableName =substr($lowerCaseUnderscoredClassName, 1);
    return  $tableName;
    // user_profile

}


final  function getPrimaryKeyName(){

    $fullClassName = static::class;
    // 'App\Models\UserProfileModel' -> user_profile 

    $matches =[];
    preg_match('|^.*\\\((?:[A-Z][a-z]+)+)Model$|', $fullClassName, $matches);
    $className= $matches[1] ?? '';
    //  UserProfile

    $underscoredCalassName = preg_replace('|[A-Z]|','_$0', $className);
    // _User_Profile 
    $lowerCaseUnderscoredClassName= strtolower($underscoredCalassName);
    // _user_profile    
    $tableName =substr($lowerCaseUnderscoredClassName, 1);

    return $tableName. '_id';
}


    public function getById($id){
        $tableName= $this->getTableName();
       

        $sql = "SELECT * FROM $tableName WHERE ${tableName}_id=?";
        $stmt= $this->dbc->getConnection()->prepare($sql);
        $res = $stmt->execute([$id]);
        $item=NULL;

        if($res){
            $item=$stmt->fetch(PDO::FETCH_OBJ);
        }

        return $item;

    }

    public function getAll(): array {
        $tableName = $this->getTableName();
        
        $sql = "SELECT * FROM $tableName;"; 
        $stmt = $this->dbc->getConnection()->prepare($sql);
        $res = $stmt->execute();
        $items = [];
    
        if ($res) {
            $items = $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    
        return $items;
    }

    private function isFieldNameValid($fieldName){
    

        $validName= '|^[a-z][a-z_0-9]+[a-z0-9]$|';
      return  boolval( preg_match($validName, $fieldName));

    }

    public function getByFieldName($fieldName, $value){
        if(!$this->isFieldNameValid($fieldName)){
            throw new Exception('Invalid field name:' .$fieldName);
        }
        $tableName= $this->getTableName();
        $primaryKey =$this->getPrimaryKeyName();

        $sql="SELECT * FROM ' .$tableName.' WHERE '.$fieldName.'=?";
        $stmt= $this->dbc->getConnection()->prepare($sql);
        $res = $stmt->execute([$value]);
        $item=NULL;

        if($res){
            $item=$stmt->fetch(PDO::FETCH_OBJ);
        }

        return $item;

    }

    public function getAllByFieldName($fieldName, $value): array{
        if(!$this->isFieldNameValid($fieldName)){
            throw new Exception('Invalid field name:' .$fieldName);
        }
        $tableName= $this->getTableName();
        $primaryKey =$this->getPrimaryKeyName();

        $sql="SELECT * FROM $tableName WHERE $fieldName=?";
        $stmt= $this->dbc->getConnection()->prepare($sql);
        $res = $stmt->execute([$value]);
        $items=[];

        if($res){
            $items=$stmt->fetchAll(PDO::FETCH_OBJ);
        }

        return $items;

    }

    private function  checkFieldListValid(array $data) {
        $fields= $this->getFields();

        $supportedFieldNames = array_keys($fields);
        $requestedFieldNames = array_keys($data);

        foreach($requestedFieldNames as $value){

            if(!in_array($value, $supportedFieldNames)){

                throw new \Exception('Field '. $value . 'is not supported');

            }
        }

        if( !$fields[$value]->isEditable() ){

            throw new \Exception('Field '. $value . 'is not editable');

        }

        if( !$fields[$value]->isValid($data[$value]) ){

            throw new \Exception('The value '. $value . ' is not valid');

        }

    }

    final public function add(array $data){

        $this->checkFieldListValid($data);

        $tableName = $this->getTableName();
        $sqlFieldNames = implode(', ', array_keys($data));
        $questionMarks = implode(', ', array_fill(0, count($data), '?'));
        
        $sql = "INSERT INTO {$tableName} ({$sqlFieldNames}) VALUES ({$questionMarks})";
        $stmt = $this->dbc->getConnection()->prepare($sql);
        $res = $stmt->execute(array_values($data));
        
        if (!$res) {
            return false;
        }
        
        return $this->dbc->getConnection()->lastInsertId();
        
    }


    final public function editById(int $id, array $data){
        $this->checkFieldListValid($data);

        $tableName = $this->getTableName();

        $editList=[];
        $values=[];

        foreach($data as $key => $values){

            $editList[]= "{$key} = ?";
            $values[]= $values;


        }

        $editString= implode(', ', $editList);
        $values[] = $id;

        $sql= "UPDATE {$tableName} SET  {$editString}   WHERE {$tableName}_id = ?;";
        $stmt = $this->dbc->getConnection()->prepare($sql);
        return  $stmt->execute(array_values($data));

    }


    public function deleteById($id){
        $tableName= $this->getTableName();
       
        $sql = "DELETE  FROM $tableName WHERE {$tableName}_id=?";
        $stmt= $this->dbc->getConnection()->prepare($sql);
        return $stmt->execute([$id]);
 


    }




}