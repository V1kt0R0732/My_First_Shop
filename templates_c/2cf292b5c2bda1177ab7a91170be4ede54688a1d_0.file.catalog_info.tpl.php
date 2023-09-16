<?php
/* Smarty version 4.3.2, created on 2023-09-11 18:05:58
  from 'C:\OSPanel\domains\onlineShop\templates\catalog_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ff2cd6b206c8_59655836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf292b5c2bda1177ab7a91170be4ede54688a1d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\templates\\catalog_info.tpl',
      1 => 1694443209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ff2cd6b206c8_59655836 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['id_photo']->value == $_smarty_tpl->tpl_vars['photo_id_main']->value)) {?>
    <img src="img/<?php echo $_smarty_tpl->tpl_vars['main_photo']->value;?>
" width="200px"><br>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allPhoto']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog_id']->value;?>
&id_photo=<?php echo $_smarty_tpl->tpl_vars['allPhoto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo_sec_id'];?>
"><img src="img/<?php echo $_smarty_tpl->tpl_vars['allPhoto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo_sec'];?>
" width="100px"></a>
    <?php
}
}
?>
    <?php } else { ?>
    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allPhoto']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php if (((isset($_smarty_tpl->tpl_vars['id_photo']->value)) && !empty($_smarty_tpl->tpl_vars['id_photo']->value) && $_smarty_tpl->tpl_vars['id_photo']->value == $_smarty_tpl->tpl_vars['allPhoto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo_sec_id'])) {?>
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['allPhoto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo_sec'];?>
" width="200px"><br>
        <?php }?>
    <?php
}
}
?>
    <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['allPhoto']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php if (((isset($_smarty_tpl->tpl_vars['id_photo']->value)) && !empty($_smarty_tpl->tpl_vars['id_photo']->value) && $_smarty_tpl->tpl_vars['id_photo']->value != $_smarty_tpl->tpl_vars['allPhoto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo_sec_id'])) {?>
            <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog_id']->value;?>
&id_photo=<?php echo $_smarty_tpl->tpl_vars['allPhoto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo_sec_id'];?>
"><img src="img/<?php echo $_smarty_tpl->tpl_vars['allPhoto']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo_sec'];?>
" width="100px"></a>
        <?php }?>
    <?php
}
}
?>
        <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog_id']->value;?>
&id_photo=<?php echo $_smarty_tpl->tpl_vars['photo_id_main']->value;?>
"><img src="img/<?php echo $_smarty_tpl->tpl_vars['main_photo']->value;?>
" width="100px"></a>
<?php }?>



<h4>Назва товару: "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"</h4>
<h4>Ширина:<?php echo $_smarty_tpl->tpl_vars['wight']->value;?>
 Висота:<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
</h4>
<h4>Матеріал: <?php echo $_smarty_tpl->tpl_vars['material']->value;?>
</h4>
<h4>Колір: <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</h4>
<h4>Кількість в наявності: <?php echo $_smarty_tpl->tpl_vars['colvo']->value;?>
</h4>
<h4>Категорія: <?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</h4>
<h4>Повний опис товару:</h4>
<p><?php echo $_smarty_tpl->tpl_vars['fulldescription']->value;?>
</p>
<h5>Ціна: <b><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</b></h5>
<a href="catalog.php">Назад</a><?php }
}
