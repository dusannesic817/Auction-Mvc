<?php 

namespace App\Models;
use App\Core\DatabaseConnection;

use App\Core\Model;
use \PDO;

class UserModel extends Model{




    public function getByUsername($username){

       return $this->getByFieldName('username', $username);



    }




}