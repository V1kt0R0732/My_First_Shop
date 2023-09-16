<?php


$dbc = mysqli_connect('localhost','root','','onlineShop') or die("Server Error");

    function MyProtection($link, $data){
        return mysqli_real_escape_string($link, trim($data));
    }

?>