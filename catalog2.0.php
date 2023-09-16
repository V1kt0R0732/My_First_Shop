<?php

    require_once('header.php');

    if (isset($_GET['tmp']) && $_GET['tmp'] == 1){
        $_SESSION['id_cat'] = '';
        unset($_SESSION['id_cat']);
    }

    $page = 'catalog';
    $smarty_main -> assign('page', $page);
    $smarty_catalog = new Smarty();

    ///////////////////////////
        /* Пошук */

if (isset($_GET['search']) && !empty($_GET['search'])){


    $search1 = $_GET['search'];

    $search = str_replace(',', ' ', $search1);

    $words = explode(' ', $search);

    $no_words = [];

    if (isset($words) && !empty($words)){
        foreach($words as $tmp){
            if (!empty($tmp)){
                $no_words[] = " catalog.name like '%{$tmp}%'";
            }
        }
    }

    $final_words = implode(' or ', $no_words);

}



////////////////////////////
/* Фільтрація */

if (isset($_GET['min_price']) && !empty($_GET['min_price'])){
    $min_price = $_GET['min_price'];
}
else{
    $min_price = 0;
}

if (isset($_GET['max_price']) && !empty($_GET['max_price'])){
    $max_price['max_price'] = $_GET['max_price'];
}
else {

    if (isset($_GET['id_cat']) && !empty($_GET['id_cat'])) {
        $query_price = "select max(price) as max_price from catalog where id_cat = {$_GET['id_cat']}";

    }
    else {
        $query_price = "select max(price) as max_price from catalog";
    }
    $result_price = mysqli_query($dbc, $query_price) or die("Query Price Error");
    $max_price = mysqli_fetch_array($result_price);

}


/////////////////////////
/* Листалка */

$note = 6;

if(isset($_GET['id_cat']) && !empty($_GET['id_cat'])){
    $query_page = "select id from catalog where id_cat = {$_GET['id_cat']}";
    if (isset($_GET['send']) && !empty($_GET['send'])){
        $query_page .= " and price >= {$min_price} and price <= {$max_price['max_price']}";
    }
}
else{
    $query_page = "select id from catalog";
    if (isset($_GET['send']) && !empty($_GET['send'])){
        $query_page .= " where price >={$min_price} and price <= {$max_price['max_price']}";
    }
}

if (isset($final_words) && !empty($final_words)){
    $query_page .= " and {$final_words}";
}


$result_page = mysqli_query($dbc, $query_page) or die("Query Page Error");
$row_page = mysqli_num_rows($result_page);

$count_page = ceil($row_page/$note);



if (!isset($_GET['page']) && empty($_GET['page'])){
    $active_page = 1;
}
else{
    $active_page = $_GET['page'];
}

$skip = ($active_page - 1) * $note;

///////////////////////////
/* Товар */


if ((isset($_GET['id_cat']) && !empty($_GET['id_cat'])) || isset($_SESSION['id_cat'])){
    if(!empty($_GET['id_cat'])){
        $_SESSION['id_cat'] = $_GET['id_cat'];
    }

    //header("refresh:0;url=catalog.php");

    $query = "select catalog.id as catalog_id, catalog.name as catalog_name, price, height, wight, name_photo from categories inner join catalog on catalog.id_cat = categories.id inner join photos on catalog.id = photos.id_tovar where status = 1 and id_tovar = catalog.id and categories.id = {$_SESSION['id_cat']}";
}
else{
    $query = "select catalog.id as catalog_id, catalog.name as catalog_name, price, height, wight, name_photo from catalog inner join photos on catalog.id = photos.id_tovar where status = 1 and id_tovar = catalog.id";
    $_GET['id_cat'] = 0;
    $_SESSION['id_cat'] = $_GET['id_cat'];
}


$query .= " and price >= {$min_price} and price <= {$max_price['max_price']}";

if (isset($final_words) && !empty($final_words)){
    $query .= " and {$final_words}";
}

/* Sort */

if (isset($_GET['sort'])){

    $sort = $_GET['sort'];

    switch($sort){
        case "asc":
            $sort = 'desc';
            break;
        case "desc":
            $sort = "asc";
            break;
        default:
            $sort = "asc";

    }

    $query .= " order by price {$sort}";

}



$query .= " limit {$skip}, {$note}";


//echo $query;
$result = mysqli_query($dbc, $query) or die("Query Error");



if (mysqli_num_rows($result) == 0){
    $fullContent = "Нажаль в даній категорії ще не має товарів";
    $smarty_catalog -> assign('active_page', 0);
}
else{

    $items = [];
    $num = 1;

    while($row = mysqli_fetch_array($result)){
        $items[] = ['id'=>$row['catalog_id'], 'name'=>$row['catalog_name'],'price'=>$row['price'],'height'=>$row['height'],'wight'=>$row['wight'],'photo'=>$row['name_photo'],'num'=>$num];
        $num++;
    }

    $smarty_catalog -> assign('catalog', $items);
    $smarty_catalog -> assign('count_page', $count_page);
    $smarty_catalog -> assign('active_page', $active_page);
    $smarty_catalog -> assign('id_cat', $_SESSION['id_cat']);
    $smarty_catalog -> assign('min_price', $min_price);
    $smarty_catalog -> assign('max_price', $max_price['max_price']);




    $fullContent = $smarty_catalog -> fetch('catalog.tpl');



}




require_once('main.php');




