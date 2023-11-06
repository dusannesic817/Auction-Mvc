<?php 
/* $source='mysql: host=localhost;dbname=auction;charset=utf8';
    $user="root";
    $pass='';

    $db = new PDO($source,$user,$pass);
    


    $categoryID = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT); // nacin na koji skupljamo id iz url i saljemo ga u upit


    $sql="SELECT * FROM auctions where category_id = ?";
    $stmt = $db->prepare($sql);
    $res = $stmt->execute([$categoryID ]);

    $aucitons=[];
    if($res){
        $aucitons = $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    var_dump($aucitons);

   $aucitonID = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT); // nacin na koji skupljamo id iz url i saljemo ga u upit


    $sql="SELECT * FROM auctions where auction_id = ?";
    $stmt = $db->prepare($sql);
    $res = $stmt->execute([$aucitonID ]);

    $auciton=NULL;
    if($res){
        $auciton = $stmt->fetch(PDO::FETCH_OBJ);
    }

    var_dump($auciton);    ZA SAMO JEDAN OBJEKAT*/
