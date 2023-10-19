<?php
/* Smarty version 4.3.2, created on 2023-10-18 17:38:17
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\archiv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652fedd9729bd3_63896135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fee83b8cad0e69668b705bded8c07dae20e47ee3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\archiv.tpl',
      1 => 1697639896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652fedd9729bd3_63896135 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Clients</h2>
<?php if (empty($_smarty_tpl->tpl_vars['clients']->value)) {?>
    <h4>Замовлень не має</h4>
<?php } else { ?>
    <table border="2">
        <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['clients']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['change_user_id'] != $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'] || $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['change_user_data'] != $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data_cat']) {?>

                <tr>
                    <th>№</th>
                    <th>Ім'я</th>
                    <th>E-mail</th>
                    <th>Телефон</th>
                    <th>Адресса</th>
                    <th>Дата</th>
                    <th>Примітка до товару</th>
                    <th colspan="2">Управління</th>
                </tr>

                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['FIO'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['phone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['adress'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data_cat'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['description'];?>
</td>
                    <td colspan="2"><a href="recovery.php?id=<?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data_cat'];?>
&user=clients">Повернути</a></td>
                </tr>

                <tr>
                    <th>Кол</th>
                    <th>Фото</th>
                    <th colspan="5">Назва Товара</th>
                    <th>Ціна</th>
                    <th>Вартість</th>
                </tr>
            <?php }?>


            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count_cat'];?>
</td>
                <td><img src="../img/<?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
" width="80px"></td>
                <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['catalog_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['full_price'];?>
</td>
            </tr>

            <?php if ($_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count_user_cat'] == $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count_user_cat_tmp']) {?>
                <tr>
                    <th colspan="7">Всього до сплати</th>
                    <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['clients']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['total_price'];?>
</th>
                </tr>
            <?php }?>
            <tr>
                <td colspan="9"> </td>
            </tr>

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

                    <th colspan="2">Управління</th>

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

                    <td colspan="2"><a href="recovery.php?id=<?php echo $_smarty_tpl->tpl_vars['visitors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['visitor_id'];?>
&user=visitor">Повернути</a></td>

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
