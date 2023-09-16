<?php

    require_once("header.php");

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $query = "select id, name from categories";

    $result = mysqli_query($dbc, $query) or die('Query Error');

    $categories = [];

    $num = 1;
    while ($row = mysqli_fetch_array($result)) {
        $categories[] = ['id' => $row['id'], 'name' => $row['name'], 'num' => $num];
        $num++;
    }

    $smarty_category = new Smarty();

    $smarty_category->assign('masiv', $categories);

    $content = $smarty_category->fetch('indexCategory.tpl');


    $smarty_main->assign('title', 'Управління Категоріями');
    $smarty_main->assign('content', $content);

    mysqli_close($dbc);
    $smarty_main->display('main.tpl');

}
else{
    header('location:../404/index.html');
}