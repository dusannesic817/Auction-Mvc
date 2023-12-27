<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\SubcategoryModel;
use App\Models\OfferModel;



class SubcategoryController extends Controller {

    public function show($id){

     /* $subcategoryModel= new SubcategoryModel($this->getDatabaseConnection());
      $subcategories=$subcategoryModel->getAllIProductnformation($id);
      $this->set('subcategories', $subcategories);


     // var_dump($subcategories);*/

      $subcategories=$this->getInformation($id);
      $this->set('subcategories', $subcategories);

      var_dump($subcategories);





    }


    public function getInformation($id){
      $subcategoryModel = new SubcategoryModel($this->getDatabaseConnection());
      $subcat = $subcategoryModel->getAllIProductnformation($id);
      $array = [];
      
      // Inicijalizujemo asocijativni niz za praćenje maksimalnih cena za svaki proizvod
      $maxPrices = [];
      
      // Inicijalizujemo asocijativni niz za praćenje broja dana za svaku aukciju
      $days = [];
      
      foreach ($subcat as $value) {
          $auction_id = $value->auction_id;
          $subcategory_id = $value->subcategory_id;
      
          // Proverimo da li već postoji maksimalna cena za ovaj proizvod
          if (!isset($maxPrices["$auction_id-$subcategory_id"])) {
              $maxPrices["$auction_id-$subcategory_id"] = 0;
          }
      
          // Povećavamo maksimalnu cenu ako pronađemo veću cenu
          if ($value->price > $maxPrices["$auction_id-$subcategory_id"]) {
              $maxPrices["$auction_id-$subcategory_id"] = $value->price;
          }
      
          // Pretvorimo datume u objekte DateTime i izračunamo razliku
          $danasnji_datum = new \DateTime();
          $expires_at = new \DateTime($value->expires_at);
          $diferance = $expires_at->diff($danasnji_datum);
          $leftDays = $diferance->format('%a');
          
          // Dodajemo broj dana kao vrednost za odgovarajući auction_id u asocijativni niz $days
          $days["$auction_id-$subcategory_id"] = $leftDays;
      }
      
      foreach ($subcat as $value) {
          $auction_id = $value->auction_id;
          $subcategory_id = $value->subcategory_id;
      
          // Dodajemo samo jedinstvene maksimalne cene u rezultujući niz, uključujući broj dana
          if ($value->price == $maxPrices["$auction_id-$subcategory_id"]) {
              $array[] = [
                  'auction_id' => $auction_id,
                  'subcategory_id' => $subcategory_id,
                  'user'=>$value->user_id,
                  'max_price' => $value->price,
                  'title' => $value->title,
                  'username' => $value->username,
                  'description' => $value->description,
                  'image' => $value->img_path,
                  'condition'=>$value->condition,
                  'days' => $days["$auction_id-$subcategory_id"],
                  
              ];
          }
      }
      
      return $array;
  }
  
  
  



}