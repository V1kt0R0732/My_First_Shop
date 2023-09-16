<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

}

    if (!isset($_POST['send'])) {

        $smarty_log = new Smarty();

        $content = $smarty_log->fetch('login.tpl');
    } elseif (isset($_POST['send'], $_POST['password'], $_POST['email']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $query = "select id, name, email, phone, photo, role from user where email = '{$_POST['email']}' and password = '" . sha1($_POST['password']) . "'";

        $result = mysqli_query($dbc, $query) or die("Query Error");

        $row = mysqli_fetch_array($result);


        if (mysqli_num_rows($result) < 1) {

            $content = 'Неправильно введені Email або password';

        }
        else {

            if (empty($row['photo'])){
                $row['photo'] = 'no_profile_photo.png';
            }

            $query_time = "update user set dataTime = now() where id = {$row['id']}";
            mysqli_query($dbc, $query_time) or die("Query_Time Error");

            setcookie('user_id', $row['id'], time() + 60 * 60 * 24 * 30 * 3);
            setcookie('user_name', $row['name'], time() + 60 * 60 * 24 * 30 * 3);
            setcookie('user_email', $row['email'], time() + 60 * 60 * 24 * 30 * 3);
            setcookie('user_phone', $row['phone'], time() + 60 * 60 * 24 * 30 * 3);
            setcookie('user_photo', $row['photo'], time() + 60 * 60 * 24 * 30 * 3);
            setcookie('user_role', $row['role'], time() + 60 * 60 * 24 * 30 * 3);

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_phone'] = $row['phone'];
            $_SESSION['user_photo'] = $row['photo'];
            $_SESSION['user_role'] = $row['role'];


            $content = 'Вхід успішно виконано';

            header('refresh:1;url=index.php');
        }


    }


    $smarty_main->assign('title', 'Вхід');
    $smarty_main->assign('content', $content);

    mysqli_close($dbc);
    $smarty_main->display('main.tpl');



?>