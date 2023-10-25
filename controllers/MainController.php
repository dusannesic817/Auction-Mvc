<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\AuctionViewModel;
use App\Models\SubcategoryModel;


class MainController extends Controller {

    public function home(){

        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories= $categoryModel->getAll();

        $this->set('categories', $categories);

        $subcategoryModel = new SubcategoryModel($this->getDatabaseConnection());
        $uniqueCategories = $this->getUqCategory();
        $this->set('uniqueCategories', $uniqueCategories);
    
        //var_dump($uniqueCategories);

    }


    public function getUqCategory(){
        $categoryModel = new SubcategoryModel($this->getDatabaseConnection());
        $uniqueCat = $categoryModel->getCategoryandSubcategoryId();
        
        $uniqueArray = [];
        $uniqueNames = [];
    
        foreach ($uniqueCat as $value) {
            $cat_names = $value['cat_name'];
    
            if (!in_array($cat_names, $uniqueNames)) {
                $uniqueNames[] = $cat_names;
                $subcategories = [];
    
                foreach ($uniqueCat as $subcat) {
                    if ($subcat['cat_name'] === $cat_names) {
                        $subcategories[] = $subcat['subc_name'];
                    }
                }
    
                $uniqueArray[] = [
                    'category_id' => $value['cat_id'],
                    'cat_name' => $cat_names,
                    'sub_category' => $subcategories,
                ];
            }
        }
    
        return $uniqueArray;
    }


  

}
