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

    public function getUserId($userId){

        $sql="SELECT 
        user.forename,
        user.surname,
        user.email,
        user.phone
         FROM auction
         LEFT JOIN user ON auction.user_id = user.user_id
         WHERE auction.user_id=?";
        $stmt= $this->getConnection()->prepare($sql);
        $res = $stmt->execute([$userId]);
        $user=NULL;

        if($res){
            $user=$stmt->fetch(PDO::FETCH_OBJ);
        }

        return $user;

    }






}