<?php 

namespace App\Models;
use App\Core\DatabaseConnection;

use App\Core\Model;
use \PDO;


// 'App\Models\UserProfileModel' -> user_profile 
//  UserProfile
// _User_Profile 
// _user_profile
// user_profile



class AuctionModel extends Model{


    public function getAllbyCategoryId($categoryId): array{

        return $this->getAllByFieldName('category_id',$categoryId);

    }

    public function getAuctionUser($userId){

        $sql="SELECT 
        auction.*,
        COUNT(auction_view.ip_adress) AS views,
        user.*
        FROM auction
        LEFT JOIN user ON auction.user_id = user.user_id
        LEFT JOIN auction_view ON auction_view.auction_id = auction.auction_id
        WHERE auction.auction_id = ?
        GROUP BY auction.auction_id, user.user_id";
        $stmt= $this->getConnection()->prepare($sql);
        $res = $stmt->execute([$userId]);
        $user=NULL;

        if($res){
            $user=$stmt->fetch(PDO::FETCH_OBJ);
        }

        return $user;

    }

    /*public function getViews($userId){

        $user=$this->getAuctionUser($userId);

        usort($user, function ($a,$b){
            return strcmp($a->ip_adress, $b->ip_adress);
        });

        return $user;



    }*/






}