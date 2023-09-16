<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>{$metaTitle}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="{$metaDiscription}">
    <meta name="keywords" content="={$metaKeyWords}">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <link href="css/cat.css" rel="stylesheet" type="text/css" media="all" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script src="js/jquery.min.js"></script>
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
                    <input type="text" value=""{literal} onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"{/literal} >
                    <input type="submit"  value="SEARCH">

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">
                <div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
                <ul class="login">
                    <li><a href="login.html"><span> </span>LOGIN</a></li> |
                    <li ><a href="register.html">SIGNUP</a></li>
                </ul>
                <div class="cart"><a href="#"><span> </span>CART</a></div>
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
        {section loop = $menu name = i}
            <span><a href="{$menu[i].page}.php"><span> </span>{$menu[i].name}</a></span>
        {/section}
        </div>
        <h1 style="padding-left:325px">{$title}</h1>

    {if (isset($page) && $page == 'catalog')}
        <div class="main__categories categories">
            <div class="categories__body">
                <div class="categories__tirle">Категорії</div>
                {section loop = $category name = k}
                    {if (isset($id_cat) && !empty($id_cat) && $id_cat == $category[k].id_cat)}
                        <div class="categories__text" style="background-color:white; flex:1 1 auto; border-radius:20px">
                            <div class="categories__icon">
                                <img src="" alt="">
                            </div>
                            <a href="catalog.php?id_cat={$category[k].id_cat}{if isset($min_price)}&min_price={$min_price}{/if}{if isset($max_price)}&max_price={$max_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}" class="">
                                <div class="categories__paragraf">{$category[k].name}</div>
                            </a>
                        </div>
                        {else}
                        <div class="categories__text" >
                            <div class="categories__icon">
                                <img src="" alt="">
                            </div>
                            <a href="catalog.php?id_cat={$category[k].id_cat}{if isset($min_price)}&min_price={$min_price}{/if}{if isset($max_price)}&max_price={$max_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}" class="">
                                <div class="categories__paragraf">{$category[k].name}</div>
                            </a>
                        </div>
                    {/if}

                {/section}
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
                    <input type="text" name="search" {if isset($search) && !empty($search)}value="{$search}"  {else}placeholder="Пошук за назвою"{/if}>
                    <br>
                    <input type="number" name="min_price" min="0" {if isset($min_price)}value="{$min_price}" {else}placeholder="Мін. ціна"{/if}> -Min
                    <br>
                    <input type="number" name="max_price" {if isset($max_price)}value="{$max_price}" {else}placeholder="Макс. ціна"{/if}> -Max
                    <br>
                    {if (isset($id_cat))}
                        <input type="hidden" name="id_cat" value="{$id_cat}">
                    {/if}
                    {if (isset($sort))}
                        <input type="hidden" name="sort" value="{$sort}">
                    {/if}
                    <input type="submit" name="send" value="Пошук">
                </form>
            </div>
        </div>
    {/if}


    <div style="padding-left:300px">{$fullContent}</div>


{*    <div class="main__catalog catalog">*}
{*        <div class="catalog__container _container">*}
{*            <div class="catalog__block block">*}
{*                <div class="catalog__body">*}
{*                    <a href="" class="block__img">*}
{*                        <img src="img/catalog/01.webp" alt="phone">*}
{*                    </a>*}
{*                    <div class="block__body">*}
{*                        <h2 class="body__title">Телефон звичайний шось там</h2>*}
{*                        <h2 class="body__title">Мобільний телефон <?=$row['model']?></h2>*}
{*                        <div class="body__price">*}
{*                            <div class="price__number">1000 $</div>*}
{*                            <a href="">*}
{*                                <button class="price__button">Придбати</button>*}
{*                            </a>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*    </div>*}
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
        <script src="js/jquery.wmuSlider.js"></script>
        <script>
            $('.example1').wmuSlider();
        </script>
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


