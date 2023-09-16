<?php
/* Smarty version 4.3.2, created on 2023-09-04 16:21:09
  from 'C:\OSPanel\domains\onlineShop\admin\templates\password_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f5d9c5a4d536_28087663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '054aa21ae1a3090543ee20080041ca3e4a0e827a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\password_update.tpl',
      1 => 1693833230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f5d9c5a4d536_28087663 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="password_update.php" method="post">
    <h4>Введіть теперішній пароль</h4>
    <input type="password" name="password">
    <h4>Введіть новий пароль</h4>
    <input type="password" name="new_password">
    <h4>Повторіть новий пароль</h4>
    <input type="password" name="re_new_password">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Змінити">
</form><?php }
}
