<?php 


return [
   App\Core\Route::get('|^category/([0-9]+)/?$|', 'Category', 'show'),
   App\Core\Route::get('|^auction/([0-9]+)/?$|', 'Auction', 'show'),
   App\Core\Route::get('|^user/([0-9]+)/?$|', 'User', 'show'),
    //App\Core\Route::get('|^auction/category/([0-9]+)/?$|', 'Category', 'show'),


   
    App\Core\Route::any('|^.*$|', 'Main', 'home')
];