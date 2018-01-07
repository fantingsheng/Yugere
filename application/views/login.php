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
    <!--Login Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-login-forms other-page margin-top-140">
                        <!--Title-->
                        <h3 class="page-title">customer login</h3>
                        <!--End Title-->
                        <!--Form-->
                        <form action="#" class="login-forms">
                            <p class="form-row">
                                <input type="text" class="input-text required" placeholder="name"/>
                            </p>
                            <p class="form-row">
                                <input type="text" class="input-text required" placeholder="email"/>
                            </p>
                            <p class="lost_password">
                                <a href="reset-password.html">forgot your password?</a>
                            </p>
                            <p class="form-row">
                                <input type="submit" class="button" value="sign in"/>
                            </p>
                            <p class="create-account">
                                <a href="create-account.html">create account</a>
                            </p>
                        </form>
                        <!--End Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Cart -->
<?php include "common/shop-cart.php" ?>
<!-- End Shop Cart -->
<?php include "common/footer.php" ?>
