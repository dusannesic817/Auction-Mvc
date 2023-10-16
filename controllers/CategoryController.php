<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;


class CategoryController extends Controller {

    public function show($id){

        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $category= $categoryModel->getById($id);

        if(!$category){

            header('Location: /');
            exit();
        }

        $this->set('category', $category);

        $auctionModel = new \App\Models\AuctionModel($this->getDatabaseConnection());
        $auctionsInCategory = $auctionModel->getAllbyCategoryId($id);

        $this->set('auctionsInCategory', $auctionsInCategory);
        
    }

}