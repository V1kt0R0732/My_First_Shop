<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    if(!isset($_POST['send'])){

        $smarty_update = new Smarty();

        $smarty_update -> assign('user_id', $_SESSION['user_id']);
        $smarty_update -> assign('user_name', $_SESSION['user_name']);
        $smarty_update -> assign('user_email', $_SESSION['user_email']);
        $smarty_update -> assign('user_phone', $_SESSION['user_phone']);
        $smarty_update -> assign('user_photo', $_SESSION['user_photo']);
        $smarty_update -> assign('user_role', $_SESSION['user_role']);


        $content = $smarty_update -> fetch('updateUser.tpl');

    }
    elseif(isset($_POST['send'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['id'])){



        if($_FILES['photo']['error'] == 0){
            $TMPFileName = $_FILES['photo']['tmp_name'];
            $realFileName = time().$_FILES['photo']['name'];

            move_uploaded_file($TMPFileName, "images/$realFileName");

            $query_photo = "select photo from user where id = {$_POST['id']}";
            $result_photo = mysqli_query($dbc, $query_photo)or die("Query Photo Error");
            $row_photo = mysqli_fetch_array($result_photo);

            if (mysqli_num_rows($result_photo) > 0){
                @unlink("images/{$row_photo['photo']}");
            }


            $query_update = "update user set name='".MyProtection($dbc, $_POST['name'])."', phone='".MyProtection($dbc, $_POST['phone'])."', photo='$realFileName' where id = {$_POST['id']}";

            setcookie('user_photo', $realFileName, time()+60*60*24*30*3);

            $_SESSION['user_photo'] = $realFileName;
        }
        else{
            $query_update = "update user set name='".MyProtection($dbc, $_POST['name'])."', phone='".MyProtection($dbc, $_POST['phone'])."' where id = {$_POST['id']}";
        }

        mysqli_query($dbc, $query_update) or die("Query Error");

        setcookie('user_name', $_POST['name'], time()+60*60*24*30*3);
        setcookie('user_phone', $_POST['phone'], time()+60*60*24*30*3);

        $_SESSION['user_name'] = $_POST['name'];
        $_SESSION['user_phone'] = $_POST['phone'];



        $query_email_check = "select email from user where email = '{$_POST['email']}'";
        $result_email_check = mysqli_query($dbc, $query_email_check) or die("Query Email Check Error");
        $row_email_check = mysqli_fetch_array($result_email_check);

        $query_email = "select email from user where id = {$_POST['id']}";
        $result_email = mysqli_query($dbc, $query_email)or die('query Email Error');
        $row_email = mysqli_fetch_array($result_email);


        if (mysqli_num_rows($result_email_check) > 0){

            if ($row_email_check == $row_email){
                $content = "Профіль Успішно оновлено";
            }
            else{
                $content = "Всі параметри оновлені, крім email, Цей E-mail вже використовується";
            }

        }
        else{
            $query_change_email = "update user set email='".MyProtection($dbc, $_POST['email'])."' where id = {$_POST['id']}";
            mysqli_query($dbc, $query_change_email) or die("Query Error");

            setcookie('user_email', $_POST['email'], time()+60*60*24*30*3);

            $_SESSION['user_email'] = $_POST['email'];

            $content = "Профіль Успішно оновлено";
        }


        header('refresh:1;url=updateUser.php');


    }
    else{
        $content = "Помилка в редагування";
    }





    $smarty_main -> assign('title', 'Налаштування Профілю');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main->display('main.tpl');
}
else{
    header('location:../404/index.html');
}

?>