<?php

    require_once('header.php');

    if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

        require_once('admin_info.php');

        $smarty_dell = new Smarty();

        if (isset($_GET['id'], $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name']) && !isset($_POST['send'])) {

            $title = 'Ви дійсно бажаєте видалити категорію "' . $_GET['name'] . '"?';


            $smarty_dell->assign('id', $_GET['id']);

            $content = $smarty_dell->fetch('dellCategory.tpl');


        } elseif (isset($_POST['send'], $_POST['dell'], $_POST['id']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes') {

            $title = 'Видалення';

            $check_query = "select id from catalog where id_cat = {$_POST['id']}";
            $check_result = mysqli_query($dbc, $check_query) or die("Query Check Error");
            $check_count = mysqli_num_rows($check_result);

            if ($check_count > 0) {

                $smarty_dell->assign('count', $check_count);
                $smarty_dell->assign('id_cat', $_POST['id']);

                $title = 'Видалення відмінено';

                $content = $smarty_dell->fetch('dellCategory.tpl');


            } else {
                $query = "delete from categories where id = {$_POST['id']}";

                mysqli_query($dbc, $query) or die("Query Error");


                $content = 'Категорія успішно видалена';
            }

        } elseif (isset($_POST['send'], $_POST['dell'], $_POST['id']) && !empty($_POST['id']) && $_POST['dell'] == 'No') {
            $title = 'Відміна';

            $content = 'Категорія не видалена';

        } else {

            $title = 'Error';

            $content = "Виникла помилка, спробуйте ще раз";

        }


        mysqli_close($dbc);

        $smarty_main->assign('title', $title);
        $smarty_main->assign('content', $content);
        $smarty_main->display('main.tpl');

    }
    else{
        header('location:../404/index.html');
    }


