<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    $smarty_page = new Smarty();

    $query_page = "select id, title from settingPage order by prior asc";
    $result_page = mysqli_query($dbc, $query_page) or die("Query_page Error");

    $page = [];

    $num = 1;
    while ($row_page = mysqli_fetch_array($result_page)) {

        $page[] = ['id' => $row_page['id'], 'title' => $row_page['title'], 'num' => $num];
        $num++;

    }

    $smarty_page->assign('page', $page);

    $content = $smarty_page->fetch('indexPage.tpl');


    $smarty_main->assign('title', 'Управління Сторінками');
    $smarty_main->assign('content', $content);

    mysqli_close($dbc);
    $smarty_main->display('main.tpl');

}
else{
    header('location:../404/index.html');
}

?>