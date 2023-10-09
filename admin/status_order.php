<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $smarty_order = new Smarty();

    $query = "select client.id as client_id, FIO, email, phone, adress, dataCat, countCat, relationOrder.status as order_status, name_photo, name, price from client inner join relationOrder on client.id = relationOrder.idUser inner join catalog on catalog.id = relationOrder.idcat inner join photos on catalog.id = photos.id_tovar where photos.status = 1;";
    $result = mysqli_query($dbc, $query) or die("Query Error");

    $old_user_id = 0;
    $price = 0;
    $client_order = [];
    $num = 1;
    while($row = mysqli_fetch_array($result)){
        $price = $row['countCat'] * $row['price'];
        if($old_user_id != $row['client_id']){
            $client_order[] = ['num'=>$num,'FIO'=>$row['FIO'],'email'=>$row['email'],'phone'=>$row['phone'],'adress'=>$row['adress'],'data_time'=>$row['dataCat'],'count'=>$row['countCat'],'status'=>$row['order_status'],'photo'=>$row['name_photo'],'catalog_name'=>$row['name'],'price'=>$price];
        }
        else{
            $client_order[] = ['num'=>'','FIO'=>'','email'=>'','phone'=>'','adress'=>'','data_time'=>$row['dataCat'],'count'=>$row['countCat'],'status'=>$row['order_status'],'photo'=>$row['name_photo'],'catalog_name'=>$row['name'],'price'=>$price];
        }
        $old_user_id = $row['client_id'];
        $num++;
    }

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