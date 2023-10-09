<?php
/* Smarty version 4.3.2, created on 2023-10-02 16:33:54
  from 'C:\OSPanel\domains\MyFirstShop\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651ac6c20e4ec9_88631463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac1af9719c8799db8847093819ee70bae8c636e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MyFirstShop\\templates\\main.tpl',
      1 => 1696253632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651ac6c20e4ec9_88631463 (Smarty_Internal_Template $_smarty_tpl) {
?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['metaTitle']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metaDiscription']->value;?>
">
    <meta name="keywords" content="=<?php echo $_smarty_tpl->tpl_vars['metaKeyWords']->value;?>
">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <link href="css/cat.css" rel="stylesheet" type="text/css" media="all" />
    <?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <!--script-->
</head>
<body>
<!--header-->
<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="top-header-right">
                <div class="down-top">
                    <select class="in-drop">
                        <option value="English" class="in-of">English</option>
                        <option value="Japanese" class="in-of">Japanese</option>
                        <option value="French" class="in-of">French</option>
                        <option value="German" class="in-of">German</option>
                    </select>
                </div>
                <div class="down-top top-down">
                    <select class="in-drop">

                        <option value="Dollar" class="in-of">Dollar</option>
                        <option value="Yen" class="in-of">Yen</option>
                        <option value="Euro" class="in-of">Euro</option>
                    </select>
                </div>
                <!---->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt=" " /></a>
                </div>

                <div class="search">
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                    <input type="submit"  value="SEARCH">

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">
                <?php if (!(isset($_smarty_tpl->tpl_vars['user_id']->value)) || empty($_smarty_tpl->tpl_vars['user_id']->value)) {?>
                <ul class="login">
                    <li><a href="login.php"><span> </span>LOGIN</a></li> |
                    <li ><a href="registration.php">SIGNUP</a></li>
                </ul>
                    <?php } else { ?>
                    <div class="account"><a href="login.php"><span> </span><?php echo $_smarty_tpl->tpl_vars['user_FIO']->value;?>
</a></div>
                <?php }?>
                <div class="cart"><a href="order.php<?php if ((isset($_smarty_tpl->tpl_vars['active_page']->value)) && !empty($_smarty_tpl->tpl_vars['active_page']->value)) {?>?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && !empty($_smarty_tpl->tpl_vars['sort']->value)) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value)) && !empty($_smarty_tpl->tpl_vars['id_cat']->value)) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}
if ((isset($_smarty_tpl->tpl_vars['min_price']->value) && isset($_smarty_tpl->tpl_vars['max_price']->value))) {?>&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['note']->value)) && !empty($_smarty_tpl->tpl_vars['note']->value)) {?>&note=<?php echo $_smarty_tpl->tpl_vars['note']->value;
}?>"><span> </span>CART - <?php if ((isset($_smarty_tpl->tpl_vars['count_basket']->value))) {
echo $_smarty_tpl->tpl_vars['count_basket']->value;
} else { ?>0<?php }?></a></div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!---->
<div class="container">
    <div class="shoes-grid">
        <span>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <span><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page'];?>
.php"><span> </span><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></span>
        <?php
}
}
?>
    </div>
    <h1 style="padding-left:325px"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <?php if (((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value == 'catalog')) {?>
        <div class="main__categories categories">
            <div class="categories__body">
                <div class="categories__tirle">Категорії</div>
                <?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($__section_k_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_1_iteration <= $__section_k_1_total; $__section_k_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                    <?php if (((isset($_smarty_tpl->tpl_vars['id_cat']->value)) && !empty($_smarty_tpl->tpl_vars['id_cat']->value) && $_smarty_tpl->tpl_vars['id_cat']->value == $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_cat'])) {?>
                        <div class="categories__text" style="background-color:white; flex:1 1 auto; border-radius:20px">
                            <div class="categories__icon">
                                <img src="" alt="">
                            </div>
                            <a href="catalog.php?id_cat=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_cat'];
if ((isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}?>" class="">
                                <div class="categories__paragraf"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</div>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="categories__text" >
                            <div class="categories__icon">
                                <img src="" alt="">
                            </div>
                            <a href="catalog.php?id_cat=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_cat'];
if ((isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}?>" class="">
                                <div class="categories__paragraf"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</div>
                            </a>
                        </div>
                    <?php }?>

                <?php
}
}
?>
                <div class="categories__text">
                    <div class="categories__icon">
                        <img src="" alt="">
                    </div>
                    <a href="catalog.php" class="">
                        <div class="categories__paragraf">Скинути фільтр</div>
                    </a>
                </div>
                <form action="catalog.php" method="get">
                    <div class="categories__tirle">Пошук</div>
                    <input type="text" name="search" <?php if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"  <?php } else { ?>placeholder="Пошук за назвою"<?php }?>>
                    <br>
                    <input type="number" name="min_price" min="0" <?php if ((isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
" <?php } else { ?>placeholder="Мін. ціна"<?php }?>> -Min
                    <br>
                    <input type="number" name="max_price" <?php if ((isset($_smarty_tpl->tpl_vars['max_price']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
" <?php } else { ?>placeholder="Макс. ціна"<?php }?>> -Max
                    <br>
                    <?php if (((isset($_smarty_tpl->tpl_vars['id_cat']->value)))) {?>
                        <input type="hidden" name="id_cat" value="<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;?>
">
                    <?php }?>
                    <?php if (((isset($_smarty_tpl->tpl_vars['sort']->value)))) {?>
                        <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
                    <?php }?>
                    <input type="submit" name="send" value="Пошук">
                </form>
                <form action="catalog.php" method="get">
                    <div class="categories__tirle">Кільсть Товарів</div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['search']->value))) {?>
                        <input type="hidden" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>
                        <input type="hidden" name="min_price" value="<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
">
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['max_price']->value))) {?>
                        <input type="hidden" name="max_price" value="<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
">
                    <?php }?>
                    <?php if (((isset($_smarty_tpl->tpl_vars['id_cat']->value)))) {?>
                        <input type="hidden" name="id_cat" value="<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;?>
">
                    <?php }?>
                    <?php if (((isset($_smarty_tpl->tpl_vars['sort']->value)))) {?>
                        <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
                    <?php }?>
                    <select name="note">
                        <option value="1" <?php if (((isset($_smarty_tpl->tpl_vars['note']->value)) && $_smarty_tpl->tpl_vars['note']->value == 1)) {?>selected<?php }?>>1</option>
                        <option value="3" <?php if (((isset($_smarty_tpl->tpl_vars['note']->value)) && $_smarty_tpl->tpl_vars['note']->value == 3)) {?>selected<?php }?>>3</option>
                        <option value="5" <?php if (((isset($_smarty_tpl->tpl_vars['note']->value)) && $_smarty_tpl->tpl_vars['note']->value == 5)) {?>selected<?php }?>>5</option>
                        <option value="6" <?php if (((isset($_smarty_tpl->tpl_vars['note']->value)) && $_smarty_tpl->tpl_vars['note']->value == 6)) {?>selected<?php }?>>6</option>
                    </select>
                    <input type="submit" name="send" value="Фільтрація">
                </form>

            </div>
        </div>
    <?php }?>


    <div style="padding-left:300px"><?php echo $_smarty_tpl->tpl_vars['fullContent']->value;?>
</div>


                                                                                        <!--
    <a href="single.html">
        <div class="wrap-in">
            <div class="wmuSlider example1 slide-grid">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-matter">
                            <div class="col-md-5 banner-bag" >
                                <img class="img-responsive " src="images/bag.jpg" alt=" " />
                            </div>
                            <div class="col-md-7 banner-off">
                                <h2>FLAT 50% 0FF</h2>
                                <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <span class="on-get">GET NOW</span>
                            </div>

                            <div class="clearfix"> </div>
                        </div>

                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-matter">
                            <div class="col-md-5 banner-bag">
                                <img class="img-responsive " src="images/bag1.jpg" alt=" " />
                            </div>
                            <div class="col-md-7 banner-off">
                                <h2>FLAT 50% 0FF</h2>
                                <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <span class="on-get">GET NOW</span>
                            </div>

                            <div class="clearfix"> </div>
                        </div>

                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-matter">
                            <div class="col-md-5 banner-bag">
                                <img class="img-responsive " src="images/bag.jpg" alt=" " />
                            </div>
                            <div class="col-md-7 banner-off">
                                <h2>FLAT 50% 0FF</h2>
                                <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <span class="on-get">GET NOW</span>
                            </div>

                            <div class="clearfix"> </div>
                        </div>

                    </article>

                </div>
    </a>
    <ul class="wmuSliderPagination">
        <li><a href="#" class="">0</a></li>
        <li><a href="#" class="">1</a></li>
        <li><a href="#" class="">2</a></li>
    </ul>
    <?php echo '<script'; ?>
 src="js/jquery.wmuSlider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $('.example1').wmuSlider();
    <?php echo '</script'; ?>
>
    -->
</div>


<!----> <!--
<div class="shoes-grid-left">
    <a href="single.html">
        <div class="col-md-6 con-sed-grid">

            <div class=" elit-grid">

                <h4>consectetur  elit</h4>
                <label>FOR ALL PURCHASE VALUE</label>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                <span class="on-get">GET NOW</span>
            </div>
            <img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />

            <div class="clearfix"> </div>

        </div>
    </a>
    <a href="single.html">
        <div class="col-md-6 con-sed-grid sed-left-top">
            <div class=" elit-grid">
                <h4>consectetur  elit</h4>
                <label>FOR ALL PURCHASE VALUE</label>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                <span class="on-get">GET NOW</span>
            </div>
            <img class="img-responsive shoe-left" src="images/wa.jpg" alt=" " />

            <div class="clearfix"> </div>
        </div>
    </a>
</div>

<div class="products">
    <h5 class="latest-product">LATEST PRODUCTS</h5>
    <a class="view-all" href="product.html">VIEW ALL<span> </span></a>
</div>
 <div class="product-left" style="border:solid 2px red">
    <div class="col-md-4 chain-grid" >
        <a href="single.html"><img class="img-responsive chain" src="images/ch.jpg" alt=" " /></a>
        <span class="star"> </span>
        <div class="grid-chain-bottom">
            <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            <div class="star-price">
                <div class="dolor-grid">
                    <span class="actual">300$</span>
                    <span class="reducedfrom">400$</span>
                    <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
                </div>
                <a class="now-get get-cart" href="#">ADD TO CART</a>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 chain-grid">
        <a href="single.html"><img class="img-responsive chain" src="images/ba.jpg" alt=" " /></a>
        <span class="star"> </span>
        <div class="grid-chain-bottom">
            <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            <div class="star-price">
                <div class="dolor-grid">
                    <span class="actual">300$</span>
                    <span class="reducedfrom">400$</span>
                    <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
                </div>
                <a class="now-get get-cart" href="#">ADD TO CART</a>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 chain-grid grid-top-chain">
        <a href="single.html"><img class="img-responsive chain" src="images/bo.jpg" alt=" " /></a>
        <span class="star"> </span>
        <div class="grid-chain-bottom">
            <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            <div class="star-price">
                <div class="dolor-grid">
                    <span class="actual">300$</span>
                    <span class="reducedfrom">400$</span>
                    <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
                </div>
                <a class="now-get get-cart" href="#">ADD TO CART</a>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>



<div class="products">
    <h5 class="latest-product">LATEST PRODUCTS</h5>
    <a class="view-all" href="product.html">VIEW ALL<span> </span></a>
</div>
<div class="product-left">
    <div class="col-md-4 chain-grid">
        <a href="single.html"><img class="img-responsive chain" src="images/bott.jpg" alt=" " /></a>
        <span class="star"> </span>
        <div class="grid-chain-bottom">
            <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            <div class="star-price">
                <div class="dolor-grid">
                    <span class="actual">300$</span>
                    <span class="reducedfrom">400$</span>
                    <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
                </div>
                <a class="now-get get-cart" href="#">ADD TO CART</a>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 chain-grid">
        <a href="single.html"><img class="img-responsive chain" src="images/bottle.jpg" alt=" " /></a>
        <span class="star"> </span>
        <div class="grid-chain-bottom">
            <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            <div class="star-price">
                <div class="dolor-grid">
                    <span class="actual">300$</span>
                    <span class="reducedfrom">400$</span>
                    <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
                </div>
                <a class="now-get get-cart" href="#">ADD TO CART</a>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 chain-grid grid-top-chain">
        <a href="single.html"><img class="img-responsive chain" src="images/baa.jpg" alt=" " /></a>
        <span class="star"> </span>
        <div class="grid-chain-bottom">
            <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            <div class="star-price">
                <div class="dolor-grid">
                    <span class="actual">300$</span>
                    <span class="reducedfrom">400$</span>
                    <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
                </div>
                <a class="now-get get-cart" href="#">ADD TO CART</a>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div> -->
<div class="clearfix"> </div>



<div class="clearfix"> </div>
</div>


<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter">
                <h6>NEWS-LETTER</h6>
                <div class="sub-left-right">
                    <form>
                        <input type="text" value="Enter email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                        <input type="submit" value="SUBSCRIBE" />
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="latter-right">
                <p>FOLLOW US</p>
                <ul class="face-in-to">
                    <li><a href="#"><span> </span></a></li>
                    <li><a href="#"><span class="facebook-in"> </span></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-cate">
                <h6>CATEGORIES</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li ><a href="#">Dignissim neque</a></li>
                    <li ><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                    <li ><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li ><a href="#">Eget nisi laoreet</a></li>
                    <li ><a href="#">Faciisis ornare</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate bottom-grid-cat">
                <h6>FEATURE PROJECTS</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li ><a href="#">Dignissim neque</a></li>
                    <li ><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate">
                <h6>TOP BRANDS</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li ><a href="#">Dignissim neque</a></li>
                    <li ><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                    <li ><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li ><a href="#">Eget nisi laoreet</a></li>
                    <li ><a href="#">Faciisis ornare</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate cate-bottom">
                <h6>OUR ADDERSS</h6>
                <ul>
                    <li>Aliquam metus  dui. </li>
                    <li>orci, ornareidquet</li>
                    <li> ut,DUI.</li>
                    <li >nisi, dignissim</li>
                    <li >gravida at.</li>
                    <li class="phone">PH : 6985792466</li>
                    <li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
