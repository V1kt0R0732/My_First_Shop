<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    if (isset($_GET['id'], $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name'])) {

        $query = "select status from photos where id = {$_GET['id']}";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);

        $smarty_dell = new Smarty();

        $smarty_dell->assign('id', $_GET['id']);
        $smarty_dell->assign('photo', $_GET['name']);
        $smarty_dell->assign('status', $row['status']);

        $content = $smarty_dell->fetch('dellPhoto.tpl');

    } elseif (isset($_POST['dell'], $_POST['id']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes') {

        $query = "select name_photo, id_tovar, status from photos where id = {$_POST['id']}";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);

        if ($row['status'] == 1) {

            $query_photo = "select id from photos where status = 0 and id_tovar = {$row['id_tovar']}";
            $result_photo = mysqli_query($dbc, $query_photo) or die("Query Error");

            if (mysqli_num_rows($result_photo) > 0) {

                $query_change_status2 = "update photos set status = 1 where status = 0 and id_tovar = {$row['id_tovar']} limit 1";

                mysqli_query($dbc, $query_change_status2) or die("Query Change Status 2Error");


            }


        }

        $query_dell = "delete from photos where id = {$_POST['id']}";
        mysqli_query($dbc, $query_dell) or die("QueryDell");

        unlink("../img/{$row['name_photo']}");


        $content = 'Фото Успішно видалене';

        header("refresh:2;url=updateCatalog.php?id={$row['id_tovar']}");


    } elseif (isset($_POST['dell'], $_POST['id'], $_POST['photo']) && !empty($_POST['photo']) && !empty($_POST['id']) && $_POST['dell'] == 'No') {
        $content = 'Видалення скасовано';
    } else {
        $content = 'Error';
    }


    $smarty_main->assign('title', 'Видалення фото');
    $smarty_main->assign('content', $content);
    mysqli_close($dbc);
    $smarty_main->display('main.tpl');

}
else{
    header('location:../404/index.html');
}