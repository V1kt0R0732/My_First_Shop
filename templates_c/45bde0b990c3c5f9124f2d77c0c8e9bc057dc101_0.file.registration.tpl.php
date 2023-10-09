<?php
/* Smarty version 4.3.2, created on 2023-09-27 16:46:35
  from 'C:\OSPanel\domains\MyFirstShop\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6514323b174c66_12347726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45bde0b990c3c5f9124f2d77c0c8e9bc057dc101' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\templates\\registration.tpl',
      1 => 1695822393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6514323b174c66_12347726 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="registration.php" method="post">
    <h5>FIO</h5>
    <input type="text" name="FIO" placeholder="FIO">
    <h5>E-mail</h5>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h5>Phone Number</h5>
    <input type="text" name="phone" placeholder="063 xxx xx xx">
    <h5>Вкажіть вашу адресу</h5>
    <input type="text" name="adress" placeholder="Your Adress">
    <h5>Проль</h5>
    <input type="password" name="password">
    <h5>Повторіть пароль</h5>
    <input type="password" name="re_password">
    <br>
    <input type="submit" name="send" value="Зареєструватися">
</form><?php }
}
