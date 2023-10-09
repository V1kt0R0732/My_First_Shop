<?php

    require_once('header.php');

    $page = "registration";
    $smarty_main -> assign('page', $page);

    $smarty_reg = new Smarty();

    if (!isset($_POST['send'])){
        $fullContent = $smarty_reg -> fetch('registration.tpl');
    }
    elseif(isset($_POST['send'], $_POST['FIO'], $_POST['email'], $_POST['phone'], $_POST['adress'], $_POST['password'], $_POST['re_password']) && !empty($_POST['FIO']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress']) && !empty($_POST['password']) && $_POST['password'] == $_POST['re_password']){

        $query_check = "select id from client where email = '{$_POST['email']}'";
        $result_check = mysqli_query($dbc, $query_check) or die("Query Check Error");
        if (mysqli_num_rows($result_check) > 0){
            $fullContent = "Нажаль даний електронний адрес вже використовується";
            header('refresh:2;url=registration.php');
        }
        else{
            $query_reg = "insert into client (FIO, email, phone, adress, time, password) values('".MyProtection($dbc, $_POST['FIO'])."','".MyProtection($dbc, $_POST['email'])."','".MyProtection($dbc, $_POST['phone'])."','".MyProtection($dbc, $_POST['adress'])."', now(), sha1('".MyProtection($dbc, $_POST['password'])."'))";

            mysqli_query($dbc, $query_reg) or die("Query Reg Error");

            $fullContent = "Ваш аккаунт успішно зареєстрований";
            header('refresh:2;url=login.php');

        }
    }
    elseif(isset($_POST['send'], $_POST['FIO'], $_POST['email'], $_POST['phone'], $_POST['adress'], $_POST['password'], $_POST['re_password']) && !empty($_POST['FIO']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress']) && !empty($_POST['password']) && $_POST['password'] != $_POST['re_password']) {
        $fullContent = "Паролі не співпадають";
        header('refresh:2;url=registration.php');
    }
    else{
        $fullContent = "Error";
        header('refresh:2;url=registration.php');
    }

    require_once('main.php');

?>