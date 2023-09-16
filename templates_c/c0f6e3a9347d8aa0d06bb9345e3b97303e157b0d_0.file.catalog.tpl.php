<?php
/* Smarty version 4.3.2, created on 2023-09-16 14:52:53
  from 'C:\OSPanel\domains\onlineShop\templates\catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65059715956674_28593656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0f6e3a9347d8aa0d06bb9345e3b97303e157b0d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\templates\\catalog.tpl',
      1 => 1694865171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65059715956674_28593656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h5 style="background-color:#d6d6d6; border-radius:15px; padding-left:20px; margin: 10px 430px 5px 20px;">
    <a href="catalog.php?sort=desc<?php if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>">
        Від дешевих до дорогих
    </a> |
    <a href="catalog.php?sort=asc<?php if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>">
        Від дорогих до дешевих
    </a>
</h5>


<div class="main__catalog catalog">
    <div class="catalog__container _container">
        <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['catalog']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
            <div class="catalog__block block">
                <div class="catalog__body">
                    <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
" class="block__img">
                        <img src="img/<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
" alt="phone" width="160px">
                    </a>
                    <div class="block__body">
                        <h2 class="body__title"><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</h2>
                        <h3 class="body__title">Ширина: <?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['wight'];?>
см.</h3>
                        <h3 class="body__title">Висота: <?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['height'];?>
см.</h3>
                        <div class="body__price">
                            <div class="price__number"><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</div>
                            <a href="">
                                <button class="price__button">Придбати</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
}
?>
    </div>
</div>



<div>
    <table style="margin-left:375px">
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['active_page']->value != 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['active_page']->value == 1) {?>
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> < </td>
                <?php } else { ?>
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
"> < </a></td>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['k']->value = 1;
if ($_smarty_tpl->tpl_vars['k']->value <= $_smarty_tpl->tpl_vars['count_page']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['k']->value <= $_smarty_tpl->tpl_vars['count_page']->value; $_smarty_tpl->tpl_vars['k']->value++) {
?>
                    <?php if (($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['k']->value)) {?>
                        <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
                    <?php } else { ?>
                        <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['k']->value;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></td>
                    <?php }?>
                <?php }
}
?>
                <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_page']->value) {?>
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> > </td>
                <?php } else { ?>
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
"> > </a></td>
                <?php }?>
            <?php }?>
        </tr>
    </table>
</div>

<?php }
}
