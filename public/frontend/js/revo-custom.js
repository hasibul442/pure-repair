(function ($) {
    "use strict";
    jQuery(document).ready(function() {

        /*==================================================================
        [ Revo1 ]*/
        var screenH1 = 0;
        if ($(window).width() >= 768) {
            screenH1 = 500;
        }
        else {
            screenH1 = $(window).height() - 70;
        }

        if ($(window).height() <= 660) { 
            screenH1 = $(window).height() - 150;
        }

        jQuery('#rev_slider_1').show().revolution({ 

            responsiveLevels: [1200-17, 992-17, 768-17, 480-17],
            gridwidth:[1200, 992, 768, 480],
            minHeight: screenH1,
            delay: 7000,

            spinner: 'spinner2',
            disableProgressBar:"on",
            
            sliderLayout: 'fullwidth',

            navigation: {

                keyboardNavigation: 'on',
                keyboard_direction: 'horizontal',
                onHoverStop: 'off',

                touch: {
 
                    touchenabled: 'on',
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: 'horizontal',
                    drag_block_vertical: true
             
                },
 
                arrows: {
                    enable: true,
                    style: 'persephone',
                    hide_onleave: true,
                    hide_onmobile: true,
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 40,
                        v_offset: 0
                    },
             
                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 40,
                        v_offset: 0
                    }
                },
 
                bullets: {
                    enable: false
                }
            }
        });


        /*==================================================================
        [ Revo2 ]*/
        var screenH2 = 0;
        if ($(window).width() >= 992) {
            screenH2 = $(window).height();
        }
        else {
            screenH2 = $(window).height() - 70;
        }

        jQuery('#rev_slider_2').show().revolution({
            
            responsiveLevels: [1200-17, 992-17, 768-17, 480-17],
            gridwidth:[1200, 992, 768, 480],
            minHeight: screenH2,
            delay: 7000,

            spinner: 'spinner2',
            disableProgressBar:"on",
            
            sliderLayout: 'fullwidth',

            navigation: {

                keyboardNavigation: 'on',
                keyboard_direction: 'horizontal',
                onHoverStop: 'off',

                touch: {
 
                    touchenabled: 'on',
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: 'horizontal',
                    drag_block_vertical: true
             
                },
 
                arrows: {
                    enable: true,
                    style: 'persephone',
                    hide_onleave: true,
                    hide_onmobile: true,
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 40,
                        v_offset: 0
                    },
             
                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 40,
                        v_offset: 0
                    }
                },
 
                bullets: {
                    enable: false
                }
            }
        });

        /*==================================================================
        [ Revo3 ]*/
        var screenH3 = 0;
        if ($(window).width() >= 992) {
            screenH3 = $(window).height() - 150;
        }
        else {
            screenH3 = $(window).height() - 70;
        }

        jQuery('#rev_slider_3').show().revolution({
            
            responsiveLevels: [1900-17, 1368-17, 992-17, 480-17],
            gridwidth:[1900, 1368, 992, 480],
            minHeight: screenH3,
            delay: 7000,

            spinner: 'spinner2',
            disableProgressBar:"on",
            
            sliderLayout: 'fullwidth',

            navigation: {

                keyboardNavigation: 'on',
                keyboard_direction: 'horizontal',
                onHoverStop: 'off',

                touch: {
 
                    touchenabled: 'on',
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: 'horizontal',
                    drag_block_vertical: true
             
                },
 
                arrows: {
                    enable: true,
                    style: 'persephone',
                    hide_onleave: true,
                    hide_onmobile: true,
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 40,
                        v_offset: 0
                    },
             
                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 40,
                        v_offset: 0
                    }
                },
 
                bullets: {
                    enable: false
                }
            }
        });
    });

})(jQuery);