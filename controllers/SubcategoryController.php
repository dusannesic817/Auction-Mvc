<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\SubcategoryModel;
use App\Models\OfferModel;



class SubcategoryController extends Controller {

    public function show($id){

      $subcategoryModel= new SubcategoryModel($this->getDatabaseConnection());
      $subcategories=$subcategoryModel->getAllIProductnformation($id);
      $this->set('subcategories', $subcategories);




    }



}