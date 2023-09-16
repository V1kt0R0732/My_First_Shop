<?php

    require_once('header.php');

if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

    require_once('admin_info.php');

    if (isset($_GET['photo']) && !empty($_GET['photo'])){

        $smarty_dell = new Smarty();
        $smarty_dell -> assign('photo', $_GET['photo']);

        $content = $smarty_dell -> fetch('dellAdminPhoto.tpl');

    }
    elseif(isset($_POST['send'], $_POST['photo'], $_POST['dell']) && !empty($_POST['photo']) && $_POST['dell'] == 'Yes'){

        $query_dell = "update user set photo=NULL where photo = '{$_POST['photo']}'";
        mysqli_query($dbc, $query_dell) or die("Query Dell Error");

        unlink("images/{$_POST['photo']}");

        setcookie('user_photo', 'no_profile_photo.png', time()+60*60*24*30*3);
        $_SESSION['user_photo'] = 'no_profile_photo.png';

        $content = 'Фото успішно видалено';

        header("refresh:1;url=updateUser.php");

    }
    elseif(isset($_POST['send'], $_POST['photo'], $_POSt['dell']) && !empty($_POST['photo']) && $_POST['dell'] == 'Yes') {

        $content = 'Видалення відмінено';

    }
    else{
        $content = 'Виникла помилка з видаленням';
    }






    $smarty_main -> assign('title', 'Видалення Фото');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');


}
else{
    header('location:../404/index.html');
}




