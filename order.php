<?php

    require_once('header.php');

    $smarty_order = new Smarty();
    $page = 'catalog';
    $smarty_main -> assign('page', $page);


    $params = [];

    if (isset($_GET['page'])){
        $params[] .= "page={$_GET['page']}";
    }
    if (isset($_GET['sort'])){
        $params[] .= "sort={$_GET['sort']}";
    }
    if (isset($_GET['id_cat'])){
        $params[] .= "id_cat={$_GET['id_cat']}";
    }
    if (isset($_GET['search'])){
        $params[] .= "search={$_GET['search']}";
    }
    if (isset($_GET['max_price'], $_GET['min_price'])){
        $params[] .= "max_price={$_GET['max_price']}&min_price={$_GET['min_price']}";
    }
    if (isset($_GET['note'])){
        $params[] .= "note={$_GET['note']}";
    }

    $ready_params = implode('&', $params);

    if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){

        $total_price = 0;
        $basket = [];
        $num = 1;
        for ($i = 0; $i < count($_SESSION['basket']); $i++){
            $sum = 0;
            $sum = $_SESSION['basket'][$i]['price'] * $_SESSION['basket'][$i]['count'];
            $basket[] = ['num'=>$num, 'name'=>$_SESSION['basket'][$i]['name'],'id'=>$_SESSION['basket'][$i]['id'], 'price'=>$_SESSION['basket'][$i]['price'], 'photo'=>$_SESSION['basket'][$i]['photo'], 'count'=>$_SESSION['basket'][$i]['count'], 'sum'=>$sum];
            $num++;
            $total_price += $_SESSION['basket'][$i]['price'] * $_SESSION['basket'][$i]['count'];
        }

        //print_r($basket);
        if (!empty($ready_params)){
            $smarty_order -> assign('ready_params', $ready_params);
        }

        $smarty_order -> assign('total_price', $total_price);
        $smarty_order -> assign('basket', $basket);

        $fullContent = $smarty_order -> fetch('order.tpl');


    }
    else{

        if (!empty($ready_params)){
            header("location:catalog.php?$ready_params");
        }
        else{
            header('location:catalog.php');
        }

    }




require_once('main.php');
