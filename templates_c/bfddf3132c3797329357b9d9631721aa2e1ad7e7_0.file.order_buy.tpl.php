<?php
/* Smarty version 4.3.2, created on 2023-10-04 16:38:18
  from 'C:\OSPanel\domains\MyFirstShop\templates\order_buy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651d6acaa6f880_20730793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfddf3132c3797329357b9d9631721aa2e1ad7e7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\templates\\order_buy.tpl',
      1 => 1696426223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651d6acaa6f880_20730793 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="2" style="">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>Кількість</th>
        <th>Вартість</th>
    </tr>
    <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['basket']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
        <td><img width = 80px src="img/<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sum'];?>
</td>
    </tr>
    <?php
}
}
?>
</table>
<?php if ((isset($_smarty_tpl->tpl_vars['user_id']->value) && isset($_smarty_tpl->tpl_vars['user_FIO']->value) && isset($_smarty_tpl->tpl_vars['user_email']->value) && isset($_smarty_tpl->tpl_vars['user_phone']->value) && isset($_smarty_tpl->tpl_vars['user_adress']->value))) {?>
    <h3>Ви успішно Авторизовані</h3>
    <h4>Змінити дані за потреби:</h4>
    <form action="order_buy.php" method="post">
        <h5>Email:</h5>
        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
">
        <h5>Phone Number:</h5>
        <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user_phone']->value;?>
">
        <h5>ФІО:</h5>
        <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['user_FIO']->value;?>
">
        <h5>Адрес доставки:</h5>
        <input type="texr" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['user_adress']->value;?>
">
        <h5>Примітка до замовлення:</h5>
        <textarea name="disc" placeholder="Нотаток"></textarea>
        <br>
        <input type="hidden" name="tmp" value="1">
        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">
        <input type="submit" name="send" value="Замовити">
    </form>

    <?php } else { ?>

    <h4><a href="registration.php">Зареєструйтесь</a> або <a href="login.php">Увійдіть</a><br> або офоміть, як гість:</h4>
    <h3>Оформити як гість: </h3>

    <form action="order_buy.php" method="post">
        <h5>Email:</h5>
        <input type="email" name="email" placeholder="Example@gmail.com">
        <h5>Phone Number:</h5>
        <input type="text" name="phone" placeholder="063 xxx xx xx">
        <h5>ФІО:</h5>
        <input type="text" name="login" placeholder="ФІО">
        <h5>Адрес доставки:</h5>
        <input type="texr" name="adress" placeholder="Адрес доставки">
        <h5>Примітка до замовлення:</h5>
        <textarea name="disc" placeholder="Нотаток"></textarea>
        <br>
        <input type="hidden" name="tmp" value="2">
        <input type="submit" name="send" value="Відправити">
    </form>
<?php }?>

<?php }
}
