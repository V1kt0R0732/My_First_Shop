<?php

    require_once('header.php');

    $smarty_order = new Smarty();
    $page = 'catalog';
    $smarty_main -> assign('page', $page);

    if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){

        $basket = [];
        $num = 1;
        for ($i = 0; $i < $_SESSION['basket']; $i++){
            $basket[] = ['num'=>$num, 'name'=>$_SESSION['name'],'id'=>$_SESSION['id'], ];
            $num++;
        }


        $fullContent = $smarty_order -> fetch('order.tpl');

    }

    require_once('main.tpl');
?>