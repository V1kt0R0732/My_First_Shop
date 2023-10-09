<?php
/* Smarty version 4.3.2, created on 2023-10-02 11:19:08
  from 'C:\OSPanel\domains\MyFirstShop\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651a7cfc577cf8_92806591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c23db9563fecee8d8d9ec33b9cf1749351500485' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\templates\\order.tpl',
      1 => 1696234673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651a7cfc577cf8_92806591 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="basket.php" method="post">
<table border="2" style="margin-left:20px">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>Кількість</th>
        <th>Вартість</th>
        <th>Видалити</th>
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
            <td><input name="count<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
" type="number" min="1" value="<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sum'];?>
</td>
            <td><a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
&mode=dell">Видалити</a></td>
        </tr>
    <?php
}
}
?>
    <tr>
        <th colspan="5">Всього до сплати</th>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
</th>
    </tr>
    <tr>
        <th colspan="5"><a href="basket.php?mode=clear">Очистити</a></th>
        <th colspan="2"><a href="order_buy.php">Сплатити</a></th>
    </tr>
    <tr>
        <?php if ((isset($_smarty_tpl->tpl_vars['ready_params']->value)) && !empty($_smarty_tpl->tpl_vars['ready_params']->value)) {?>
            <th colspan="4"><a href="catalog.php?<?php echo $_smarty_tpl->tpl_vars['ready_params']->value;?>
">Повернутись до каталогу</a></th>
            <input type="hidden" name="ready_params" value="<?php echo $_smarty_tpl->tpl_vars['ready_params']->value;?>
">
            <?php } else { ?>
            <th colspan="4"><a href="catalog.php">Повернутись до каталогу</a></th>
        <?php }?>
        <th colspan="3"><input type="submit" name="send" value="Перерахувати"></th>
    </tr>

</table>
</form>
<?php }
}
