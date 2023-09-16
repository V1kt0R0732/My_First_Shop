<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    if (isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

        $smarty_catalog = new Smarty();

        if (!isset($_GET['category']) || empty($_GET['category'])) {

            $query = "select catalog.id as catalog_id, catalog.name as catalog_name, name_photo from catalog left join photos on catalog.id = photos.id_tovar where status = 1 or photos.status is NULL";

        } elseif (isset($_GET['category']) && !empty($_GET['category'])) {

            $query = "select catalog.id as catalog_id, catalog.name as catalog_name, name_photo from categories inner join catalog on catalog.id_cat = categories.id left join photos on photos.id_tovar = catalog.id where categories.id = {$_GET['category']} and (status = 1 or photos.status is null)";

            $smarty_catalog->assign('r_category', $_GET['category']);
        }


        $result = mysqli_query($dbc, $query) or die("Query Error");
        $count_query = mysqli_num_rows($result);


        $catalog = [];
        $num = 1;
        while ($row = mysqli_fetch_array($result)) {

            if (empty($row['name_photo'])) {
                $row['name_photo'] = 'noFoto.png';
            }

            $catalog[] = ['id' => $row['catalog_id'], 'name' => $row['catalog_name'], 'photo' => $row['name_photo'], 'num' => $num];
            $num++;

        }


        $query_cat = "select id, name from categories";
        $result_cat = mysqli_query($dbc, $query_cat) or die("Query_Cat Error");

        $category = [];
        while ($rCat = mysqli_fetch_array($result_cat)) {

            $category[] = ['id' => $rCat['id'], 'name' => $rCat['name']];

        }


        $smarty_catalog->assign('count', $count_query);
        $smarty_catalog->assign('tovar', $catalog);
        $smarty_catalog->assign('category', $category);

        $content = $smarty_catalog->fetch('indexCatalog.tpl');


        $smarty_main->assign('title', 'Управління товаром');
        $smarty_main->assign('content', $content);

        mysqli_close($dbc);
        $smarty_main->display('main.tpl');
    } else {
        header('location:../404/index.html');
    }

}
else{
    header('location:../404/index.html');
}
?>