{*<div class="sub-cate">*}
{*    <div class=" top-nav rsidebar span_1_of_left">*}
{*        <h3 class="cate">CATEGORIES</h3>*}
{*        <ul class="menu">*}
{*            <li class="item1"><a href="#">Curabitur sapien<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>*}
{*                <ul class="cute">*}
{*                    <li class="subitem1"><a href="product.html">Cute Kittens </a></li>*}
{*                    <li class="subitem2"><a href="product.html">Strange Stuff </a></li>*}
{*                    <li class="subitem3"><a href="product.html">Automatic Fails </a></li>*}
{*                </ul>*}
{*            </li>*}
{*            <li class="item2"><a href="#">Dignissim purus <img class="arrow-img " src="images/arrow1.png" alt=""/></a>*}
{*                <ul class="cute">*}
{*                    <li class="subitem1"><a href="product.html">Cute Kittens </a></li>*}
{*                    <li class="subitem2"><a href="product.html">Strange Stuff </a></li>*}
{*                    <li class="subitem3"><a href="product.html">Automatic Fails </a></li>*}
{*                </ul>*}
{*            </li>*}
{*            <li class="item3"><a href="#">Ultrices id du<img class="arrow-img img-arrow" src="images/arrow1.png" alt=""/> </a>*}
{*                <ul class="cute">*}
{*                    <li class="subitem1"><a href="product.html">Cute Kittens </a></li>*}
{*                    <li class="subitem2"><a href="product.html">Strange Stuff </a></li>*}
{*                    <li class="subitem3"><a href="product.html">Automatic Fails</a></li>*}
{*                </ul>*}
{*            </li>*}
{*            <li class="item4"><a href="#">Cras iacaus rhone <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>*}
{*                <ul class="cute">*}
{*                    <li class="subitem1"><a href="product.html">Cute Kittens </a></li>*}
{*                    <li class="subitem2"><a href="product.html">Strange Stuff </a></li>*}
{*                    <li class="subitem3"><a href="product.html">Automatic Fails </a></li>*}
{*                </ul>*}
{*            </li>*}
{*            <li>*}
{*                <ul class="kid-menu">*}
{*                    <li><a href="product.html">Tempus pretium</a></li>*}
{*                    <li ><a href="product.html">Dignissim neque</a></li>*}
{*                    <li ><a href="product.html">Ornared id aliquet</a></li>*}
{*                </ul>*}
{*            </li>*}
{*            <ul class="kid-menu ">*}
{*                <li><a href="product.html">Commodo sit</a></li>*}
{*                <li ><a href="product.html">Urna ac tortor sc</a></li>*}
{*                <li><a href="product.html">Ornared id aliquet</a></li>*}
{*                <li><a href="product.html">Urna ac tortor sc</a></li>*}
{*                <li ><a href="product.html">Eget nisi laoreet</a></li>*}
{*                <li><a href="product.html">Faciisis ornare</a></li>*}
{*                <li class="menu-kid-left"><a href="contact.html">Contact us</a></li>*}
{*            </ul>*}
{*        </ul>*}
{*    </div>*}
{*    <!--initiate accordion-->*}
{*    <script type="text/javascript">*}
{*        $(function() {*}
{*            var menu_ul = $('.menu > li > ul'),*}
{*                menu_a  = $('.menu > li > a');*}
{*            menu_ul.hide();*}
{*            menu_a.click(function(e) {*}
{*                e.preventDefault();*}
{*                if(!$(this).hasClass('active')) {*}
{*                    menu_a.removeClass('active');*}
{*                    menu_ul.filter(':visible').slideUp('normal');*}
{*                    $(this).addClass('active').next().stop(true,true).slideDown('normal');*}
{*                } else {*}
{*                    $(this).removeClass('active');*}
{*                    $(this).next().stop(true,true).slideUp('normal');*}
{*                }*}
{*            });*}

{*        });*}
{*    </script>*}
{*    <!--*}
{*    <div class=" chain-grid menu-chain">*}
{*        <a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>*}
{*        <div class="grid-chain-bottom chain-watch">*}
{*            <span class="actual dolor-left-grid">300$</span>*}
{*            <span class="reducedfrom">500$</span>*}
{*            <h6><a href="single.html">Lorem ipsum dolor</a></h6>*}
{*        </div>*}
{*    </div>*}
{*    <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>*}
{*    -->*}
{*</div>*}
<div class="clearfix"> </div>
</div>


<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter">
                <h6>NEWS-LETTER</h6>
                <div class="sub-left-right">
                    <form>
                        <input type="text" value="Enter email here"{literal} onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}"{/literal} />
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
</html>