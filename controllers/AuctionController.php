<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\OfferModel;


class  AuctionController extends Controller {

    public function show($id){

        $auctionModel = new \App\Models\AuctionModel($this->getDatabaseConnection());
        $auction = $auctionModel->getById($id);

        if(!$auction){

            header('Location: /');
            exit();
        }

        $this->set('auction', $auction);
        

        
        $lastOfferPrice = $this->getLastOfferPrice($id);
        if(!$lastOfferPrice){
            $lastOfferPrice = $auction->started_price;

        }
        $this->set('lastOfferPrice', $lastOfferPrice);

    }


    private function getLastOfferPrice($auctionId){
        $offerModel = new OfferModel($this->getDatabaseConnection());
        $offers = $offerModel->getAllbyAuctionId($auctionId);

        $price=0;

        foreach($offers as $value){
            
            if($price < $value->price){
                $price = $value->price;

            }
        }

        return $price;
    }

}