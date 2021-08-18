
(function ($) {
    "use strict";

    /*==================================================================
    [ Load page ]*/
    try {
        $(".animsition").animsition({
            inClass: 'fade-in',
            outClass: 'fade-out',
            inDuration: 1500,
            outDuration: 800,
            linkElement: '.animsition-link',
            loading: true,
            loadingParentElement: 'html',
            loadingClass: 'animsition-loading-1',
            loadingInner: '<div class="loader08"></div>',
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: [ 'animation-duration', '-webkit-animation-duration'],
            overlay : false,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'html',
            transition: function(url){ window.location.href = url; }
        });
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Back to top ]*/
    try {
        $('body').append(
            '<div class="btn-back-to-top" id="js-to-top">' +
            '<span class="symbol-btn-back-to-top">' +
            '<i class="fa fa-angle-double-up" aria-hidden="true"></i>' +
            '</span>' +
            '</div>'
        )

        var windowH = $(window).height()/2;

        $(window).on('scroll',function(){
            if ($(this).scrollTop() > windowH) {
                $("#js-to-top").addClass('show-btn-to-top');
            } else {
                $("#js-to-top").removeClass('show-btn-to-top');
            }
        });

        $('#js-to-top').on("click", function(){
            $('html, body').animate({scrollTop: 0}, 300);
        });
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Header ]*/
    /*------------------------------------------------------------------
    [ Fixed Header ]*/
    try {
        var headerDesktop = $('.container-header-desktop');
        var wrapMenu = $('.wrap-menu-desktop');

        if($('.top-bar').length > 0) {
            var posWrapHeader = $('.top-bar').height();
        }
        else {
            var posWrapHeader = 0;
        }

        if($(window).scrollTop() > posWrapHeader) {
            $(headerDesktop).addClass('fix-menu-desktop');
            $(wrapMenu).css('top',0);
        }
        else {
            $(headerDesktop).removeClass('fix-menu-desktop');
            $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop());
        }

        $(window).on('scroll',function(){
            if($(this).scrollTop() > posWrapHeader) {
                $(headerDesktop).addClass('fix-menu-desktop');
                $(wrapMenu).css('top',0);
            }
            else {
                $(headerDesktop).removeClass('fix-menu-desktop');
                $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop());
            }
        });
    } catch(er) {console.log(er);}



    /*------------------------------------------------------------------
    [ Menu mobile ]*/
    try {
        var getMenu = $('.menu-desktop .main-menu').clone();
        $(getMenu).removeClass();
        $(getMenu).addClass('main-menu');

        if($('.menu-mobile .main-menu').length === 0) {
            $('.menu-mobile').append(getMenu);
        }

        $('.btn-show-menu-mobile').on('click', function(){
            $(this).toggleClass('is-active');
            $('.menu-mobile').slideToggle();
        });

        $('.menu-mobile .main-menu li').each(function(){
            if($(this).children('.sub-menu').length > 0) {
                $(this).append('<span class="arrow-main-menu-m"><i class="fa fa-angle-right" aria-hidden="true"></i></span>')
            }
        });

        var arrowMainMenu = $('.arrow-main-menu-m');

        for(var i=0; i<arrowMainMenu.length; i++){
            $(arrowMainMenu[i]).on('click', function(){
                $(this).parent().children('.sub-menu').slideToggle();
                $(this).toggleClass('active');
            })
        }

        $(window).on('resize',function(){
            if($(window).width() >= 992){
                if($('.menu-mobile').css('display') === 'block') {
                    $('.menu-mobile').css('display','none');
                    $('.btn-show-menu-mobile').toggleClass('is-active');
                }

                $('.menu-mobile .sub-menu').each(function(){
                    if($(this).css('display') === 'block') {
                        $(this).css('display','none');
                        $(arrowMainMenu).removeClass('active');
                    }
                });

            }
        });
    } catch(er) {console.log(er);}

    /*------------------------------------------------------------------
    [ Responsive sub-menu ]*/
    try {

        $('.menu-desktop .sub-menu li').each(function(){
            if($(this).children('.sub-menu').length > 0) {
                $(this).addClass('arrow-sub-menu');
            }
        });

        $(window).on('load',function(){
            responSubMenu();
        });

        $(window).on('resize',function(){
            responSubMenu();
        });

        var responSubMenu = function(){
            $('.menu-desktop .respon-sub-menu > li').each(function(){
                var obj = $(this);
                var posRight = 0;
                var posRightSub = 0;
                var deepestSubMenu = obj.children('.sub-menu').children().children('.sub-menu');
                var numOfSubMenu = 1;

                while(deepestSubMenu.find('.sub-menu').length > 0) {
                    numOfSubMenu++;
                    deepestSubMenu = deepestSubMenu.find('.sub-menu');
                }

                if(obj.children('.sub-menu').length > 0) {
                    posRight = obj.offset().left + obj.children('.sub-menu').outerWidth();

                    if(deepestSubMenu.length > 0) {
                        posRightSub = posRight + deepestSubMenu.outerWidth() * numOfSubMenu;
                    }
                }

                if(posRight >= $(window).width()) {
                    var move = posRight - $(window).width();
                    obj.children('.sub-menu').css('left', '-' + move + 'px');
                }
                else {
                    obj.children('.sub-menu').css('left', '0');
                }

                if(posRightSub >= $(window).width()) {
                    obj.children('.sub-menu').find('.sub-menu').css({'left':'auto','right':'calc(100% + 1px)'});
                }
                else {
                    obj.children('.sub-menu').find('.sub-menu').css({'right':'auto','left':'calc(100% + 1px)'});
                }
            });
        };
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Select2 ]*/
    try {
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    } catch(er) {console.log(er);}

    /*==================================================================
    [ Parallax100 ]*/
    try {
        $('.parallax100').parallax100();
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Counter up ]*/
    try {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    } catch(er) {console.log(er);}

    /*==================================================================
    [ MagnificPopup ]*/
    try {
        $('.gallery-mp').each(function() {
            $(this).find('.js-show-gallery').magnificPopup({
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Progress bar ]*/
    try {
        var progressItem = $('.progress-item');
        var progressDone = false;

        $(window).on('load',function(){
            runProgress();
        });

        $(window).on('scroll',function(){
            runProgress();
        });

        var runProgress = function(){
            progressItem.each(function(){
                var inner = $(this).children('.progress-inner');
                var per = $(inner).data('percent');

                if($(window).scrollTop() + $(window).height() > $(this).offset().top && per != '0') {
                    $(inner).data('percent','0');
                    inner.animate({width: per},1500);
                }
            });
        }
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Isotope ]*/



    /*==================================================================
    [ +/- num product ]*/
    try {
        $('.wrap-num-product').each(function(){
            var btnUp = $(this).find('.btn-num-product-up');
            var btnDown = $(this).find('.btn-num-product-down');
            var inputNum = $(this).find('.num-product');

            btnDown.on('click', function(){
                var numProduct = Number($(inputNum).val());
                if(numProduct > 0) $(inputNum).val(numProduct - 1);
            });

            btnUp.on('click', function(){
                var numProduct = Number($(inputNum).val());
                $(inputNum).val(numProduct + 1);
            });
        });

    } catch(er) {console.log(er);}


    /*==================================================================
    [ Sweetalert ]*/
    try {

        $('.js-addcart1').each(function(){
            var nameProduct = $(this).parent().find('.js-name1').html();
            $(this).on('click', function(e){
                e.preventDefault();
                swal(nameProduct, "Is added to cart !", "success");
            });
        });


    } catch(er) {console.log(er);}


    /*//////////////////////////////////////////////////////////////////
    [ Kit ]*/
    /*------------------------------------------------------------------
    [ Kit-pos2 ]*/
    try {
        $(window).on('load', function(){
            kitPos2();
        });

        $(window).on('resize', function(){
            kitPos2();
        });

        var kitPos2 = function() {
            if($(window).width() >= 1368) {
                var height = $('.kit-pos2-1-1').outerHeight();
                $('.kit-pos2').css('height', height + 'px');
            }
            else {
                $('.kit-pos2').css('height', 'auto');
            }

        }
    } catch(er) {console.log(er);}






})(jQuery);
