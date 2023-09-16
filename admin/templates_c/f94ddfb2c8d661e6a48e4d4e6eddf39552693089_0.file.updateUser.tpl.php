<?php
/* Smarty version 4.3.2, created on 2023-09-04 16:04:26
  from 'C:\OSPanel\domains\onlineShop\admin\templates\updateUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f5d5da3e0174_01111362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94ddfb2c8d661e6a48e4d4e6eddf39552693089' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\updateUser.tpl',
      1 => 1693832663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f5d5da3e0174_01111362 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="updateUser.php" method="post" enctype="multipart/form-data">
    <h4>Фото Профілю:</h4>
    <img src="images/<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
" width="90px">
    <?php if (($_smarty_tpl->tpl_vars['user_photo']->value != 'no_profile_photo.png')) {?>
        <br>
        <a href="dellAdminPhoto.php?photo=<?php echo $_smarty_tpl->tpl_vars['user_photo']->value;?>
">Видалити Фото</a>
    <?php }?>
    <h4>Змінити ім'я</h4>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
    <h4>Змінити номер телефону</h4>
    <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user_phone']->value;?>
">
    <h4>Змінити E-mail</h4>
    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
">
    <br>
    <h4>Змінити фото</h4>
    <input type="file" name="photo">
    <br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">
    <h4>Змініть пароль:</h4>
    <a href="password_update.php?id=<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">Click</a>
    <br>
    <br>
    <input type="submit" name="send" value="Прийняти Зміни">
</form><?php }
}
