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
    <!--About Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="other-page about-page">
                        <!--Title-->
                        <h3 class="page-title">悦己高级服装定制</h3>
                        <!-- End Title-->
                        <div class="about-page-content">
                            <h4>YUGERE TO HAPPY YOURSELF AND MAKE EVERYTHING MORE BETTER </h4>
                            <img src="images/About/shop-brand.png" alt="images"/>
                            <h4>Focusing on quality and unique personal style</h4>
                            <p>人的一生每个人都需要一件高级定制，它是个人外在追求的象征。俗话说人靠衣服马靠鞍，一件衣服不仅要品质好，更要与你的身材完美的契合。不是你去迎合衣服的大小，而要让衣服为你而生！</p>
                            <p>为什么要高级定制？所有珍贵的美好，都应该高傲地绝版！</p>
                            <p>—— IVYTRIP</p>
                            <img src="images/About/yugere.png" alt="images"/>
                        </div>

                    </div>
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

<?php include "common/footer.php" ?>
