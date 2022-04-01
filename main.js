jQuery(function($){

    /*/ mobile navigation menu /*/

    $('#mobile_menu_icon').click(function() {
        if ($(".navbar-nav").hasClass('open-mobile-menu')) {
            $(this).removeClass('active');
            $(".navbar-nav").removeClass('open-mobile-menu');
        } else {
            $(".navbar-nav").addClass('open-mobile-menu');
            $(this).addClass('active');
        }
    });

    /*/ slick slider /*/
    $('.theme-slider-slick').slick({
        infinite: false,
        slidesToShow: 3.5,
        draggable: true,
        arrows: true,
        nextArrow: '<div class="theme-slider__control__forward"><i class="fa fa-chevron-right"></i></div>',
        prevArrow: '<div class="theme-slider__control__previous"><i class="fa fa-chevron-left"></i></div>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 568,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    /*/ slick slider /*/
    $('.theme-slider-logo').slick({
        infinite: false,
        slidesToShow: 6,
        draggable: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 568,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });

    /*/ blurb slider /*/
    $('.theme-blurb__slick__slider').slick({
        infinite: false,
        slidesToShow: 5,
        draggable: true,
        arrows: false,
        nextArrow: '<div class="theme-slider__control__forward"><i class="fa fa-chevron-right"></i></div>',
        prevArrow: '<div class="theme-slider__control__previous"><i class="fa fa-chevron-left"></i></div>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 568,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

});
