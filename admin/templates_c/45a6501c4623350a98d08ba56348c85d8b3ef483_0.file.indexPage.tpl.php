<?php
/* Smarty version 4.3.2, created on 2023-10-11 16:29:49
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\indexPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6526a34d1eecc1_58961481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45a6501c4623350a98d08ba56348c85d8b3ef483' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\indexPage.tpl',
      1 => 1692624371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526a34d1eecc1_58961481 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="2" >
    <tr>
        <th>№</th>
        <th>Заголовок</th>
        <th>Управління</th>
    </tr>
    <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['title'];?>
</td>
            <td><a href="updatePage.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
">Редагувати</a></td>
        </tr>
    <?php
}
}
?>

</table><?php }
}
