<?php

namespace App\Models;
use App\Core\DatabaseConnection;

use App\Core\Model;
use \PDO;

class SubcategoryModel  extends Model{

    public function getCategoryandSubcategoryId(){

        $sql="SELECT  category.`name` as cat_name,
        subcategory.subcategory_name as subc_name,
        category.category_id as cat_id
        FROM category
        LEFT JOIN subcategory ON category.category_id = subcategory.category_id;
;
";
        $stmt= $this->getConnection()->prepare($sql);
        $res = $stmt->execute();
        $cat=[];

        if($res){
            $cat=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $cat;
            }

       
    

}