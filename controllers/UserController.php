<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;


class UserController extends Controller {

    public function show($id){

        $auctionModel = new \App\Models\AuctionModel($this->getDatabaseConnection());
        $userAuction= $auctionModel->getUserId($id);

      
        $this->set('userAuction', $userAuction);

}
}