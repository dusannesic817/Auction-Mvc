<?php

namespace App\Controllers;
use App\Core;
use \App\Core\Controller;
use App\Core\DatabaseConnection;
use App\Models\AuctionViewModel;
use App\Models\SubcategoryModel;
use App\Models\UserModel;
use App\Validators\PasswordValidator;
use App\Validators\UsernameValidator;


class MainController extends Controller {

    public function home(){

        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories= $categoryModel->getAll();

        $this->set('categories', $categories);

        $subcategoryModel = new SubcategoryModel($this->getDatabaseConnection());
        $subcat= $subcategoryModel->getAll();
        $this->set('subcat', $subcat);

        $subcategories= $subcategoryModel->getCategoryandSubcategoryId();
        $this->set('subcategories', $subcategories);





        $uniqueCategories = $this->getUqCategory();
        $this->set('uniqueCategories', $uniqueCategories);


        //var_dump($subc);

    
        //var_dump($uniqueCategories);

    }

/*
    public function getUqCategory(){
        $categoryModel = new SubcategoryModel($this->getDatabaseConnection());
        $uniqueCat = $categoryModel->getCategoryandSubcategoryId();
        
        $uniqueArray = [];
        $uniqueNames = [];
    
        foreach ($uniqueCat as $value) {
            $cat_names = $value->cat_name;
    
            if (!in_array($cat_names, $uniqueNames)) {
                $uniqueNames[] = $cat_names;
                $subcategories = [];
    
                foreach ($uniqueCat as $subcat) {
                    if ($subcat->cat_name === $cat_names) {
                        $subcategories[] = $subcat->subc_name;
                    }
                }
    
                $uniqueArray[] = [
                    'category_id' => $value->cat_id,
                    'cat_name' => $cat_names,
                    'sub_category' => $subcategories,
                ];
            }
        }
    
        return $uniqueArray;
    }*/


    public function getUqCategory() {
        $categoryModel = new SubcategoryModel($this->getDatabaseConnection());
        $uniqueCat = $categoryModel->getCategoryandSubcategoryId();
    
        $uniqueArray = [];
        $uniqueNames = [];
    
        foreach ($uniqueCat as $obj) {
            $cat_names = $obj->cat_name;
    
            if (!in_array($cat_names, $uniqueNames)) {
                $uniqueNames[] = $cat_names;
                $subcategories = [];
    
                foreach ($uniqueCat as $subobj) {
                    if ($subobj->cat_name === $cat_names) {
                        $subcategoryId = $subobj->sub_id;
                        $subcategories[] = [
                            'sub_id' => $subcategoryId,
                            'subc_name' => $subobj->subc_name
                        ];
                    }
                }
    
                $uniqueArray[] = [
                    'category_id' => $obj->cat_id,
                    'cat_name' => $cat_names,
                    'sub_categories' => $subcategories
                ];
            }
        }
    
        return $uniqueArray;
    }



    public function getRegister(){
        //..
    }


    public function postRegister(){

        $email= \filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $username= \filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
        $password= \filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $password1= \filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);
        $surename= \filter_input(INPUT_POST, 'surename', FILTER_SANITIZE_STRING);
        $forename= \filter_input(INPUT_POST, 'forename', FILTER_SANITIZE_STRING);
        $adress= \filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);
        $phone= \filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

        print_r(
        [
            $forename,
            $surename,
            $adress,
            $phone,
            $email,
            $username,
            $password,
            $password1
        ]
        );
        $validator =new PasswordValidator();

        $passValidator=$validator->setPassword($password);
        $usernameValidator= new UsernameValidator();
        $userValidator= $usernameValidator->setUsername($username);

        if($password != $password1){
            $this->set('message','Doslo je do greske sifre se ne poklapaju');
            return;
        }elseif(!$passValidator){
            $this->set('message', 'Sifra mora da sadrzi barem jedno veliko slovo, i broj');

            return;
        }elseif(!$userValidator){
            $this->set('username',"Username must be between 4 and 20 char");
            return;
        }

        $userModel= new UserModel($this->getDatabaseConnection());
        $userEmail=$userModel->getAllByFieldName('email', $email);
        if($userEmail){
            $this->set('email',"This email already exist");
            return;
        }

        $user=$userModel->getAllByFieldName('username',$username);
            if($user){
                $this->set('usern',"This username already exist");
                return;  
            }
        
        
        $hasPassword= \password_hash($password,PASSWORD_DEFAULT);

        $userId=$userModel->add([

            'forename'=>$forename,
            'surname'=>$surename,
            'adress'=>$adress,
            'phone'=>$phone,
            'email'=>$email,
            'username'=> $username,
            'password'=>$hasPassword,

            ]
        );


        if($userId){
            $this->set('register',"Neuspela registracija");
                return;  
        }

        $this->set('register',"Uspesna registracija");
               

   
        
    }
    


  

}
