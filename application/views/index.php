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
    <title>Yugere 悦己服装定制 | Customize Clothes Studio</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">

    <!-- Style CSS -->
    <link href="<?=base_url('css/bootstrap.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/font-awesome.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/style.css')?>" media="screen" rel="stylesheet">
</head>
<body>
<?php include "common/header.php" ?>
    <!-- HomePage Slider -->
    <section class="home-slider">
        <div id="home-slider" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <!-- Slider 1 -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image: url('<?=base_url('images/Home-Slider/slide-1.jpg')?>')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">HANDMADE BASICS WITH STYLE AND QUALITY</h2>
                                <h1 class="slider-title">Back to Black</h1>
                                <a href="shop.html" class="btn btn-1"><span>start shopping now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider 2 -->
                <div class="item" style="background-image: url('<?=base_url('images/Home-Slider/slide-2.jpg')?>')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">HANDMADE BASICS WITH STYLE AND QUALITY</h2>
                                <h1 class="slider-title">Modern & Edgy</h1>
                                <a href="shop.html" class="btn btn-1"><span>start shopping now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider 3 -->
                <div class="item" style="background-image: url('<?=base_url('images/Home-Slider/slide-3.jpg')?>')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">HANDMADE BASICS WITH STYLE AND QUALITY</h2>
                                <h1 class="slider-title">Major Comeback</h1>
                                <a href="shop.html" class="btn btn-1"><span>start shopping now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#home-slider" data-slide-to="0" class="active"></li>
                <li data-target="#home-slider" data-slide-to="1"></li>
                <li data-target="#home-slider" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- End HomePage Slider -->
</div>
<!-- Shop Cart -->
<div class="cart-wrapper">
    <a href="#" class="shop-cart-close"></a>
    <div class="cart-header">
        <h3 class="shop-cart-title">SHOPPING CART</h3>
        <ul class="shop_table shop_table_cart">
            <li class="cart_item clearfix">
                <div class="product-thumbnail">
                    <a href="shop-details.html"><img src="/images/Shop/cart-product-thumb-1.jpg" alt="Product 1"/></a>
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
                    <a href="shop-details.html"><img src="/images/Shop/cart-product-thumb-2.jpg" alt="Product 2"/></a>
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
                <a href="checkout.html" class="checkout-button"><span>Check Out</span></a>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Cart -->
<?php include "common/footer.php" ?>
