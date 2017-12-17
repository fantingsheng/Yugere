/*------------------------------------------------------------------------*/
/*      Author Name: CubeCreation Themes                                  */
/*      Author : https://themeforest.net/user/cubecreation/portfolio      */
/*      Date Develop: 04.10.2016                                          */
/*------------------------------------------------------------------------*/

jQuery(document).ready(function() {
    "use strict";

    var $ = jQuery,
        screenRes = $(window).width(),
        screenHeight = $(window).height(),
        html = $('html');

    // Disable Empty Links
    $("[href='#']").click(function (event) {
        event.preventDefault();
    });

    // IE<8 Warning
    if (html.hasClass("oldie")) {
        $("body").empty().html('Please, Update your Browser to at least IE8');
    }

    // Remove outline in IE
    $("a, input, textarea").attr("hideFocus", "true").css("outline", "none");

    // Set height for body when page is loaded, but page is loaded set the height:auto;
    $("body").css('height', screenHeight);

    // Select Styling
    if ($('select').length > 0) {
        $('select').selectize({
            create: true
        });
    }

    // Styled Select, CheckBox, RadioBox
    if ($(".input-styled, .shop-page .create-account, .shop-page .payment_methods").length > 0) {
        $(".input-styled input, .create-account input, .payment_methods input").customInput();
    }

    // Call & set height for home slider
    if($('.home-slider').length > 0 ) {
        jQuery('.home-slider .item').css('height', screenHeight);

        jQuery(window).resize(function(){
            var screenHeight = $(window).height();
            jQuery('.home-slider .item').css('height', screenHeight);
        });
        $('#home-slider').carousel({
            interval: 7500
        });

        // Swipe Slider
        $('#home-slider').find('.carousel-inner').swipe( {
            swipeLeft: function() {
                $(this).parent().carousel('next');
            },
            swipeRight: function() {
                $(this).parent().carousel('prev');
            },
            threshold: 30
        });
    }

    // Set height for Video
    if($('.home-video').length > 0 ) {
        $('.home-video').css('height', screenHeight);

        $(window).resize(function(){
            var screenHeight = $(window).height();
            $('.home-video').css('height', screenHeight);
        });
    }

    // Iframe Serponsive
    function adjustIframes()
    {
        jQuery('iframe').each(function(){
            var
                $this       = $(this),
                proportion  = $this.data( 'proportion' ),
                w           = $this.attr('width'),
                actual_w    = $this.width();

            if ( ! proportion )
            {
                proportion = $this.attr('height') / w;
                $this.data( 'proportion', proportion );
            }

            if ( actual_w != w )
            {
                $this.css( 'height', Math.round( actual_w * proportion ) + 'px' );
            }
        });
    }
    $(window).on('resize load',adjustIframes);

    // Close & Open Menu, Cart
    function openCloseMenuCart(){
        // Open & Close Menu
        $( ".menu-link" ).click(function(eventMenuOpen) {
            $('body').toggleClass("theme-menu-open");

            setTimeout(function(){
                $('body').toggleClass("blocking");
                $('html').toggleClass("blocking");
            },300);

            // Close menu if click outside menu
            $('.site, .menu-header-close-button-mobile').on('click', function(){
                $('body').removeClass("theme-menu-open blocking");
                $('html').removeClass("blocking");
            });
            eventMenuOpen.stopPropagation();
        });


        // Open & Close Cart
        $( ".cart-link" ).click(function(eventCartOpen) {
            $('body').addClass("theme-cart-open");

            setTimeout(function(){
                $('body').toggleClass("blocking");
                $('html').toggleClass("blocking");
            },300);

            // Close cart if click outside menu
            $('.site').on('click', function(){
                $('body').removeClass("theme-cart-open blocking");
                $('html').removeClass("blocking");
            });
            eventCartOpen.stopPropagation();
        });
        $( ".shop-cart-close" ).click(function() {
            $('body').removeClass("theme-cart-open blocking");
            $('html').removeClass("blocking");
        });
    }
    openCloseMenuCart();

    // Style input type number
    if($('.spinner').length > 0) {
        $(".product-quantity.spinner").spinner();
    }

    // Open & Close submenu item
    function openAndCloseSubMenuItem (){
        $('.theme-menu .menu li.active-item').addClass('open').children('ul').show();
        $('.theme-menu .menu li.menu-item-has-children > a.menu-icon').on('click', function(){
            var $thisPrent = $(this).parent('li');

            if ($thisPrent.hasClass('open')) {
                $thisPrent.removeClass('open');
                $thisPrent.find('li').removeClass('open');
                $thisPrent.find('ul').slideUp(200);
            } else {
                $thisPrent.addClass('open');
                $thisPrent.children('ul').slideDown(200);
                $thisPrent.siblings('li').children('ul').slideUp(200);
                $thisPrent.siblings('li').removeClass('open');
                $thisPrent.siblings('li').find('li').removeClass('open');
                $thisPrent.siblings('li').find('ul').slideUp(200);
            }
        });
    }
    $(".menu-item-has-children .sub-menu li a").click(function(){
        var category = jQuery('.categories-list-nav li a').attr('data-category');
        if(category !== $(".menu-item-has-children .sub-menu li a").text()) {
            jQuery('.categories-list-nav li').removeClass('active-category');
            $('.categories-list-nav li ').addClass('active-category');
        }
    });

    openAndCloseSubMenuItem();

    // Blog Listing Grid
    if ($(".postlist").length > 0) {
        var $gridcontainer = $('.postlist').imagesLoaded( function() {
            $gridcontainer.masonry({
                itemSelector: '.postlist-col'
            });
        });
    }

    // Sortable Shop Products
    jQuery('.categories-list-nav li a').on('click',function(){
        jQuery('.categories-list-nav li').removeClass('active-category');
        jQuery(this).parents().addClass('active-category');

        var category = jQuery(this).attr('data-category');

        jQuery('.products .product').fadeOut(200);

        if(category !== 'all') {
            jQuery('.products .product').each(function () {
                var photo_cats = jQuery(this).attr('data-category').split(",");
                if (in_array(category,photo_cats)) {
                    jQuery(this).removeClass('active-product').fadeIn(200);
                    jQuery(this).addClass('active-product').delay(400).fadeIn(200);
                }
                else {
                    jQuery(this).removeClass('active-product').fadeOut(200);
                }
            });
        }
        else {
            jQuery('.products .product').each(function () {
                jQuery(this).addClass('active-product').delay(400).fadeIn(200);
            });
        }
    });


    // Shop products details slider function
    function shopProductsSlider () {
        var screenHeight = $(window).height();
        $('#shop-product-slider').carousel({
            interval: 7500
        });
        // Set height for slider if page have a footer
        if($('footer.footer').length > 0){
            var footerHeight = $('footer.footer').outerHeight();
        }
        else {
            var footerHeight = 0;
        }
        var sumTotalScreenHeight = screenHeight - footerHeight;

        // Set height
        $('.shop-product-slider .item').css('height', sumTotalScreenHeight );
        $('.shop-page.shop-page-product-details .product').css('height', sumTotalScreenHeight );
    }

    // Call Shop Products detail Slider
    if($('.shop-product-slider').length > 0 && screenRes >= 991) {
        shopProductsSlider();

        $(window).resize(function(){
            shopProductsSlider();
        });
    }

    // Checkout Page
    if($('.shop-page-checkout').length > 0) {
        // Create account form
        $( ".create-account label[for='createaccount']").click(function() {
            $(this).parents("form.checkout").find(".create-account-form").slideToggle( "fast");
        });
    }
});

// Loading Page Spinner
$(window).load(function(){
    var $ = jQuery;
    $("body .spinner-container").remove();
    $("body").css('height', 'auto');
    $(".site").removeClass('invisible').addClass('fadeIn');
});

function in_array(needle, haystack, strict) {	// Checks if a value exists in an array
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

    var found = false, key, strict = !!strict;

    for (key in haystack) {
        if ((strict && haystack[key] === needle) || (!strict && haystack[key] == needle)) {
            found = true;
            break;
        }
    }

    return found;
}