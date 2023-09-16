<?php
/* Smarty version 4.3.2, created on 2023-08-21 18:23:08
  from 'C:\OSPanel\domains\onlineShop\admin\templates\updatePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e3815c8447d0_71519420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf91a6d071c0ca7bed9b0f4eca38968207031ce4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\onlineShop\\admin\\templates\\updatePage.tpl',
      1 => 1692629163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e3815c8447d0_71519420 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="updatePage.php">
    <h4>Meta Title</h4>
    <textarea name="metaTitle"><?php echo $_smarty_tpl->tpl_vars['metaTitle']->value;?>
</textarea>
    <h4>Meta Discription</h4>
    <textarea name="metaDiscription"><?php echo $_smarty_tpl->tpl_vars['metaDiscription']->value;?>
</textarea>
    <h4>Meta Key Words</h4>
    <textarea name="metaKeyWords"><?php echo $_smarty_tpl->tpl_vars['metaKeyWords']->value;?>
</textarea>
    <h4>Title</h4>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
    <h4>Full Content</h4>
    <textarea name="fullContent"><?php echo $_smarty_tpl->tpl_vars['fullContent']->value;?>
</textarea>
    <h4>Name</h4>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <h4>Page</h4>
    <input type="text" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
    <select name="prior">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_prior']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_prior']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
            <?php if (($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['main_prior']->value)) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
            <?php }?>
        <?php }
}
?>
    </select>
    <input type="hidden" name="old_prior" value="<?php echo $_smarty_tpl->tpl_vars['main_prior']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Змінити">
</form><?php }
}
