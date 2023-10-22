<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\AuctionViewModel;


class MainController extends Controller {

    public function home(){

        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories= $categoryModel->getAll();

        $this->set('categories', $categories);
        
        $auctionViewModel = new AuctionViewModel($this->getDatabaseConnection());

        $auctionViewModel->deleteById(1);
    }



}

