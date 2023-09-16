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

        $smarty_main -> assign('metaTitle', $row['metaTitle']);
        $smarty_main -> assign('metaDiscription', $row['metaDiscription']);
        $smarty_main -> assign('metaKeyWords', $row['metaKeyWords']);
        $smarty_main -> assign('title', $row['title']);
        $smarty_main -> assign('fullContent', $row['fullContent']);

        //////////////////////////////////////////////
        /*              Меню addMenu                */

        $queryMenu = "select name, page from settingPage order by prior asc";

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




        mysqli_close($dbc);

        $smarty_main->display("main.tpl");

    }
    else{
        header('location:404/index.html');
    }