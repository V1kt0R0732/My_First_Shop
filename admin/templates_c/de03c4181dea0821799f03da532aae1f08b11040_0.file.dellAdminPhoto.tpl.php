<?php
/* Smarty version 4.3.2, created on 2023-08-30 22:57:51
  from 'C:\OSPanel\domains\onlineShop\admin\templates\dellAdminPhoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ef9f3f666803_03879649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de03c4181dea0821799f03da532aae1f08b11040' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\dellAdminPhoto.tpl',
      1 => 1693424505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ef9f3f666803_03879649 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="dellAdminPhoto.php" method="post">
    <h4>Ви дійсно бажаєте видалити фото профілю:</h4>
    <img scr="images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
    <input type="hidden" name="photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="submit" name="send" value="Видалити">
</form><?php }
}
