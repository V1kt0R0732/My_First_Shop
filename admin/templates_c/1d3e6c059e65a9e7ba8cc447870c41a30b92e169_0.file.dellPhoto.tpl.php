<?php
/* Smarty version 4.3.2, created on 2023-08-21 16:02:42
  from 'C:\OSPanel\domains\onlineShop\admin\templates\dellPhoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e3607264c399_02155823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d3e6c059e65a9e7ba8cc447870c41a30b92e169' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\dellPhoto.tpl',
      1 => 1692196606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e3607264c399_02155823 (Smarty_Internal_Template $_smarty_tpl) {
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
