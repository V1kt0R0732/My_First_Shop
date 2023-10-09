<?php

if (isset($_COOKIE['id'], $_COOKIE['FIO'], $_COOKIE['email'], $_COOKIE['phone'], $_COOKIE['adress']) && !empty($_COOKIE['id']) && !empty($_COOKIE['FIO']) && !empty($_COOKIE['email']) && !empty($_COOKIE['phone']) && !empty($_COOKIE['adress'])) {

    setcookie('id', '', time()-7200);
    setcookie('FIO', '', time()-7200);
    setcookie('email', '', time()-7200);
    setcookie('phone', '', time()-7200);
    setcookie('adress', '', time()-7200);
    setcookie(session_name(), '', time()-7200);

    $_SESSION = [];
    session_destroy();

    header("location:catalog.php");

}

?>