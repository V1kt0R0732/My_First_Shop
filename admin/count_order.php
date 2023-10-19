<?php

require_once('header.php');
if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {
    require_once('admin_info.php');
    $smarty_order = new Smarty();

    /* Client */

    $query_client = "select sum(countCat) as count_cat, FIO from client inner join relationOrder on client.id = relationOrder.idUser where status = 0 group by (idUser) order by count_cat desc;";

    $result_client = mysqli_query($dbc, $query_client) or die("Query Client Error");

    $client = [];
    while($row_client = mysqli_fetch_array($result_client)){
        $client[] = ['FIO'=>$row_client['FIO'],'count'=>$row_client['count_cat']];
    }

    /* Clients with no product*/


    /* Спосіб 1 (Не ефективний) */
    /*
    $query_all_client = "select id , FIO from client";
    $result_all_client = mysqli_query($dbc, $query_all_client) or die("Query all Client Error");

    $clear_clients = [];
    $num = 1;

    while($row_all_client = mysqli_fetch_array($result_all_client)){

        $query_search_client = "select idUser from relationOrder where idUser = {$row_all_client['id']}";
        $result_search_client = mysqli_query($dbc, $query_search_client) or die("Query Search Client");


        if (mysqli_num_rows($result_search_client) == 0){
            $clear_clients[] = ['FIO'=>$row_all_client['FIO'], 'num'=>$num];
            $num++;
        } // Щоб з Mysql; поверталося is NULL. Доробити. 2 варіанти.
    }
    */
    /* ///////////// */
    /* Спосіб за допомогою Sql Запроса */

    $query_clear_client = "select FIO, idUser from client left join relationOrder on client.id = relationOrder.idUser where idUser is Null";
    $result_clear_client = mysqli_query($dbc, $query_clear_client) or die("Query Clear Clierns");

    $num = 1;
    while($row_clear_client = mysqli_fetch_array($result_clear_client)){
        $clear_clients[] = ['FIO'=>$row_clear_client['FIO'], 'num'=>$num];
        $num++;
    }

    $smarty_order -> assign('clear_client', $clear_clients);

    /* Visitor */

    $query_visitor = "select sum(visitorCount) as visitor_count, FIO from visitor inner join visitorRelationOrder on visitor.id = visitorRelationOrder.idVisitor where visitorStatus = 0 group by (idVisitor) order by visitor_count desc;";
    $result_visitor = mysqli_query($dbc, $query_visitor) or die("Query Visitor Error");
    $visitor = [];

    while($row_visitor = mysqli_fetch_array($result_visitor)){
        $visitor[] = ['FIO'=>$row_visitor['FIO'],'count'=>$row_visitor['visitor_count']];
    }


    $smarty_order -> assign('visitor', $visitor);
    $smarty_order -> assign('client', $client);

    $content = $smarty_order -> fetch('count_order.tpl');



    $smarty_main -> assign('title', 'Відсортування за кількістю');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header("location:404/404page.html");
}

