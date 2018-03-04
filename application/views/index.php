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
    <link href="<?=base_url('css/style20180304.min.css')?>" media="screen" rel="stylesheet">
</head>
<body>
<?php include "common/header.php" ?>
    <!-- HomePage Slider -->
    <section class="home-slider">
        <div id="home-slider" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- Slider 1 -->
                <div class="item active" style="background-image: url('<?=base_url('images/Home-Slider/slide-4.jpg')?>')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">高级手工定制，款式与品质并重</h2>
                                <h1 class="slider-title">独具匠心，衣人品质</h1>
                                <a href="/shop" class="btn btn-1"><span>购物中心</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url('<?=base_url('images/Home-Slider/slide-1.jpg')?>')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">高级手工定制，款式与品质并重</h2>
                                <h1 class="slider-title">久等了，还是来了</h1>
                                <a href="/shop" class="btn btn-1"><span>购物中心</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider 2 -->
                <div class="item" style="background-image: url('<?=base_url('images/Home-Slider/slide-2.png')?>')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">高级手工定制，款式与品质并重</h2>
                                <h1 class="slider-title">版型，一件衣服的灵魂</h1>
                                <a href="/shop" class="btn btn-1"><span>购物中心</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider 3 -->
                <div class="item" style="background-image: url('<?=base_url('images/Home-Slider/slide-3.png')?>')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">高级手工定制，款式与品质并重</h2>
                                <h1 class="slider-title">黑色，永不过时的经典</h1>
                                <a href="/shop" class="btn btn-1"><span>购物中心</span></a>
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
                <li data-target="#home-slider" data-slide-to="3"></li>
            </ol>
        </div>
    </section>
    <!-- End HomePage Slider -->
</div>
<!-- Shop Cart -->
<?php include "common/shop-cart.php" ?>
<!-- End Shop Cart -->
<?php include "common/footer.php" ?>
