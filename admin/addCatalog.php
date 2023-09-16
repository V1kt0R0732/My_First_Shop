<?php

    require_once("header.php");

    if(isset($_SESSION['user_name'], $_SESSION['user_email'], $_SESSION['user_phone'], $_SESSION['user_photo'], $_SESSION['user_role']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_photo']) && !empty($_SESSION['user_role'])) {

        require_once('admin_info.php');

        if (!isset($_POST['send'])) {
            $smarty_catalog = new Smarty();

            $query = "select id, name from categories";

            $result = mysqli_query($dbc, $query) or die("Query Error");

            $category = [];

            while ($row = mysqli_fetch_array($result)) {
                $category[] = ['id' => $row['id'], 'category_name' => $row['name']];
            }

            $smarty_catalog->assign("category", $category);

            $content = $smarty_catalog->fetch('addCatalog.tpl');
        } elseif (isset($_POST['send'], $_POST['catalog'], $_POST['height'], $_POST['wight'], $_POST['material'], $_POST['color'], $_POST['price'], $_POST['count'], $_POST['description'], $_POST['category'], $_POST['metaTitle'], $_POST['metaKeyWords'], $_POST['metaDiscription']) && !empty($_POST['catalog']) && !empty($_POST['height']) && !empty($_POST['wight']) && !empty($_POST['material']) && !empty($_POST['color']) && !empty($_POST['price']) && !empty($_POST['count']) && !empty($_POST['description']) && !empty($_POST['category'])) {

            $query = "insert into catalog (name, height, wight, material, color, price, colvo, fulldescription, id_cat, metaTitle, metaKeyWords, metaDiscription) values ('" . MyProtection($dbc, $_POST['catalog']) . "', '" . MyProtection($dbc, $_POST['height']) . "','" . MyProtection($dbc, $_POST['wight']) . "','" . MyProtection($dbc, $_POST['material']) . "','" . MyProtection($dbc, $_POST['color']) . "','" . MyProtection($dbc, $_POST['price']) . "','" . MyProtection($dbc, $_POST['count']) . "','" . MyProtection($dbc, $_POST['description']) . "', '{$_POST['category']}', '" . MyProtection($dbc, $_POST['metaTitle']) . "', '" . MyProtection($dbc, $_POST['metaKeyWords']) . "', '" . MyProtection($dbc, $_POST['metaDiscription']) . "')";


            mysqli_query($dbc, $query) or die("$query");

            $product_id = mysqli_insert_id($dbc);

            if (isset($_FILES['photo']['error'][0], $_FILES['photo']['name'][0]) && $_FILES['photo']['error'][0] == 0) {
                for ($i = 0; $i < count($_FILES['photo']['name']); $i++) {
                    if (isset($_FILES['photo']['name'][$i]) && $_FILES['photo']['size'][$i] > 0) {
                        $fileNameTEMP = $_FILES['photo']['tmp_name'][$i];
                        $realFileName = time() . $_FILES['photo']['name'][$i];

                        move_uploaded_file($fileNameTEMP, "../img/$realFileName");

                        if ($i == 0) {
                            $queryPhoto = "insert into photos (id_tovar, name_photo, status) values('$product_id', '$realFileName', 1)";
                        } else {
                            $queryPhoto = "insert into photos (id_tovar, name_photo, status) values('$product_id', '$realFileName', 0)";
                        }

                        mysqli_query($dbc, $queryPhoto) or die("Query Foto Error");

                    }

                }

            }


            $content = "Товар Успішно доданий";
        } else {
            $content = "Недостатньо даних для добавлення товару";
        }


        $smarty_main->assign("title", 'Додати товар');
        $smarty_main->assign("content", $content);

        mysqli_close($dbc);
        $smarty_main->display("main.tpl");
    }
    else{
        header('location:../404/index.html');
    }

