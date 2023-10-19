<?php
/* Smarty version 4.3.2, created on 2023-10-18 13:37:16
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\status_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652fb55cbadb27_99651123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2103f50c01037cf77000368593ebf64ade301816' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\status_order.tpl',
      1 => 1697625343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652fb55cbadb27_99651123 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Clients</h2>
<?php if (empty($_smarty_tpl->tpl_vars['client_order']->value)) {?>
    <h4>Замовлень не має</h4>
    <?php } else { ?>
<table border="1">
    <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['client_order']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['client_id'] != $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['old_user_id'] || $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data_time'] != $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['old_user_time']) {?>
            <tr>
                <th>№</th>
                <th>Ім'я</th>
                <th>E-mail</th>
                <th>Телефон</th>
                <th>Адресса</th>
                <th>Дата</th>
                <th>Примітка до товару</th>

                <th colspan="2">Управління замовленням</th>

            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['FIO'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['adress'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['description'];?>
</td>

                <td><a href="runOrder.php?id=<?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['client_id'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data_time'];?>
&user=client">Виконати</a></td>
                <td><a href="dellOrder.php?id=<?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['client_id'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data_time'];?>
&user=client">Видалити</a></td>

            </tr>
            <tr>
                <th>Кол</th>
                <th>Фото</th>
                <th colspan="5">Назва товара</th>
                <th>Ціна</th>
                <th>Вартість</th>
            </tr>
        <?php }?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'];?>
</td>
            <td><img width="80px" src="../img/<?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
"></td>
            <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['catalog_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['full_price'];?>
</td>
        </tr>

        <?php if ($_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['row_client'] == $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count_client']) {?>
            <th colspan="7">Всього до Сплати</th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['client_order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['total_price'];?>
</th>
            <tr><th></th></tr>
        <?php }?>

    <?php
}
}
?>
</table>
<?php }?>
<h2>Visitors</h2>
<?php if (empty($_smarty_tpl->tpl_vars['visitors']->value)) {?>
    <h4>Замовлень не має</h4>
<?php } else { ?>
<table border="1">
    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['visitors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['visitor_id'] != $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['old_visitor_id'] || $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data_time'] != $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['old_visitor_time']) {?>
            <tr>
                <th>№</th>
                <th>Ім'я</th>
                <th>E-mail</th>
                <th>Телефон</th>
                <th>Адресса</th>
                <th>Дата</th>
                <th>Примітка до товару</th>

                <th colspan="2">Управління замовленням</th>

            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['num'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['FIO'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adress'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</td>

                <td><a href="runOrder.php?id=<?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['visitor_id'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data_time'];?>
&user=visitor">Виконати</a></td>
                <td><a href="dellOrder.php?id=<?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['visitor_id'];?>
&user=visitor">Видалити</a></td>

            </tr>
            <tr>
                <th>Кол</th>
                <th>Фото</th>
                <th colspan="5">Назва товара</th>
                <th>Ціна</th>
                <th>Вартість</th>
            </tr>
        <?php }?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
            <td><img width="80px" src="../img/<?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['visitor_photo'];?>
"></td>
            <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['catalog_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['full_price'];?>
</td>
        </tr>

        <?php if ($_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count_visitor'] == $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count_visitor_catalog']) {?>
            <th colspan="7">Всього до Сплати</th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total_price'];?>
</th>
            <tr><th></th></tr>
        <?php }?>

    <?php
}
}
?>

</table>
<?php }
}
}
