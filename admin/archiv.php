<?php

require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');
    $smarty_hiv = new Smarty();

    /* Clients */

    $query_client = "select client.id as client_id, FIO, email, phone, adress, countCat, dataCat, description, name, price, name_photo from client inner join relationOrder on client.id = relationOrder.idUser inner join catalog on relationOrder.idCat = catalog.id inner join photos on photos.id_tovar = catalog.id where photos.status = 1 and relationOrder.status = 0 order by dataCat asc, FIO asc";
    $result_client = mysqli_query($dbc, $query_client) or die("Query Client Error");

    $total_price = 0;
    $user_count_cat = 0;
    $tmp = 0;
    $change_user_data = '';
    $change_user_id = 0;
    $clients = [];
    $num = 0;
    while($row_client = mysqli_fetch_array($result_client)){

        if($change_user_id != $row_client['client_id'] || $change_user_data != $row_client['dataCat']){
            $query_count_cat = "select id from relationOrder where idUser = {$row_client['client_id']} and dataCat = '{$row_client['dataCat']}'";
            $result_count_cat = mysqli_query($dbc, $query_count_cat) or die("Query Count Cat Error");
            $user_count_cat = mysqli_num_rows($result_count_cat);
            $tmp = 0;
            $total_price = 0;
            $num++;
        }

        $full_price = $row_client['price'] * $row_client['countCat'];
        $tmp++;
        $total_price += $full_price;

        $clients[] = ['change_user_id'=>$change_user_id,'change_user_data'=>$change_user_data,'price'=>$row_client['price'],'full_price'=>$full_price,'total_price'=>$total_price,'count_user_cat_tmp'=>$tmp,'count_user_cat'=>$user_count_cat,'num'=>$num,'id'=>$row_client['client_id'],'FIO'=>$row_client['FIO'],'email'=>$row_client['email'],'phone'=>$row_client['phone'],'adress'=>$row_client['adress'],'count_cat'=>$row_client['countCat'],'data_cat'=>$row_client['dataCat'],'description'=>$row_client['description'],'photo'=>$row_client['name_photo'],'catalog_name'=>$row_client['name']];
        $change_user_id = $row_client['client_id'];
        $change_user_data = $row_client['dataCat'];


    }

    /* Visitors */

    $query_visitors = "select name_photo, visitor.id as visitor_id, name, visitorDataCat, visitorCount, visitorDescription, FIO, email, phone, adress, price from visitor inner join visitorRelationOrder on visitor.id = visitorRelationOrder.idVisitor inner join catalog on visitorRelationOrder.idVisitorCat = catalog.id inner join photos on catalog.id = photos.id_tovar where visitorStatus = 0 and photos.status = 1 order by FIO asc, visitorDataCat asc";
    $result_visitors = mysqli_query($dbc, $query_visitors) or die("Query Visitors Error");

    $visitors = [];

    $total_visitor_price = 0;
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




    $smarty_hiv -> assign('visitors', $visitors);

    $smarty_hiv -> assign('clients', $clients);

    $content = $smarty_hiv -> fetch("archiv.tpl");



    $smarty_main -> assign('title', 'Архів Замовлень');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display("main.tpl");

}
else{
    header("location:404/404page.html");
}