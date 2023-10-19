<?php

    require_once('header.php');

    $page = 'profile';

    if (isset($_SESSION['user_id'], $_SESSION['user_FIO'],$_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_adress'])){

        $smarty_profile = new Smarty();

        $smarty_profile -> assign('FIO', $_SESSION['user_FIO']);
        $smarty_profile -> assign('email', $_SESSION['user_email']);
        $smarty_profile -> assign('phone', $_SESSION['user_phone']);
        $smarty_profile -> assign('adress', $_SESSION['user_adress']);

        $fullContent = $smarty_profile -> fetch("profile.tpl");


    }
    else{
        $fullContent = "Error";
    }



    require_once('main.php');