<?php

    require_once('header.php');

    $smarty_order = new Smarty();
    $page = 'catalog';
    $smarty_main -> assign('page', $page);

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
        $smarty_order -> assign('total_price', $total_price);
        $smarty_order -> assign('basket', $basket);

        $fullContent = $smarty_order -> fetch('order.tpl');


    }
    else{
        header('location:catalog.php');
    }




require_once('main.php');
