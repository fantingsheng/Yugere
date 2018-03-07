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
    <title>视频中心 | 悦己高级服装定制</title>
    <meta charset="UTF-8">
    <meta name="author" content="Timfan">
    <meta name="keywords" content="服装定制,悦己,来图定制,打版定制,量身定制,一对一定制,高级版型,无锡服装定制,服装加工">
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
    <!-- HomePage Video -->
    <div class="home-video">
        <div class="wrap-video-content">
            <div class="itable">
                <div class="icell">
                    <div class="video-content">
                        <div class="home-info">
                            <h2 class="video-title-before">高级手工定制，款式与品质并重</h2>
                            <h1 class="video-title">时尚，简约，舒适</h1>
                            <a href="/shop" class="btn btn-1"><span>更多展示</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video">
            <video width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto" muted="muted" poster="/images/Home-Video/yugere.jpg">
                <source src="/images/Home-Video/yugere-1.mp4" type="video/mp4"/>
                <source src="/images/Home-Video/yugere-1.webm" type="video/webm">
            </video>
        </div>
    </div>
    <!-- End HomePage Video -->
</div>
<!-- Shop Cart -->
<?php include "common/shop-cart.php" ?>
<!-- End Shop Cart -->


<?php include "common/footer.php" ?>