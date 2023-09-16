<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role']) && $_SESSION['user_role'] == 1) {

    require_once('admin_info.php');

    if (!isset($_POST['send'])) {

        $smarty_reg = new Smarty();

        $content = $smarty_reg->fetch('registration.tpl');

    }
    elseif (isset($_POST['send'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['role'], $_POST['password'], $_POST['re_password']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['role']) && $_POST['password'] == $_POST['re_password']) {

        $query_check = "select id from user where email = '{$_POST['email']}'";
        $result_check = mysqli_query($dbc, $query_check) or die("Query_Check Error");

        if (mysqli_num_rows($result_check) > 0) {

            $content = 'Дана електронна адреса вже використовується';

        } else {


            if ($_FILES['photo']['error'] == 0) {
                $TMPFileName = $_FILES['photo']['tmp_name'];
                $realFileName = time() . $_FILES['photo']['name'];

                move_uploaded_file($TMPFileName, "images/$realFileName");

                $query = "insert into user (name, email, phone, photo, role, password, dataTime) values ('" . MyProtection($dbc, $_POST['name']) . "', '" . MyProtection($dbc, $_POST['email']) . "', '" . MyProtection($dbc, $_POST['phone']) . "', '$realFileName', '" . MyProtection($dbc, $_POST['role']) . "', '" . sha1(MyProtection($dbc, $_POST['password'])) . "', now())";

            }
            else {
                $query = "insert into user (name, email, phone, role, password, dataTime) values ('" . MyProtection($dbc, $_POST['name']) . "', '" . MyProtection($dbc, $_POST['email']) . "', '" . MyProtection($dbc, $_POST['phone']) . "', '" . MyProtection($dbc, $_POST['role']) . "', '" . sha1(MyProtection($dbc, $_POST['password'])) . "', now())";
            }

            mysqli_query($dbc, $query) or die("Query Error");

            $content = 'Користувач успішно зареєстрований';

        }
    }
    elseif
        (isset($_POST['send'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['role'], $_POST['password'], $_POST['re_password']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['role']) && $_POST['password'] != $_POST['re_password']){
        $content = 'Паролі не співпадають';
    }

    else {
            $content = 'Виникла помилка з реєстрацією, можливо не всі поля заповнені';
    }



    $smarty_main->assign('title', 'Реєстрація');
    $smarty_main->assign('content', $content);

    mysqli_close($dbc);
    $smarty_main->display('main.tpl');

}
else{
    header('location:../404/index.html');
}