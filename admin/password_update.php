<?php

    require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    if (isset($_GET['id']) && !empty($_GET['id'])){

        $smarty_update = new Smarty();

        $smarty_update -> assign('id', $_GET['id']);

        $content = $smarty_update -> fetch('password_update.tpl');

    }
    elseif(isset($_POST['send'], $_POST['password'], $_POST['new_password'], $_POST['re_new_password'], $_POST['id']) && !empty($_POST['id']) && !empty($_POST['password']) && !empty($_POST['new_password']) && $_POST['new_password'] == $_POST['re_new_password']){

        $query = "select id from user where password = sha1({$_POST['password']})";
        $result = mysqli_query($dbc, $query) or die("Query Error");

        if (mysqli_num_rows($result) > 0){

            $query_change_pass = "update user set password=sha1({$_POST['new_password']}) where id = {$_POST['id']}";
            mysqli_query($dbc, $query_change_pass) or die("Query Change Pass Error");

            $content = "Пароль успішно змінений. Вихід з аккаунту через 2 сек.";

            header("refresh:3;url=exit.php?tmp=1");
        }
        else{
            $content = "Неправильно введений пароль від аккаунту!";
        }


    }
    elseif(isset($_POST['send'], $_POST['password'], $_POST['new_password'], $_POST['re_new_password'], $_POST['id']) && !empty($_POST['id']) && !empty($_POST['password']) && !empty($_POST['new_password']) && $_POST['new_password'] != $_POST['re_new_password']) {

        $content = "Поля не співпадають";

    }
    else{
        $content = "Error";
    }

    $smarty_main -> assign('title', 'Зміна Пароля');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header('../404/index.html');
}

