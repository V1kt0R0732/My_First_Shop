<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $smarty_order = new Smarty();

    /* Clients */

    $query = "select client.id as client_id, FIO, email, phone, adress, countCat, dataCat, description, name, price, name_photo from client inner join relationOrder on client.id = relationOrder.idUser inner join catalog on relationOrder.idCat = catalog.id inner join photos on catalog.id = photos.id_tovar where relationOrder.status = 1 and photos.status = 1 order by FIO asc, dataCat asc;";
    $result = mysqli_query($dbc, $query) or die("Query Error");

    $row_client = 0;
    $old_user_id = 0;
    $old_user_time = 0;
    $full_price = 0;
    $client_order = [];
    $num = 0;
    while($row = mysqli_fetch_array($result)){
        if ($old_user_id != $row['client_id'] || $old_user_time != $row['dataCat']){
            $query_check = "select idCat from relationOrder where idUser = {$row['client_id']} and dataCat = '{$row['dataCat']}'";
            $result_check = mysqli_query($dbc, $query_check) or die("Query Check Error");
            $count_client = mysqli_num_rows($result_check);
            $row_client = 0;
            $total_price = 0;

            $num++;
        }

        $full_price = $row['countCat'] * $row['price'];
        $row_client++;
        $total_price += $full_price;

        $client_order[] = ['old_user_time'=>$old_user_time,'total_price'=>$total_price,'count_client'=>$count_client,'row_client'=>$row_client,'old_user_id'=>$old_user_id,'client_id'=>$row['client_id'],'num'=>$num,'FIO'=>$row['FIO'],'email'=>$row['email'],'phone'=>$row['phone'],'adress'=>$row['adress'],'data_time'=>$row['dataCat'],'count'=>$row['countCat'],'photo'=>$row['name_photo'],'catalog_name'=>$row['name'],'full_price'=>$full_price, 'description'=>$row['description'],'price'=>$row['price']];


        $old_user_id = $row['client_id'];
        $old_user_time = $row['dataCat'];

    }

    /* Visitors */

    $query_visitors = "select name_photo, visitor.id as visitor_id, name, visitorDataCat, visitorCount, visitorDescription, FIO, email, phone, adress, price from visitor inner join visitorRelationOrder on visitor.id = visitorRelationOrder.idVisitor inner join catalog on visitorRelationOrder.idVisitorCat = catalog.id inner join photos on catalog.id = photos.id_tovar where visitorStatus = 1 and photos.status = 1 order by FIO asc, visitorDataCat asc";
    $result_visitors = mysqli_query($dbc, $query_visitors) or die("Query Visitors Error");

    $visitors = [];

    $old_visitor_id = 0;
    $old_visitor_time = 0;
    $full_visitor_price = 0;
    $count_visitor = 0;
    $num = 0;
    while($row_visitors = mysqli_fetch_array($result_visitors)){

        if ($old_visitor_id != $row_visitors['visitor_id'] || $old_visitor_time != $row_visitors['visitorDataCat']){

            $query_visitors_check = "select id from visitorRelationOrder where idVisitor = {$row_visitors['visitor_id']} and visitorDataCat = '{$row_visitors['visitorDataCat']}'";
            $result_visitors_check = mysqli_query($dbc, $query_visitors_check) or die("Query Visitors Check Error");
            $count_visitor_catalog = mysqli_num_rows($result_visitors_check);
            $count_visitor = 0;
            $total_visitor_price = 0;
            $num++;
        }
        $full_visitor_price = $row_visitors['visitorCount'] * $row_visitors['price'];
        $total_visitor_price += $full_visitor_price;
        $count_visitor++;


        $visitors[] = ['description'=>$row_visitors['visitorDescription'],'count_visitor'=>$count_visitor,'count_visitor_catalog'=>$count_visitor_catalog,'visitor_photo'=>$row_visitors['name_photo'],'num'=>$num,'old_visitor_time'=>$old_visitor_time,'data_time'=>$row_visitors['visitorDataCat'],'old_visitor_id'=>$old_visitor_id,'catalog_name'=>$row_visitors['name'],'visitor_id'=>$row_visitors['visitor_id'], 'FIO'=>$row_visitors['FIO'], 'email'=>$row_visitors['email'],'phone'=>$row_visitors['phone'], 'adress'=>$row_visitors['adress'],'count'=>$row_visitors['visitorCount'],'price'=>$row_visitors['price'], 'full_price'=>$full_visitor_price, 'total_price'=>$total_visitor_price];

        $old_visitor_id = $row_visitors['visitor_id'];
        $old_visitor_time = $row_visitors['visitorDataCat'];


    }




    $smarty_order -> assign('visitors', $visitors);
    $smarty_order -> assign('client_order', $client_order);



    $content = $smarty_order -> fetch('status_order.tpl');

    $smarty_main -> assign('title', 'Управління Замовленням');
    $smarty_main -> assign('content', $content);
    $smarty_main -> display('main.tpl');
    mysqli_close($dbc);

}
else{
    header('location:../404/index.html');
}