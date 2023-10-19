<?php
/* Smarty version 4.3.2, created on 2023-10-18 18:43:47
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\count_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652ffd33cdc3f9_40363345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af7a3e3f12f50fff985d6852d0ec8b32f18932d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\count_order.tpl',
      1 => 1697643825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652ffd33cdc3f9_40363345 (Smarty_Internal_Template $_smarty_tpl) {
?>    <h3>Clients</h3>
<table border="2">
    <tr>
        <th>FIO</th>
        <th>Count</th>
    </tr>
    <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['client']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['FIO'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'];?>
</td>
        </tr>
    <?php
}
}
?>
</table>

    <h3>Clear Clients</h3>
<table border="2">
    <tr>
        <th>FIO</th>
        <th>Count</th>
    </tr>
    <?php
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['clear_client']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total !== 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['clear_client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['num'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['clear_client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['FIO'];?>
</td>
        </tr>
    <?php
}
}
?>
</table>
    <h3>Visitors</h3>
<table border="2">
    <tr>
        <th>FIO</th>
        <th>Count</th>
    </tr>
    <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['visitor']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['FIO'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
        </tr>
    <?php
}
}
?>
</table>
<?php }
}
