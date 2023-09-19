<?php

require_once('header.php');

$page = 'catalog';
$smarty_main -> assign('page', $page);
$smarty_catalog = new Smarty();

/* Search */

if (isset($_GET['search']) && !empty($_GET['search'])){

    $search = str_replace(',',' ', $_GET['search']);

    $words = explode(' ', $search);

    $no_words = [];

    if (isset($words) && !empty($words)){
        foreach($words as $tmp){
            if (!empty($tmp)){
                $no_words[] = " catalog.name like '%$tmp%'";
            }
        }
    }

    $final_words = implode(' or ', $no_words);

    $smarty_catalog -> assign('search', $search);
    $smarty_main -> assign('search', $search);

}

/* ////////////////// */


/* Filter */

if (isset($_GET['min_price']) && !empty($_GET['min_price'])){
    $min_price = $_GET['min_price'];
}
else{
    $min_price = 0;
}

if (isset($_GET['max_price']) && !empty($_GET['max_price'])){
    $max_price['max_price'] = $_GET['max_price'];
}
else{

    if (isset($_GET['id_cat']) && !empty($_GET['id_cat'])){
        $query_max_price = "select max(price) as max_price from catalog where id_cat = {$_GET['id_cat']}";
    }
    else{
        $query_max_price = "select max(price) as max_price from catalog";
    }

    $result_max_price = mysqli_query($dbc, $query_max_price) or die("Query Max Price Error");
    $max_price = mysqli_fetch_array($result_max_price);

}

/* ////////////////// */



/* List */

if (isset($_GET['note']) && !empty($_GET['note'])){
    $note = $_GET['note'];
}

else{
    $note = 6;
}




if (isset($_GET['id_cat']) && !empty($_GET['id_cat'])){
    $query_page = "select id from catalog where id_cat = {$_GET['id_cat']} and price >= $min_price and price <= {$max_price['max_price']}";
}
else{
    $query_page = "select id from catalog where price >= $min_price and price <= {$max_price['max_price']}";
}

if(isset($final_words) && !empty($final_words)){
    $query_page .= " and $final_words";
}


$result_page = mysqli_query($dbc, $query_page) or die("Query Page Error");
$row_page = mysqli_num_rows($result_page);
$count_page = ceil($row_page/$note);

if (isset($_GET['page']) && !empty($_GET['page'])){
    $active_page = $_GET['page'];
}
else{
    $active_page = 1;
}

$skip = ($active_page - 1) * $note;

/* ////////////////// */


/* Main Query */

if (isset($_GET['id_cat']) && !empty($_GET['id_cat'])){
    $query = "select catalog.id as catalog_id, catalog.name as catalog_name, price, height, wight, name_photo from categories inner join catalog on catalog.id_cat = categories.id inner join photos on catalog.id = photos.id_tovar where status = 1 and id_tovar = catalog.id and categories.id = {$_GET['id_cat']}";
}
else{
    $query = "select catalog.id as catalog_id, catalog.name as catalog_name, price, height, wight, name_photo from catalog inner join photos on catalog.id = photos.id_tovar where status = 1 and id_tovar = catalog.id";
}



/* Sort */

if (isset($_GET['sort']) && !empty($_GET['sort'])){

    $sort = $_GET['sort'];

    $smarty_catalog -> assign('sort', $sort);
    $smarty_main -> assign('sort', $sort);

    switch($sort){
        case "asc":
            $sort = "desc";
            break;
        case "desc":
            $sort = "asc";
            break;
        default:
            $sort = "desc";
    }

}


/* ////////////////// */



/* Доповнення до основного запиту */

$query .= " and price >= $min_price and price <= {$max_price['max_price']}";

if (isset($final_words) && !empty($final_words)){
    $query .= " and $final_words";
}

if (isset($sort) && !empty($sort)){
    $query .= " order by price $sort";
}

$query .= " limit $skip, $note";

/* ////////////////// */


//echo $query;
$result = mysqli_query($dbc, $query) or die("Query Error");

if (mysqli_num_rows($result) == 0){
    $fullContent = "Нажаль в даній категорії ще не має товарів";
}

else{

    $items = [];
    $num = 1;

    while($row = mysqli_fetch_array($result)){

        $items[] = ['id'=>$row['catalog_id'], 'name'=>$row['catalog_name'],'price'=>$row['price'],'height'=>$row['height'],'wight'=>$row['wight'],'photo'=>$row['name_photo'],'num'=>$num];
        $num++;
    }

    $all_basket = 0;
    if (isset($_SESSION['basket'])){
        if (count($_SESSION['basket']) > 0){
            for($k = 0; $k < count($_SESSION['basket']); $k++){
                $all_basket += $_SESSION['basket'][$k]['count'];
            }
            $smarty_main -> assign('count_basket', $all_basket);
        }
    }



    /* Assign */
    $smarty_catalog -> assign('catalog', $items);
    $smarty_catalog -> assign('count_page', $count_page);
    $smarty_catalog -> assign('active_page', $active_page);
    $smarty_catalog -> assign('note', $note);
    $smarty_main -> assign('note', $note);

    $smarty_catalog -> assign('min_price', $min_price);
    $smarty_catalog -> assign('max_price', $max_price['max_price']);

    $smarty_main -> assign('min_price', $min_price);
    $smarty_main -> assign('max_price', $max_price['max_price']);

    if (isset($_GET['id_cat']) && !empty($_GET['id_cat'])){
        $smarty_main -> assign('id_cat', $_GET['id_cat']);
        $smarty_catalog -> assign('id_cat', $_GET['id_cat']);
    }


    /* ///// */

    $fullContent = $smarty_catalog -> fetch('catalog.tpl');

}




require_once('main.php');