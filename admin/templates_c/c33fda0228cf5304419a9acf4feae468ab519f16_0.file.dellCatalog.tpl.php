<?php
/* Smarty version 4.3.2, created on 2023-08-19 23:33:52
  from 'C:\OSPanel\domains\onlineShop\admin\templates\dellCatalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e1273009bf91_74121372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c33fda0228cf5304419a9acf4feae468ab519f16' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\dellCatalog.tpl',
      1 => 1691598918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e1273009bf91_74121372 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="dellCatalog.php" method="post">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form><?php }
}
