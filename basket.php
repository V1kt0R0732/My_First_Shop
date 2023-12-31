<?php

    require_once('header.php');

    if (isset($_GET['id'], $_GET['mode']) && !empty($_GET['id']) && $_GET['mode'] == 'add'){

        $all_basket = 0;
        $exist = false;

        if (!isset($_SESSION['basket'])){
            $_SESSION['basket'] = [];
        }

        if (count($_SESSION['basket']) > 0){
            for($i = 0; $i < count($_SESSION['basket']); $i++){
                if ($_SESSION['basket'][$i]['id'] == $_GET['id']){
                    $_SESSION['basket'][$i]['count']++;
                    $exist = true;
                    break;
                }
            }
        }

        if (!$exist){

            $query = "select catalog.id as id, name, price, name_photo from catalog inner join photos on catalog.id = photos.id_tovar where status = 1 and photos.id_tovar = catalog.id and catalog.id = {$_GET['id']}";
            $result = mysqli_query($dbc, $query) or die("Query Error");
            $row = mysqli_fetch_array($result);

            $_SESSION['basket'][] = ['id'=>$row['id'], 'photo'=>$row['name_photo'], 'name'=>$row['name'], 'price'=>$row['price'], 'count'=>1];


        }

    }
    elseif(isset($_GET['id'], $_GET['mode']) && !empty($_GET['id']) && $_GET['mode'] == 'dell'){

        if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){
            for($i = 0; $i < count($_SESSION['basket']); $i++){
                if ($_SESSION['basket'][$i]['id'] == $_GET['id']){
                    unset($_SESSION['basket'][$i]);
                    break;
                }
            }

            foreach($_SESSION['basket'] as $tmp){
                if (!empty($tmp)){
                    $items[] = $tmp;
                }
            }

            unset($_SESSION['basket']);
            $_SESSION['basket'] = [];
            $_SESSION['basket'] = $items;
            unset($items);
        }
    }
    elseif(isset($_GET['mode']) && $_GET['mode'] == 'clear'){
        if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){
            unset($_SESSION['basket']);
        }

    }
    elseif(isset($_POST['send'])){
        for ($i = 0; $i < count($_SESSION['basket']); $i++){
            $tmp_name = 'count' . $_SESSION['basket'][$i]['id'];
            $_SESSION['basket'][$i]['count'] = $_POST[$tmp_name];
        }
        header('location:order.php');
    }

    if (isset($_POST['ready_params']) && !empty($ready_params)){
        $ready_params = $_POST['ready_params'];
    }
    else{
        $params = [];

        if (isset($_GET['page'])){
            $params[] .= "page={$_GET['page']}";
        }
        if (isset($_GET['sort'])){
            $params[] .= "sort={$_GET['sort']}";
        }
        if (isset($_GET['id_cat'])){
            $params[] .= "id_cat={$_GET['id_cat']}";
        }
        if (isset($_GET['search'])){
            $params[] .= "search={$_GET['search']}";
        }
        if (isset($_GET['max_price'], $_GET['min_price'])){
            $params[] .= "max_price={$_GET['max_price']}&min_price={$_GET['min_price']}";
        }
        if (isset($_GET['note'])){
            $params[] .= "note={$_GET['note']}";
        }

        $ready_params = implode('&', $params);
    }


if (isset($_GET['mode']) && $_GET['mode'] == 'dell'){
    if (!empty($ready_params)){
        header("location:order.php?$ready_params");
    }
    else{
        header('location:order.php');
    }
}

elseif (isset($_GET['mode']) && $_GET['mode'] == 'add' || $_GET['mode'] == 'clear'){
    if(!empty($ready_params)){
        header("location:items_list.php?$ready_params");
    }
    else{
        header('location:items_list.php');
    }
}

