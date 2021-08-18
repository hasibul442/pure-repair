

(function ($) {
    // USE STRICT
    "use strict";



        /*==================================================================
        [ Slick1 ]*/
        $('.wrap-slick1').each(function(){
            var wrapSlick = $(this);
            var slideSlick = $(this).find('.slide-slick');
    

            var showDot = false;
            if($(wrapSlick).find('.wrap-dot-slick').length > 0) {
                showDot = true;
            }

            var showArrow = false;
            if($(wrapSlick).find('.wrap-arrow-slick').length > 0) {
                showArrow = true;
            }

            $(slideSlick).slick({
                pauseOnFocus: false,
                pauseOnHover: false,
                slidesToShow: 2,
                slidesToScroll: 2,
                fade: false,
                infinite: false,
                autoplay: false,
                autoplaySpeed: 6000,
                arrows: showArrow,
                appendArrows: $(wrapSlick).find('.wrap-arrow-slick'),
                prevArrow: $(wrapSlick).find('.prev-slick'),
                nextArrow: $(wrapSlick).find('.next-slick'),
                dots: showDot,
                appendDots: $(wrapSlick).find('.wrap-dot-slick'),
                dotsClass:'dots-slick',
                customPaging: function(slick, index) {
                    return '<div></div>';
                },
                responsive: [
                    {
                      breakpoint: 1199,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                      }
                    },
                    {
                      breakpoint: 991,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 575,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                ]

            });

        });


        /*==================================================================
        [ Slick2 ]*/
        $('.wrap-slick2').each(function(){
            var wrapSlick = $(this);
            var slideSlick = $(this).find('.slide-slick');
    

            var showDot = false;
            if($(wrapSlick).find('.wrap-dot-slick').length > 0) {
                showDot = true;
            }

            var showArrow = false;
            if($(wrapSlick).find('.wrap-arrow-slick').length > 0) {
                showArrow = true;
            }

            $(slideSlick).slick({
                pauseOnFocus: false,
                pauseOnHover: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: false,
                infinite: false,
                autoplay: false,
                autoplaySpeed: 6000,
                arrows: showArrow,
                appendArrows: $(wrapSlick).find('.wrap-arrow-slick'),
                prevArrow: $(wrapSlick).find('.prev-slick'),
                nextArrow: $(wrapSlick).find('.next-slick'),
                dots: showDot,
                appendDots: $(wrapSlick).find('.wrap-dot-slick'),
                dotsClass:'dots-slick',
                customPaging: function(slick, index) {
                    return '<div></div>';
                }

            });

        });

        /*==================================================================
        [ Slick3 ]*/
        $('.wrap-slick3').each(function(){
            var wrapSlick = $(this);
            var slideSlick = $(this).find('.slide-slick');
    
            var showDot = false;
            if($(wrapSlick).find('.wrap-dot-slick').length > 0) {
                showDot = true;
            }

            var showArrow = false;
            if($(wrapSlick).find('.wrap-arrow-slick').length > 0) {
                showArrow = true;
            }
            
            var clickItem = function() {
                $(wrapSlick).find('.slick-center').next().find('.block4-pic img').on('click', function(){
                    $(slideSlick).slick('slickNext');
                });

                $(wrapSlick).find('.slick-center').prev().find('.block4-pic img').on('click', function(){
                    $(slideSlick).slick('slickPrev');
                });
            }

            $(slideSlick).on('init', function(){
                $(wrapSlick).find('.block4-pic img').off('click');
                clickItem();
            });

            $(slideSlick).slick({
                pauseOnFocus: false,
                pauseOnHover: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 3,
                slidesToScroll: 1,
                fade: false,
                infinite: false,
                initialSlide: 1,
                autoplay: false,
                autoplaySpeed: 6000,
                arrows: showArrow,
                appendArrows: $(wrapSlick).find('.wrap-arrow-slick'),
                prevArrow: $(wrapSlick).find('.prev-slick'),
                nextArrow: $(wrapSlick).find('.next-slick'),
                dots: showDot,
                appendDots: $(wrapSlick).find('.wrap-dot-slick'),
                dotsClass:'dots-slick',
                customPaging: function(slick, index) {
                    return '<div></div>';
                },
                responsive: [
                    {
                      breakpoint: 1199,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 991,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        initialSlide: 0
                      }
                    },
                    {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 575,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                ]

            });

            $(slideSlick).on('afterChange', function(event, slick, currentSlide){ 
                $(wrapSlick).find('.block4-pic img').off('click');
                clickItem();
            });

        });

})(jQuery);