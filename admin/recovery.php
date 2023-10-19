<?php

require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    $smarty_re = new Smarty();

    /* Client */

    if (isset($_GET['id'], $_GET['data'], $_GET['user']) && !empty($_GET['id']) && !empty($_GET['data']) && $_GET['user'] == 'client'){

        $query_relation = "select idCat, countCat from relationOrder where idUser = {$_GET['id']} and dataCat = '{$_GET['data']}' and status = 0"; // Чи потрібно вчитувати Статус?
        $result_query_relation = mysqli_query($dbc, $query_relation) or die("Query Relation Error");

        while($row_realtion = mysqli_fetch_array($result_query_relation)){

            $query_change = "update catalog set colvo=colvo+".$row_realtion['countCat']." where id = {$row_realtion['idCat']}";
            mysqli_query($dbc, $query_change) or die("Query Change Error");

        }

        $query_relation_change = "update relationOrder set status = 1 where idUser = {$_GET['id']} and dataCat = '{$_GET['data']}'";
        mysqli_query($dbc, $query_relation_change) or die("Query Relation Order Change Error");

        $content = $smarty_re -> fetch('recovery.tpl');

        header("refresh:2;url=archiv.php");
    }

    /* Visitor */

    if (isset($_GET['id'], $_GET['user']) && !empty($_GET['id']) && $_GET['user'] == 'visitor'){

        $query_relation = "select idVisitorCat, visitorCount from visitorRelationOrder where idVisitor = {$_GET['id']} and visitorStatus = 0";
        $result_relation_query = mysqli_query($dbc, $query_relation) or die("Query relation Error");

        while($row_realtion = mysqli_fetch_array($result_relation_query)){

            $query_change = "update catalog set colvo=colvo+".$row_realtion['visitorCount']." where id = {$row_realtion['idVisitorCat']}";
            mysqli_query($dbc, $query_change) or die("Query Change Error 2.0");

        }

        $query_relation_change = "update visitorRelationOrder set visitorStatus = 1 where idVisitor = {$_GET['id']}";
        mysqli_query($dbc, $query_relation_change) or die("Query Relation Change Error 2.0");

        $content = $smarty_re -> fetch('recovery.tpl');

        header("refresh:2;url=archiv.php");

    }
    else{
        $content = "Error";
    }


    $smarty_main -> assign("title", 'Повернення з Архіву');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header("location:404/404page.html");
}


