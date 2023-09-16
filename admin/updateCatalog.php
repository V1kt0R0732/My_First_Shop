<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $smarty_update = new Smarty();
    $content = 'Товар не вибрано';

    if (isset($_GET['id']) && !empty($_GET['id'])) {

        $query = "select id, name, height, wight, material, color, price, colvo, fulldescription, id_cat, metaTitle, metaKeyWords, metaDiscription from catalog where id = {$_GET['id']}";
        $result = mysqli_query($dbc, $query) or die("Query Error");

        $row = mysqli_fetch_array($result);

        $smarty_update->assign('id', $row['id']);
        $smarty_update->assign('name', $row['name']);
        $smarty_update->assign('height', $row['height']);
        $smarty_update->assign('wight', $row['wight']);
        $smarty_update->assign('material', $row['material']);
        $smarty_update->assign('color', $row['color']);
        $smarty_update->assign('price', $row['price']);
        $smarty_update->assign('colvo', $row['colvo']);
        $smarty_update->assign('fulldescription', $row['fulldescription']);
        $smarty_update->assign('id_cat', $row['id_cat']);
        $smarty_update->assign('metaTitle', $row['metaTitle']);
        $smarty_update->assign('metaKeyWords', $row['metaKeyWords']);
        $smarty_update->assign('metaDiscription', $row['metaDiscription']);

        $query_cat = "select id, name from categories";
        $result_cat = mysqli_query($dbc, $query_cat) or die("Query_cat Error");

        $category = [];

        $query_photo = "select id, name_photo, status, id_tovar from photos where id_tovar = {$row['id']}";
        $result_photo = mysqli_query($dbc, $query_photo) or die("Query_Photo Error");



        if (mysqli_num_rows($result_photo) == 0){

            $empty_photo = 'noFoto.png';

            $smarty_update -> assign('empty_photo', $empty_photo);

        }
        else{

            $photos = [];

            while ($row_photo = mysqli_fetch_array($result_photo)) {

                $photos[] = ['id' => $row_photo['id'], 'name_photo' => $row_photo['name_photo'], 'status' => $row_photo['status'], 'id_tovar' => $row_photo['id_tovar']];

            }
        }

        $smarty_update->assign('photos', $photos);



        while ($row_cat = mysqli_fetch_array($result_cat)) {

            $category[] = ['id' => $row_cat['id'], 'name' => $row_cat['name']];

        }

        $smarty_update->assign('category', $category);

        $content = $smarty_update->fetch('updateCatalog.tpl');


    } elseif (isset($_POST['catalog'], $_POST['height'], $_POST['wight'], $_POST['material'], $_POST['color'], $_POST['price'], $_POST['colvo'], $_POST['fulldescription'], $_POST['category'], $_POST['metaTitle'], $_POST['metaKeyWords'], $_POST['metaDiscription'], $_POST['id'], $_POST['main_photo']) && !empty($_POST['main_photo']) && !empty($_POST['catalog']) && !empty($_POST['height']) && !empty($_POST['wight']) && !empty($_POST['material']) && !empty($_POST['color']) && !empty($_POST['price']) && !empty($_POST['colvo']) && !empty($_POST['fulldescription']) && !empty($_POST['category']) && !empty($_POST['metaTitle']) && !empty($_POST['metaKeyWords']) && !empty($_POST['metaDiscription']) && !empty($_POST['id'])) {

        $query_photo = "select id from photos where id_tovar = {$_POST['id']}";
        $result_photo = mysqli_query($dbc, $query_photo) or die("Query_Photo Error2.0");

        if (isset($_FILES['photo']['error'][0], $_FILES['photo']['name'][0]) && $_FILES['photo']['error'][0] == 0) {
            for ($i = 0; $i < count($_FILES['photo']['name']); $i++) {
                if (isset($_FILES['photo']['name'][$i]) && $_FILES['photo']['size'][$i] > 0) {

                    $TMPFileName = $_FILES['photo']['tmp_name'][$i];
                    $realFileName = time() . $_FILES['photo']['name'][$i];

                    move_uploaded_file($TMPFileName, "../img/$realFileName");

                    if (mysqli_num_rows($result_photo) > 0) {
                        $query_photo = "insert into photos (name_photo, id_tovar, status) values('$realFileName', '{$_POST['id']}', 0)";
                    } else {
                        if ($i == 0) {
                            $query_photo = "insert into photos (name_photo, id_tovar, status) values('$realFileName', '{$_POST['id']}', 1)";
                        } else {
                            $query_photo = "insert into photos (name_photo, id_tovar, status) values('$realFileName', '{$_POST['id']}', 0)";
                        }
                    }


                    mysqli_query($dbc, $query_photo) or die("Query Error");
                }
            }
        }

        $query_change_status1 = "update photos set status = 0 where id_tovar = {$_POST['id']}";
        mysqli_query($dbc, $query_change_status1) or die("Query Status1 Error");

        $query_change_status2 = "update photos set status = 1 where id = {$_POST['main_photo']}";
        mysqli_query($dbc, $query_change_status2) or die("Query Change Status 2Error");


        $query = "update catalog set name='{$_POST['catalog']}',height='{$_POST['height']}',wight='{$_POST['wight']}',material='{$_POST['material']}',color='{$_POST['color']}',price='{$_POST['price']}',colvo='{$_POST['colvo']}',fulldescription='{$_POST['fulldescription']}',id_cat='{$_POST['category']}',metaTitle='{$_POST['metaTitle']}',metaKeyWords='{$_POST['metaKeyWords']}',metaDiscription='{$_POST['metaDiscription']}' where id = {$_POST['id']}";

        mysqli_query($dbc, $query) or die("Query Error");


        $content = 'Товар успішно відредаговано';
    }
}
else{
    header('location:../404/inde.html');
}








    $smarty_main -> assign('title', 'Редагування Товару');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');