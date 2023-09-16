<?php

    require('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $smarty_update = new Smarty();

    if (isset($_GET['id'], $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name'])) {

        $smarty_update->assign('name', $_GET['name']);
        $smarty_update->assign('id', $_GET['id']);

        $content = $smarty_update->fetch('updateCategory.tpl');


    } elseif (isset($_POST['category'], $_POST['id']) && !empty($_POST['category']) && !empty($_POST['id'])) {

        $query = "update categories set name='{$_POST['category']}' where id = {$_POST['id']}";

        mysqli_query($dbc, $query) or die("Query Error");

        $content = 'Категорія успішно відредагована';

    } else {
        $content = 'Недостатньо даних для редагування';
    }


    $smarty_main->assign('title', 'Редагування категорії');
    $smarty_main->assign('content', $content);
    mysqli_close($dbc);
    $smarty_main->display('main.tpl');
}
else{
    header('location:../404/index.html');
}