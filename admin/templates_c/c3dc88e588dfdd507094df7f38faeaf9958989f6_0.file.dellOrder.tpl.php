<?php
/* Smarty version 4.3.2, created on 2023-10-18 13:37:32
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\dellOrder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652fb56c10d6d0_35337595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3dc88e588dfdd507094df7f38faeaf9958989f6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\dellOrder.tpl',
      1 => 1697618270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652fb56c10d6d0_35337595 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="dellOrder.php" method="post">
    <h3>Ви дійсно хочите видалити користувача на ім'я "<?php echo $_smarty_tpl->tpl_vars['FIO']->value;?>
"?</h3>
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
    <input type="hidden" name="data" value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"
    <br>
    <input type="submit" name="send" value="Видалити">
</form>
<?php }
}
