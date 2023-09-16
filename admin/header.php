<?php
    session_start();
    if (isset($_COOKIE['user_id'],$_COOKIE['user_name'],$_COOKIE['user_email'],$_COOKIE['user_phone'], $_COOKIE['user_photo'],$_COOKIE['user_role']) && !empty($_COOKIE['user_id']) && !empty($_COOKIE['user_name']) && !empty($_COOKIE['user_email']) && !empty($_COOKIE['user_phone']) && !empty($_COOKIE['user_photo']) && !empty($_COOKIE['user_role'])){

        $_SESSION['user_id'] = $_COOKIE['user_id'];
        $_SESSION['user_name'] = $_COOKIE['user_name'];
        $_SESSION['user_email'] = $_COOKIE['user_email'];
        $_SESSION['user_phone'] = $_COOKIE['user_phone'];
        $_SESSION['user_photo'] = $_COOKIE['user_photo'];
        $_SESSION['user_role'] = $_COOKIE['user_role'];



    }

    define("SMARTY_LIB", '../libs/');

    require_once(SMARTY_LIB."Smarty.class.php");

    $smarty_main = new Smarty();

    require_once("param.php");

?>