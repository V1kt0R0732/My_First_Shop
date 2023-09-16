<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {

        $smarty_update = new Smarty();

        $query = "select id, metaTitle, metaDiscription, metaKeyWords, title, fullContent, name, page, prior from settingPage where id = {$_GET['id']}";
        $result = mysqli_query($dbc, $query) or die("Query Error");

        $query_count = "select id from settingPage";
        $result_count = mysqli_query($dbc, $query_count);

        $count_prior = mysqli_num_rows($result_count) + 1;


        $row = mysqli_fetch_array($result);

        $smarty_update->assign('id', $row['id']);
        $smarty_update->assign('metaTitle', $row['metaTitle']);
        $smarty_update->assign('metaDiscription', $row['metaDiscription']);
        $smarty_update->assign('metaKeyWords', $row['metaKeyWords']);
        $smarty_update->assign('title', $row['title']);
        $smarty_update->assign('fullContent', $row['fullContent']);
        $smarty_update->assign('name', $row['name']);
        $smarty_update->assign('page', $row['page']);
        $smarty_update->assign('main_prior', $row['prior']);
        $smarty_update->assign('count_prior', $count_prior);


        $content = $smarty_update->fetch('updatePage.tpl');

    } elseif (isset($_POST['id'], $_POST['metaTitle'], $_POST['metaDiscription'], $_POST['metaKeyWords'], $_POST['title'], $_POST['fullContent'], $_POST['name'], $_POST['page'], $_POST['prior'], $_POST['old_prior']) && !empty($_POST['old_prior']) && !empty($_POST['id']) && !empty($_POST['metaTitle']) && !empty($_POST['metaDiscription']) && !empty($_POST['metaKeyWords']) && !empty($_POST['title']) && !empty($_POST['fullContent']) && !empty($_POST['name']) && !empty($_POST['page']) && !empty($_POST['prior'])) {

        $query_change = "update settingPage set prior='{$_POST['old_prior']}' where prior = {$_POST['prior']}";
        mysqli_query($dbc, $query_change) or die("Query Error");


        $query_udpate = "update settingPage set metaTitle='" . MyProtection($dbc, $_POST['metaTitle']) . "', metaDiscription='" . MyProtection($dbc, $_POST['metaDiscription']) . "', metaKeyWords='" . MyProtection($dbc, $_POST['metaKeyWords']) . "', title='" . MyProtection($dbc, $_POST['title']) . "', fullContent='" . MyProtection($dbc, $_POST['fullContent']) . "', name='" . MyProtection($dbc, $_POST['name']) . "', page='" . MyProtection($dbc, $_POST['page']) . "', prior='{$_POST['prior']}' where id = {$_POST['id']}";

        mysqli_query($dbc, $query_udpate) or die("queryUpdate Error");

        $content = 'Редагування пройшло успішно';


    } else {
        $content = 'Виникла помилка в редагуванні';
    }


    $smarty_main->assign('title', 'Редагуваня Сторінок');
    $smarty_main->assign('content', $content);

    mysqli_close($dbc);
    $smarty_main->display('main.tpl');

}
else{
    header('location:../404/index.html');
}

?>