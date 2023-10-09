<?php
/* Smarty version 4.3.2, created on 2023-09-27 17:13:28
  from 'C:\OSPanel\domains\MyFirstShop\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65143888471535_24988191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dd8d56e8a5603b515491ccbfe302980c5ab0314' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\templates\\login.tpl',
      1 => 1695823962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65143888471535_24988191 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="login.php" method="post">
    <h5>Email</h5>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h5>Password</h5>
    <input type="password" name="password">
    <br>
    <input type="submit" name="send" value="Увійти">
</form><?php }
}
