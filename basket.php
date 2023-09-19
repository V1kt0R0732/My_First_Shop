<?php

    require_once('header.php');

    if (isset($_GET['id'], $_GET['mode']) && !empty($_GET['id']) && $_GET['mode'] = 'add'){

        $all_basket = 0;
        $exist = false;

        if (!isset($_SESSION['basket'])){
            $_SESSION['basket'] = [];
        }

        if (count($_SESSION['basket']) > 0){
            for($i = 0; $i < count($_SESSION['basket']); $i++){
                if ($_SESSION['basket'][$i]['id'] == $_GET['id']){
                    $_SESSION['basket'][$i]['count']++;
                    $exist = true;
                    break;
                }
            }
        }

        if (!$exist){

            $query = "select catalog.id as id, name, price, name_photo from catalog inner join photos on catalog.id = photos.id_tovar where status = 1 and photos.id_tovar = catalog.id and catalog.id = {$_GET['id']}";
            $result = mysqli_query($dbc, $query) or die("Query Error");
            $row = mysqli_fetch_array($result);

            $_SESSION['basket'][] = ['id'=>$row['id'], 'photo'=>$row['name_photo'], 'name'=>$row['name'], 'price'=>$row['price'], 'count'=>1];


        }




        header('location:catalog.php');
    }



