<?php
    require_once('header.php');

    $page = 'items_list';

    if (isset($_GET['id']) && !empty($_GET['id'])){

        $smarty_cat = new Smarty();

        $query_catalog = "select catalog.id as catalog_id, catalog.name as catalog_name, height, wight, material, color, price, colvo, fulldescription, metaTitle, metaKeyWords, metaDiscription, photos.id as photo_id, name_photo, status, categories.name as category from categories inner join catalog on categories.id = catalog.id_cat right join photos on catalog.id = photos.id_tovar where photos.id_tovar = catalog.id and catalog.id = {$_GET['id']} and status = 1;";
        $result_catalog = mysqli_query($dbc, $query_catalog) or die("Query Error");
        $row_catalog = mysqli_fetch_array($result_catalog);




        $smarty_cat -> assign('catalog_id', $row_catalog['catalog_id']);
        $smarty_cat -> assign('name', $row_catalog['catalog_name']);
        $smarty_cat -> assign('height', $row_catalog['height']);
        $smarty_cat -> assign('wight', $row_catalog['wight']);
        $smarty_cat -> assign('material', $row_catalog['material']);
        $smarty_cat -> assign('color', $row_catalog['color']);
        $smarty_cat -> assign('price', $row_catalog['price']);
        $smarty_cat -> assign('colvo', $row_catalog['colvo']);
        $smarty_cat -> assign('fulldescription', $row_catalog['fulldescription']);
        $smarty_cat -> assign('category', $row_catalog['category']);
        $smarty_cat -> assign('main_photo', $row_catalog['name_photo']);
        $smarty_cat -> assign('photo_id_main', $row_catalog['photo_id']);
        $smarty_cat -> assign('status', $row_catalog['status']);

        $metaTitle = $row_catalog['metaTitle'];
        $metaKeyWords = $row_catalog['metaKeyWords'];
        $metaDiscription = $row_catalog['metaDiscription'];

        if (isset($_GET['id_photo']) && !empty($_GET['id_photo'])){
            $smarty_cat -> assign('id_photo', $_GET['id_photo']);
        }
        else{
            $smarty_cat -> assign('id_photo', $row_catalog['photo_id']);
        }




        $query_photo = "select id, name_photo, status from photos where status = 0 and id_tovar = {$_GET['id']}";
        $result_photo = mysqli_query($dbc, $query_photo) or die("Query Photo Error");

        $photo_sec = [];

        while($row_photo = mysqli_fetch_array($result_photo)){

            $photo_sec[] = ['photo_sec'=>$row_photo['name_photo'],'status'=>$row_photo['status'], 'photo_sec_id'=>$row_photo['id']];

        }

        $smarty_cat -> assign('allPhoto', $photo_sec);



        $fullContent = $smarty_cat -> fetch('catalog_info.tpl');


    }
    else{
        $fullContent = "Error";
    }




    require_once('main.php');