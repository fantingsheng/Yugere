
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
    <link href="<?=base_url('css/bootstrap.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/font-awesome.css')?>" media="screen" rel="stylesheet">
    <link href="<?=base_url('css/style.css')?>" media="screen" rel="stylesheet">
</head>
<body>
<?php include "common/header.php" ?>
    <!--Blog-Details Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <!--Content Area-->
               <div class="content-area col-md-8 col-sm-12">
                   <article class="post post-details">
                       <div class="post-details-thumbnail">
                           <img src="<?=$blog['head']?>" alt="images"/>
                       </div>
                       <div class="entry-content">
                           <div class="post-content">
                              <h6 class="entry-header"><?=$blog['title']?></h6>
                              <p>
                                  <?=$blog['content']?>
                              </p>
                              
                           </div>
                           <div class="entry-meta">
                               <div class="entry-date ">
                                   <a href="#"><time datetime="09-16T"><?=$blog['date']?></time></a>
                               </div>
                               <span class="meta-divider">|</span>
                               <div class="cat-links">
                                   <a><?=$blog['author']?></a>
                               </div>
                               <span class="meta-divider">|</span>

                              <?php foreach($blog['tags'] as $cate): ?>
                                <div class="cat-links">
                                    <a href="#"><?=$cate['name']?></a>
                                </div>
                              <?php endforeach; ?>
                           </div>
                       </div>
                   </article>
                
               </div>
                <!-- Sidebar -->
                <div class="col-md-4 col-sm-12 sidebar">
                    <!-- Sidebar 1-->
                    <aside class="widget widget_categories clearfix">
                        <h2 class="widget-title">
                            <span>category</span>
                        </h2>
                        <ul>
                            <?php foreach($blog['tags'] as $cate): ?>
                                <li>
                                    <a href="<?=$cate['url']?>"><?=$cate['name']?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>
                    <!-- Sidebar 1-->
                    <aside class="widget widget_recent_entries clearfix">
                        <h2 class="widget-title">
                            <span>recent posts</span>
                        </h2>
                        <ul>
                            <li>
                                <a href="/news/zhiban.html">翻驳领制版教程详解</a>
                            </li>
                           
                        </ul>
                    </aside>
                    <!-- Sidebar 3-->
                    <aside class="widget widget_archive clearfix">
                        <h2 class="widget-title">
                            <span>archive</span>
                        </h2>
                        <ul>
                            <?php foreach($yearMonths as $year): ?>
                              <li><a href="<?=$year['url']?>"><?=$year['name']?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>
                </div>
                <!-- End Sidebar -->
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
                    <a href="product-details.html"><img src="/images/Shop/cart-product-thumb-1.jpg" alt="Product 1"/></a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="product-details.html">the skinny</a>
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
                    <a href="product-details.html"><img src="/images/Shop/cart-product-thumb-2.jpg" alt="Product 2"/></a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="product-details.html">the slouchy</a>
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