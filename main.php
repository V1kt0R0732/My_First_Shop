<?php

    //define('SMARTY_LIB', 'libs/');

    //require_once(SMARTY_LIB."Smarty.class.php");

    //$smarty_main = new Smarty();

    //require_once("admin/param.php");

    //$page = 'index';

    if(isset($page)) {

        $query = "select metaTitle, metaDiscription, metaKeyWords, title, fullContent from settingPage where page = '$page'";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);

        if (isset($metaTitle) && !empty($metaTitle)){
            $row['metaTitle'] = $metaTitle;
        }
        if (isset($metaDiscription) && !empty($metaDiscription)){
            $row['metaDiscription'] = $metaDiscription;
        }
        if (isset($metaKeyWords) && !empty($metaKeyWords)){
            $row['metaKeyWords'] = $metaKeyWords;
        }
        if (isset($title) && !empty($title)){
            $row['title'] = $title;
        }
        if (isset($fullContent) && !empty($fullContent)){
            $row['fullContent'] = $fullContent;
        }

        $all_basket = 0;
        if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){
            if (count($_SESSION['basket']) > 0){
                for($k = 0; $k < count($_SESSION['basket']); $k++){
                    $all_basket += $_SESSION['basket'][$k]['count'];
                }
                $smarty_main -> assign('count_basket', $all_basket);
            }
        }



        $smarty_main -> assign('metaTitle', $row['metaTitle']);
        $smarty_main -> assign('metaDiscription', $row['metaDiscription']);
        $smarty_main -> assign('metaKeyWords', $row['metaKeyWords']);
        $smarty_main -> assign('title', $row['title']);
        $smarty_main -> assign('fullContent', $row['fullContent']);

        //////////////////////////////////////////////
        /*              Меню addMenu                */

        $queryMenu = "select name, page from settingPage where prior < 6 order by prior asc";

        $resultMenu = mysqli_query($dbc, $queryMenu) or die("Query Menu Error");

        $menu = [];

        while ($rowMenu = mysqli_fetch_array($resultMenu)){
            $menu[] = ['name' => $rowMenu['name'], 'page'=>$rowMenu['page']];
        }

        $smarty_main -> assign('menu', $menu);


        //////////////////////////////////////////////
        /*             Категорії                    */

        $query_cat = "select id, name from categories";
        $result_cat = mysqli_query($dbc, $query_cat) or die("Query_Cat Error");

        $category = [];

        while($row_cat = mysqli_fetch_array($result_cat)){
            $category[] = ['id_cat'=>$row_cat['id'],'name'=>$row_cat['name']];
        }

        $smarty_main -> assign('category', $category);

        /////////////////////////////////////////////
        /*               Client                    */

        if (isset($_COOKIE['id'], $_COOKIE['FIO'], $_COOKIE['email'], $_COOKIE['phone'], $_COOKIE['adress'])){

            $_SESSION['user_id'] = $_COOKIE['id'];
            $_SESSION['user_FIO'] = $_COOKIE['FIO'];
            $_SESSION['user_adress'] = $_COOKIE['adress'];
            $_SESSION['user_email'] = $_COOKIE['email'];
            $_SESSION['user_phone'] = $_COOKIE['phone'];


            $smarty_main -> assign('user_id', $_SESSION['user_id']);
            $smarty_main -> assign('user_FIO', $_SESSION['user_FIO']);
            $smarty_main -> assign('user_email', $_SESSION['user_email']);
            $smarty_main -> assign('user_phone', $_SESSION['user_phone']);
            $smarty_main -> assign('user_adress', $_SESSION['user_adress']);

        }



        mysqli_close($dbc);

        $smarty_main->display("main.tpl");

    }
    else{
        header('location:404/index.html');
    }