<?php

    require_once('header.php');


    if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

        require_once('admin_info.php');

        $smarty_order = new Smarty();

        if (isset($_GET['id'], $_GET['user'], $_GET['data']) && !empty($_GET['id']) && !empty($_GET['data']) && $_GET['user'] == 'client'){

            $query_relation = "select idCat, countCat from relationOrder where idUser = {$_GET['id']} and dataCat = '{$_GET['data']}' and status = 1";
            $result_relation = mysqli_query($dbc, $query_relation) or die("Query Relation Order Error");

            while($row_relation = mysqli_fetch_array($result_relation)){

                $query_catalog = "update catalog set colvo=colvo-".$row_relation['countCat']." where id = {$row_relation['idCat']}";
                mysqli_query($dbc, $query_catalog) or die("Query Catalog Error");

            }

            $query_relation_change = "update relationOrder set status = 0 where idUser = {$_GET['id']} and dataCat = '{$_GET['data']}'";
            mysqli_query($dbc, $query_relation_change) or die("Query Change Error");

            $content = $smarty_order -> fetch('runOrder.tpl');

            header("refresh:2;url=status_order.php");

        }
        elseif(isset($_GET['id'], $_GET['user'], $_GET['data']) && !empty($_GET['data']) && !empty($_GET['id']) && $_GET['user'] == 'visitor'){

            $query_relation = "select idVisitorCat, visitorCount from visitorRelationOrder where idVisitor = {$_GET['id']} and visitorStatus = 0";
            $result_relation = mysqli_query($dbc, $query_relation) or die("Query Relarion Visitor Error");

            while($row_relation = mysqli_fetch_array($result_relation)){

                $query_catalog = "update catalog set colvo=colvo-".$row_relation['visitorCount']." where id = {$row_relation['idVisitorCat']}";
                mysqli_query($dbc, $query_catalog) or die("Query Catalog Visitor");

            }

            $query_relation_change = "update visitorRelationOrder set visitorStatus = 0 where idVisitor = {$_GET['id']}";
            mysqli_query($dbc, $query_relation_change) or die("Query Change Visitor Error");

            $content = $smarty_order -> fetch('runOrder.tpl');

            header("refresh:2;url=status_order.php");

        }
        else{
            $content = "Error";
        }


        $smarty_main -> assign('title', 'Архівація');
        $smarty_main -> assign('content', $content);
        mysqli_close($dbc);
        $smarty_main -> display('main.tpl');

    }
    else{
        header("location:404/404page.html");
    }


