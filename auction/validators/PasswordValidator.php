<?php

    namespace App\Validators;
   

    class PasswordValidator{

        protected $password;


        public function setPassword($password){

            if (preg_match('/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[A-Z]).+$/', $password) && strlen($password)>3 && strlen($password)<30) {
                return true;
        } 
        
        return false;

        }


    }