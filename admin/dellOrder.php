<?php

require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $smarty_order = new Smarty();

    if (isset($_GET['id'], $_GET['user'], $_GET['data']) && !empty($_GET['data']) && !empty($_GET['id']) && !empty($_GET['user']) && !isset($_POST['send'])){

        if ($_GET['user'] == 'client'){
            $query = "select FIO from client where id = {$_GET['id']}";
        }
        else{
            $query = "select FIO from visitor where id = {$_GET['id']}";
        }
        $result = mysqli_query($dbc, $query) or die("Query1 Error");
        $row = mysqli_fetch_array($result);

        $smarty_order -> assign('FIO', $row['FIO']);
        $smarty_order -> assign('id', $_GET['id']);
        $smarty_order -> assign('data', $_GET['data']);
        $smarty_order -> assign('user', $_GET['user']);

        $content = $smarty_order -> fetch('dellOrder.tpl');

    }
    /* Client */
    elseif (isset($_POST['send'], $_POST['id'], $_POST['user'], $_POST['dell'], $_POST['data']) && !empty($_POST['data']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes' && $_POST['user'] == 'client'){

        $query = "delete from relationOrder where idUser = {$_POST['id']} and dataCat = '{$_POST['data']}'";
        mysqli_query($dbc, $query) or die("Query2.0 Error");

        $content = "Замовлення успішно видалено";

    }
    /* Visitor */
    elseif (isset($_POST['send'], $_POST['id'], $_POST['user'], $_POST['dell']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes' && $_POST['user'] == 'visitor'){

        $query = "delete from visitorRelationOrder where idVisitor = {$_POST['id']}";
        mysqli_query($dbc, $query) or die("Query3.0 Error");

        $query_visitor_dell = "delete from visitor where id = {$_POST['id']}";
        mysqli_query($dbc, $query_visitor_dell) or die("Query Vis Error");

        $content = "Замовлення успішно видалено";

    }
    elseif (isset($_POST['send'], $_POST['id'], $_POST['user'], $_POST['dell']) && !empty($_POST['id']) && $_POST['dell'] == 'No') {
        $content = "Видалення Відмінено";
    }
    else{
        $content = "Error";
    }



    $smarty_main -> assign('title', 'Видалення');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header('location:../404/index.html');
}