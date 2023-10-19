<?php

    require_once('header.php');

    $page = 'order_buy';
    $smarty_main -> assign('page', $page);

    $smarty_buy = new Smarty();



    if(isset($_SESSION['basket']) && !empty($_SESSION['basket']) && !isset($_POST['send'])){

        $basket = [];

        $total_price = 0;
        $num = 1;
        for($i = 0; $i < count($_SESSION['basket']); $i++){
            $sum = 0;
            $sum = $_SESSION['basket'][$i]['price'] * $_SESSION['basket'][$i]['count'];
            $basket[] = ['num'=>$num, 'name'=>$_SESSION['basket'][$i]['name'],'id'=>$_SESSION['basket'][$i]['id'], 'price'=>$_SESSION['basket'][$i]['price'], 'photo'=>$_SESSION['basket'][$i]['photo'], 'count'=>$_SESSION['basket'][$i]['count'], 'sum'=>$sum];
            $num++;
            $total_price += $_SESSION['basket'][$i]['price'] * $_SESSION['basket'][$i]['count'];

        }

        $smarty_buy -> assign('basket', $basket);

        if (isset($_SESSION['user_id'], $_SESSION['user_FIO'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_adress']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_FIO']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_adress'])){

            $smarty_buy -> assign('user_id', $_SESSION['user_id']);
            $smarty_buy -> assign('user_FIO', $_SESSION['user_FIO']);
            $smarty_buy -> assign('user_email', $_SESSION['user_email']);
            $smarty_buy -> assign('user_phone', $_SESSION['user_phone']);
            $smarty_buy -> assign('user_adress', $_SESSION['user_adress']);

        }

        $fullContent = $smarty_buy -> fetch('order_buy.tpl');
    }
    elseif(isset($_POST['send'], $_POST['email'], $_POST['phone'], $_POST['login'], $_POST['adress'], $_POST['disc'], $_POST['tmp']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['login']) && !empty($_POST['adress'])){

        if ($_POST['tmp'] == 1 && isset($_POST['user_id'])){
            if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){
                foreach($_SESSION['basket'] as $item){

                    $query_order = "insert into relationOrder (idUser, idCat, countCat, status, dataCat, description) values ('{$_POST['user_id']}','{$item['id']}','{$item['count']}','1',now(), '".MyProtection($dbc, $_POST['disc'])."') ";

                    mysqli_query($dbc, $query_order) or die("query Order Error");

                }
                unset($_SESSION['basket']);
            }
        }

        elseif($_POST['tmp'] == 2){
            $query_visitor = "insert into visitor (FIO, email, phone, adress, time) values('".MyProtection($dbc, $_POST['login'])."','".MyProtection($dbc, $_POST['email'])."','".MyProtection($dbc, $_POST['phone'])."','".MyProtection($dbc, $_POST['adress'])."', now())";
            mysqli_query($dbc, $query_visitor) or die("Query Visitors Error");

            $id_client = mysqli_insert_id($dbc);

            if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){
                foreach($_SESSION['basket'] as $item){
                    $query_visitor_order = "insert into visitorRelationOrder (idVisitor, idVisitorCat, visitorStatus, visitorDataCat, visitorCount, visitorDescription) values('$id_client', '{$item['id']}', 1, now(), '{$item['count']}', '".MyProtection($dbc, $_POST['disc'])."')";
                    mysqli_query($dbc, $query_visitor_order) or die("Query Visitor Order Error");

                }
                unset($_SESSION['basket']);
            }


        }


        $fullContent = "Товар Ууспішно замовлено, і вже обробляється нашими Адміністраторами";
        header("refresh:3;url=items_list.php");
    }




    require_once('main.php');