<?php
/* Smarty version 4.3.2, created on 2023-10-04 16:43:20
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d6bf8d387f0_04161690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd281ebc4d553cc035ee6fa9ef8465ca4f40cc82b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\login.tpl',
      1 => 1692798507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d6bf8d387f0_04161690 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="login.php" method="post">
    <h3>E-mail</h3>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h3>Password</h3>
    <input type="password" name="password">
    <input type="submit" name="send" value="Увійти">
</form><?php }
}
