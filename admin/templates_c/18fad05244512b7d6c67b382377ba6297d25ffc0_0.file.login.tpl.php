<?php
/* Smarty version 4.3.2, created on 2023-08-23 16:48:32
  from 'C:\OSPanel\domains\onlineShop\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e60e305c77c2_51113648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18fad05244512b7d6c67b382377ba6297d25ffc0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\login.tpl',
      1 => 1692798507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e60e305c77c2_51113648 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="login.php" method="post">
    <h3>E-mail</h3>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h3>Password</h3>
    <input type="password" name="password">
    <input type="submit" name="send" value="Увійти">
</form><?php }
}
