<?php 

namespace App\Models;
use App\Core\DatabaseConnection;

use App\Core\Model;
use \PDO;

class UserModel extends Model{




    public function getByUsername($username){
       return $this->getByFieldName('username', $username);



    }

    public function getAllbyUser($id){
        $sql="SELECT 
        * 
        FROM `auction` 
        LEFT JOIN user on auction.user_id=user.user_id
        WHERE user.user_id=?";

        $stmt= $this->getConnection()->prepare($sql);
        $res = $stmt->execute([$id]);
        $user=NULL;

        if($res){
            $user=$stmt->fetchAll(PDO::FETCH_OBJ);
        }

        return $user;
    }




}