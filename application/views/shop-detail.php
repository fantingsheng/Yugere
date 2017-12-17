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
    <title>Lola | HTML Themes</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">
    <link rel="icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">

    <!-- Style CSS -->
    <link href="<?=base_url('css/bootstrap.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/font-awesome.css')?>" media="screen" rel="stylesheet">
    <!-- Selectize -->
    <link href="<?=base_url('css/selectize.css')?>" media="screen" rel="stylesheet">
    <!-- Style -->
    <link href="<?=base_url('css/style.css')?>" media="screen" rel="stylesheet">

</head>
<body class="shop-page shop-page-product-details">

     <?php include "common/header.php" ?>
    <!--Shop Page-->
    <div class="site-main clearfix">
        <div class="col-md-7">
            <div class="row">
                <div id="shop-product-slider" class=" shop-product-slider carousel slide">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/images/Shop/shop-products-details-slider-1.jpg" alt="Product details slide 1"/>
                        </div>
                        <div class="item">
                            <img src="/images/Shop/shop-products-details-slider-2.jpg" alt="Product details slide 2"/>
                        </div>
                        <div class="item">
                            <img src="/images/Shop/shop-products-details-slider-3.jpg" alt="Product details slide 3"/>
                        </div>
                        <div class="item">
                            <img src="/images/Shop/shop-products-details-slider-4.jpg" alt="Product details slide 4"/>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#shop-product-slider" role="button" data-slide="prev">
                        <img src="/images/Shop/shop-slider-arrow-left.png" alt="arrow-left"/>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#shop-product-slider" role="button" data-slide="next">
                        <img src="/images/Shop/shop-slider-arrow-right.png" alt="arrow-right"/>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#shop-product-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#shop-product-slider" data-slide-to="1"></li>
                        <li data-target="#shop-product-slider" data-slide-to="2"></li>
                        <li data-target="#shop-product-slider" data-slide-to="3"></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="product">
                    <div class="itable">
                        <div class="icell">
                            <div class="entry-summary">
                                <h1 class="product_title">The Skinny in Stone Ponya</h1>
                                <div class="total-price">
                                    <p class="price">
                                        <span class="Price-amount">
                                            <span class="Price-currencySymbol">$</span>
                                            175.00
                                        </span>
                                    </p>
                                </div>
                                <div class="description">
                                    <div class="panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Form and function. Modern and minimal. Cooler than cool.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Exercitation photo booth stumptown tote bag Banksy, elit small batch
                                                freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit
                                                kale chips proident chillwave deep v laborum.
                                            </div>
                                        </div>
                                        <ul class="details">
                                            <a href="#collapseOne" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wrap-select">
                                    <select name="select-size" class="select-size" id="select-size">
                                        <option value="SM" selected>Small</option>
                                        <option value="BG">Big</option>
                                        <option value="XXXL">XXXL</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XL">XL</option>
                                        <option value="L">L</option>
                                        <option value="S">S</option>
                                    </select>
                                    <select name="select-color" class="select-color" id="select-color">
                                        <option value="Bl" selected>Black</option>
                                        <option value="RD">Red</option>
                                        <option value="BL">Blue</option>
                                        <option value="WT">White</option>
                                        <option value="OR">Orange</option>
                                        <option value="YL">Yellow</option>
                                        <option value="PR">Purple</option>
                                    </select>
                                </div>
                                <p class="button">
                                    <input type="submit" class="button" value="add to cart"/>
                                </p>
                                <p class="free-shipping">
                                    <a href="#">FREE SHIPPING ON ORDERS 70USD+</a>
                                </p>
                                <p class="link-for-size-guide">
                                    <a href="size-guide.html">size guide</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="col-sm-12">
            <div class="share-product">
                <span>Share Product</span>
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://ru.pinterest.com/" target="_blank">
                    <i class="fa fa-pinterest"></i>
                </a>
            </div>
        </div>
    </footer>
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
                <a href="checkout.html" class="checkout-button"><span>Check Out</span></a>
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
<script src="<?=base_url('js/lib/html5shiv.js')?>"></script>
<script src="<?=base_url('js/lib/respond.min.js')?>"></script>
<![endif]-->

<!-- Input Numer 'Spinner' -->
<script src="<?=base_url('js/jquery.spinner.js')?>"></script>
<!--Masonry-->
<script src="<?=base_url('js/masonry.pkgd.min.js')?>"></script>

<!-- Selectize plugin -->
<script src="<?=base_url('js/selectize.min.js')?>"></script>

<!--General JS-->
<script src="<?=base_url('js/general.js')?>"></script>
</body>
</html>
