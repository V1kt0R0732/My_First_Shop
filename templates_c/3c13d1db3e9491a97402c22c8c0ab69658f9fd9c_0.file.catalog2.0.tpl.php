<?php
/* Smarty version 4.3.2, created on 2023-09-14 19:25:58
  from 'C:\OSPanel\domains\onlineShop\templates\catalog2.0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65033416d12a82_34692989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c13d1db3e9491a97402c22c8c0ab69658f9fd9c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\templates\\catalog2.0.tpl',
      1 => 1694708753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65033416d12a82_34692989 (Smarty_Internal_Template $_smarty_tpl) {
?>


    
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


<?php }
}
