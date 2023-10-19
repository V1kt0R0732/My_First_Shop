<?php

    require_once('header.php');

    $page = "login";
    $smarty_main -> assign('page', $page);

    $smarty_log = new Smarty();

    if (!isset($_POST['send'])){
        $fullContent = $smarty_log -> fetch('login.tpl');
    }
    elseif(isset($_POST['send'], $_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $query = "select id, FIO, email, phone, adress, time from client where password = sha1('{$_POST['password']}') and email = '{$_POST['email']}'";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);

        if (mysqli_num_rows($result) == 1){

            $query_time = "update client set time=now() where id = {$row['id']}";
            mysqli_query($dbc, $query_time) or die("Query Time Error");

            $fullContent = "Вхід успішно виконано";

            setcookie('id', $row['id'], time()+60*60*30*24*3);
            setcookie('FIO', $row['FIO'], time()+60*60*24*30*3);
            setcookie('email', $row['email'], time()+60*60*24*30*3);
            setcookie('phone', $row['phone'], time()+60*60*24*30*3);
            setcookie('adress', $row['adress'], time()+60*60*24*30*3);

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_FIO'] = $row['FIO'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_phone'] = $row['phone'];
            $_SESSION['user_adress'] = $row['adress'];

            header('refresh:2;url=order_buy.php');
        }
        else{
            $fullContent = "Дані введено не правильно";
            header('refresh:2;url=login.php');
        }
    }
    else{
        $fullContent = "Дані введено не правильно";
        header('refresh:2;url=login.php');
    }





    require_once('main.php');