<?php
/* Smarty version 4.3.2, created on 2023-10-04 16:51:02
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d6dc693e0d6_87605438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6350158dbfe44c6152429bcb9ecc695ec43320b3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\registration.tpl',
      1 => 1692797204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d6dc693e0d6_87605438 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="registration.php" method="post" enctype="multipart/form-data">
    <h4>Ім'я</h4>
    <input type="text" name="name" placeholder="Ваше Ім'я" maxlength="25">
    <h4>E-mail</h4>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h4>Номер телефону</h4>
    <input type="text" name="phone" placeholder="Ваш номер телефону">
    <h4>Пароль</h4>
    <input type="password" name="password">
    <h4>Повторіть пароль</h4>
    <input type="password" name="re_password">
    <h4>Роль</h4>
    <select name="role">
        <option value="0">Оберіть Роль</option>
        <option value="2" selected>Оператор</option>
        <option value="1">Головний Адміністратор</option>
    </select>
    <h4>Оберіть Фото</h4>
    <input type="file" name="photo"><br><br>
    <input type="submit" name="send" value="Зареєструвати">


</form><?php }
}
