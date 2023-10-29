<?php

namespace App\Models;
use App\Core\DatabaseConnection;

use App\Core\Model;
use \PDO;

class SubcategoryModel  extends Model{

    public function getCategoryandSubcategoryId(){

        $sql="SELECT category.`name` as cat_name,
        subcategory.subcategory_name as subc_name,
        subcategory.subcategory_id as sub_id,
        category.category_id as cat_id
        FROM category
        LEFT JOIN subcategory ON category.category_id = subcategory.category_id;
;
";
        $stmt= $this->getConnection()->prepare($sql);
        $res = $stmt->execute();
        $cat=[];

        if($res){
            $cat=$stmt->fetchAll(PDO::FETCH_OBJ);
        }

        return $cat;
            }


    public function getAllIProductnformation($id){
        $sql="SELECT *
        FROM auction
        LEFT JOIN category ON auction.category_id= category.category_id
        LEFT JOIN subcategory ON auction.subcategory_id= subcategory.subcategory_id
        WHERE subcategory.subcategory_id= ?";

        $stmt=$this->getConnection()->prepare($sql);
        $res=$stmt->execute([$id]);
        $prod=[];

        if($res){
            $prod=$stmt->fetchAll(PDO::FETCH_OBJ);
        }
        return $prod;
    }

    

    

}