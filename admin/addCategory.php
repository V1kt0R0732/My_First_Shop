<?php

    require_once("header.php");

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    if (!isset($_POST['send'])) {

        $smarty_category = new Smarty();

        $content = $smarty_category->fetch("addCategory.tpl"); // Метод компілює php та tpl Файл а результат компеляції записує в $content


    } elseif (isset($_POST['send'], $_POST['category']) && !empty($_POST['category'])) {

        $query = "insert into categories (name) value ('" . MyProtection($dbc, $_POST['category']) . "')";

        mysqli_query($dbc, $query) or die("Query Error");


        $content = "Категорія успішно додана";
    } else {
        $content = "Недостатньо даних для добавлення категорії";
    }


    $smarty_main->assign("title", 'Додати нову категорію');

    $smarty_main->assign("content", $content);

    mysqli_close($dbc);

    $smarty_main->display("main.tpl");

}
else{
    header('location:../404/index.html');
}