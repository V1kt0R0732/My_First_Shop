<?php
/* Smarty version 4.3.2, created on 2023-10-19 12:23:37
  from 'C:\OSPanel\domains\MyFirstShop\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530f59922ceb9_11842247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e4d1fcc36c0bfb5bc5d6c976187f278477b9d31' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\templates\\profile.tpl',
      1 => 1697707411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530f59922ceb9_11842247 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="profile">
    <b>Fio:</b><?php echo $_smarty_tpl->tpl_vars['FIO']->value;?>
<br>
    <b>E-mail</b><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br>
    <b>Phone</b><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<br>
    <b>Adress</b><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
<br>
    <a href="exit.php">Exit</a>
</div>

<?php }
}
