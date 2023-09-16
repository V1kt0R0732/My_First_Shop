<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $smarty_dell = new Smarty();

    if (isset($_GET['id'], $_GET['name']) && !empty($_GET['id'] && $_GET['name'])) {

        $title = 'Ви дійсно бажаєте видалити товар "' . $_GET['name'] . '"?';

        $smarty_dell->assign('id', $_GET['id']);

        $content = $smarty_dell->fetch('dellCatalog.tpl');

    } elseif (isset($_POST['dell'], $_POST['id']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes') {

        $queryPhoto = "select name_photo from photos where id_tovar = {$_POST['id']}";
        $resultPhoto = mysqli_query($dbc, $queryPhoto) or die("Query Error");

        while ($row = mysqli_fetch_array($resultPhoto)) {

            if (!empty($row['name_photo'])) {

                @unlink("../img/{$row['name_photo']}");

            }

        }


        $queryDellPhoto = "delete from photos where id_tovar = {$_POST['id']}";
        mysqli_query($dbc, $queryDellPhoto) or die("Query Error");


        $query = "delete from catalog where id = {$_POST['id']}";
        mysqli_query($dbc, $query) or die("Query Error");

        $title = 'Видалення';

        $content = "Товар успішно видалено";

    } elseif (isset($_POST['dell'], $_POST['id']) && !empty($_POST['id']) && $_POST['dell'] == 'No') {

        $title = 'Видалення відмінено';

        $content = 'Товар не видалено';

    }


    $smarty_main->assign('title', $title);
    $smarty_main->assign('content', $content);
    $smarty_main->display('main.tpl');

}
else{
    header('location:../404/index.html');
}

?>