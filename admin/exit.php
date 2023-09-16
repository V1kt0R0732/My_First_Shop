<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    if (isset($_COOKIE['user_name'])){
        setcookie('user_name', '', time()-7200);
    }
    if (isset($_COOKIE['user_email'])){
        setcookie('user_email', '', time()-7200);
    }
    if (isset($_COOKIE['user_phone'])){
        setcookie('user_phone', '', time()-7200);
    }
    if (isset($_COOKIE['user_photo'])){
        setcookie('user_photo', '', time()-7200);
    }
    if (isset($_COOKIE['user_role'])){
        setcookie('user_role', '', time()-7200);
    }
    if (isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-7200);
    }
    $_SESSION = [];

    session_destroy();

    if (isset($_GET['tmp']) && !empty($_GET['tmp'])){
        header('location:login.php');
    }
    else{
        header('location:../index.php');
    }


}
else{
    header('location:../404/index.html');
}

?>