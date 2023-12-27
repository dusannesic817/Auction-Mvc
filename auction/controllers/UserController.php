<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\UserModel;


class UserController extends Controller {

    public function show($id){

       $userModel=new UserModel($this->getDatabaseConnection());
       $users=$userModel->getAllbyUser($id);
        
        $this->set('users', $users);
        var_dump($users);

}
}