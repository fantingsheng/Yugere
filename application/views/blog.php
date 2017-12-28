<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html lang="en" class="ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>「Yugere」悦己服装定制 | 提供你最满意的定制服务</title>
    <meta charset="UTF-8">
    <meta name="author" content="Timfan">
    <meta name="keywords" content="服装定制,悦己,来图定制,打版定制,量身定制,一对一定制">
    <meta name="description" content="来图来样定制，量身定制，提供一对一精致的定制服务" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">
    <link rel="icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">

    <!-- Style CSS -->
    <link href="<?=base_url('css/bootstrap.min.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/font-awesome.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/style.css')?>" media="screen" rel="stylesheet">
</head>
<body>

     
<?php include "common/header.php" ?>

    <!--Blog Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="postlist clearfix">
                    <!-- Post 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-6 postlist-col">
                        <article class="post clearfix">
                            <a href="/blog/detail" class="post-thumbnail">
                                <img src="/images/Post/post_1.jpg" alt="images"/>
                                <div class="overlay-post"></div>
                            </a>
                            <div class="entry-content">
                                <div class="post-content margin-top-5">
                                    <h6>Fashion In The Country</h6>
                                    <p>
                                        Meh synth Schlitz, tempor duis single-origin coffee ea
                                        next level ethnic fingerstache fanny pack nostrud. Photo
                                        booth anim 8-bit hella, PBR 3 wolf moon ...
                                    </p>
                                </div>
                                <div class="entry-meta ">
                                    <div class="entry-date ">
                                        <a href="#"><time datetime="09-16T">31 aug</time></a>
                                    </div>
                                    <span class="meta-divider">|</span>
                                    <div class="cat-links">
                                        <a href="#">events</a>
                                    </div>
                                    <span class="meta-divider">|</span>
                                    <a href="#" class="comments-link">
                                        <span>3</span>
                                        <span class="text-comments">comments</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>   
                </div>
                <div class="more-info">
                    <a href="#">
                        load more
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Cart -->
<div class="cart-wrapper">
    <a href="#" class="shop-cart-close"></a>
    <div class="cart-header">
        <h3 class="shop-cart-title">SHOPPING CART</h3>
        <ul class="shop_table shop_table_cart">
            <li class="cart_item clearfix">
                <div class="product-thumbnail">
                    <a href="shop-details.html"><img src="images/Shop/cart-product-thumb-1.jpg" alt="Product 1"/></a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="shop-details.html">the skinny</a>
                    </div>
                    <div class="product-size-color">
                        <span>Small/Blue</span>
                    </div>
                    <div class="product-quantity spinner" data-trigger="spinner">
                        <input type="text" class="qty" value="1" data-rule="quantity"/>
                        <div class="spinner-controls">
                            <a href="javascript:;" data-spin="up" class="spin-up">+</a>
                            <a href="javascript:;" data-spin="down" class="spin-down">-</a>
                        </div>
                    </div>
                    <div class="product-subtotal">
                        <span>$175.00</span>
                    </div>
                </div>
            </li>
            <li class="cart_item clearfix">
                <div class="product-thumbnail">
                    <a href="shop-details.html"><img src="images/Shop/cart-product-thumb-2.jpg" alt="Product 2"/></a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="shop-details.html">the slouchy</a>
                    </div>
                    <div class="product-size-color">
                        <span>Small/Blue</span>
                    </div>
                    <div class="product-quantity spinner" data-trigger="spinner">
                        <input type="text" class="qty" value="1" data-rule="quantity"/>
                        <div class="spinner-controls">
                            <a href="javascript:;" data-spin="up" class="spin-up">+</a>
                            <a href="javascript:;" data-spin="down" class="spin-down">-</a>
                        </div>
                    </div>
                    <div class="product-subtotal">
                        <span>$150.00</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="cart-footer">
        <div class="cart-wrap-total-checkout clearfix">
            <div class="cart_total clearfix">
                <span class="cart-total-text">Subtotal</span>
                <span class="cart-total">$325.00</span>
            </div>
            <div class="proceed-to-checkout">
                <a href="/checkout" class="checkout-button"><span>Check Out</span></a>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Cart -->

<!-- main JS libs  -->
<script src="<?=base_url('js/lib/jquery-1.12.2.min.js')?>"></script>
<script src="<?=base_url('js/lib/bootstrap.min.js')?>"></script>
<!-- Modernizr Library -->
<script src="<?=base_url('js/lib/modernizr.min.js')?>"></script>

<!--[if lt IE 9]>
<script src="js/lib/html5shiv.js"></script>
<script src="js/lib/respond.min.js"></script>
<![endif]-->

<!-- Input Number 'Spinner' -->
<script src="<?=base_url('js/jquery.spinner.js')?>"></script>
<!-- Slider Touch Swipe -->
<script src="<?=base_url('js/jquery.touchSwipe.min.js')?>"></script>

<!--General JS-->
<script src="<?=base_url('js/general.js')?>"></script>


<!-- Image Loaded -->
<script src="<?=base_url('js/imagesloaded.pkgd.min.js')?>"></script>
<!--Masonry-->
<script src="<?=base_url('js/masonry.pkgd.min.js')?>"></script>

</body>
</html>
