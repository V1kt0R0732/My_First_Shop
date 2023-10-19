<?php
/* Smarty version 4.3.2, created on 2023-10-11 16:29:38
  from 'C:\OSPanel\domains\MyFirstShop\admin\templates\indexCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6526a34251ced9_87210281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '659bfbcc83431d17e02a808274ae4a807053ba53' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\admin\\templates\\indexCategory.tpl',
      1 => 1692019458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526a34251ced9_87210281 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="2">
    <tr style="">
        <th>№</th>
        <th>Назва</th>
        <th colspan="2">Управління</th>
    </tr>

    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['masiv']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['masiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['num'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['masiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><a href="dellCategory.php?id=<?php echo $_smarty_tpl->tpl_vars['masiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['masiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Видалити</a></td>
            <td><a href="updateCategory.php?id=<?php echo $_smarty_tpl->tpl_vars['masiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['masiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Редагувати</a></td>
        </tr>
    <?php
}
}
?>


</table><?php }
}
