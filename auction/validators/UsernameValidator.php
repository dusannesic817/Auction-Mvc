<?php

namespace App\Validators;

class UsernameValidator{

    protected $username;


    public function setUsername($username){

        if(strlen($username)>3 && strlen($username)< 20){
            return true;
        }

        return false;
    }
}