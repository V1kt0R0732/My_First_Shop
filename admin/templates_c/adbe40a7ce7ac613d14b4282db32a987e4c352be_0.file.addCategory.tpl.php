<?php
/* Smarty version 4.3.2, created on 2023-08-23 17:53:16
  from 'C:\OSPanel\domains\onlineShop\admin\templates\addCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e61d5cb38d01_03542632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbe40a7ce7ac613d14b4282db32a987e4c352be' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\addCategory.tpl',
      1 => 1690985034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e61d5cb38d01_03542632 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addCategory.php" method="post">
    <input type="text" name="category" placeholder="Назва Категорії">
    <input type="submit" name="send" value="Додати">
</form>
<?php }
}
