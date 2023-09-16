<?php
/* Smarty version 4.3.2, created on 2023-08-16 17:49:11
  from 'D:\OSPanel\domains\onlineShop\admin\templates\dellPhoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64dce1e7b78e86_44932735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f1ba87a2ba92452430811a25e22080507af190' => 
    array (
      0 => 'D:\\OSPanel\\domains\\onlineShop\\admin\\templates\\dellPhoto.tpl',
      1 => 1692196605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64dce1e7b78e86_44932735 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="dellPhoto.php" method="post">
    <?php if (($_smarty_tpl->tpl_vars['status']->value == 1)) {?>
        <h2>Ви дійсно збираєтесь видалити головне фото?</h2>
        <?php } else { ?>
        <h2>Ви дійсно збираєтеся видалити другорядне фото?</h2>
    <?php }?>
    <img src="../img/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="100px">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form><?php }
}
