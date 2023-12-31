<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\AuctionModel;
use App\Models\OfferModel;


class  AuctionController extends Controller {

    public function show($id){

        $auctionModel = new \App\Models\AuctionModel($this->getDatabaseConnection());
        $auction = $auctionModel->getAuctionUser($id);

        if(!$auction){

            header('Location: /');
            exit();
        }

        $this->set('auction', $auction);
        
        var_dump($auction);

        //$counterView= $this->getCountViews($id);
        //$this->set('counterView', $counterView);
        //var_dump($counterView);
        

        
        $lastOfferPrice = $this->getLastOfferPrice($id);
        if(!$lastOfferPrice){
            $lastOfferPrice = $auction->started_price;

        }
        $this->set('lastOfferPrice', $lastOfferPrice);

        $auctionViewModel = new  \App\Models\AuctionViewModel($this->getDatabaseConnection());

        $ipAdress = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
        $userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        
        $auctionViewModel ->add(
            [
                'auction_id' => $id,
                'ip_adress' => $ipAdress,
                'user_agent' => $userAgent
                
            ]

        );

  


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

    public function countOffer($id){
        $offerModel= new OfferModel($this->getDatabaseConnection());
        $offer=$offerModel->getAllByFieldName('auction_id',$id);
  
        $counter=0;
  
        foreach($offer as $value){
            
          if($value->auction_id){
            $counter++;
          }
        }
  
        return $counter;
      }


      public function getCountViews($id){

        $auctionModel= new AuctionModel($this->getDatabaseConnection());
        $auction= $auctionModel->getViews($id);

        $counter=0;
        foreach($auction as $value){

            if($value->ip_adress){
                $counter++;
            }
        

        }
        return $counter;
      }

}