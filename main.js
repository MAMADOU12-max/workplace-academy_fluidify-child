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

    // --------------------------------------------------------------- Js Code ------------------------------------------------------------- //
   
    // slider logo
    $('.logo_slider').slick({
        centerMode: true,
        centerPadding: '0px',
        autoplay: true,
        dots: false,
        slidesToShow: 6,
        speed: 500,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
            {
                breakpoint: 1240,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    centerPadding: '20px',
                    arrows: false
                }
            },
            {
            breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3,
                    centerPadding: '10px',
                }
            },
            {
            breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2,
                    centerPadding: '15px',
                }
            }
        ]
    });
		

    // cards slide hompepage
    $('.cards_slide').slick({
        centerMode: true,
        centerPadding: '0px',
        dots: false,
        slidesToShow: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 1410,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '20px',
                    arrows: false
                }
            },
            {
                breakpoint: 1240,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '20px',
                    arrows: false
                }
            },
            {
            breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2,
                    centerPadding: '10px',
                }
            },
            {
            breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1,
                    centerPadding: '15px',
                }
            }
        ]
    });

    // expert slide
    $('.expert_slide').slick({
        // centerMode: true,
        // centerPadding: '0px',
        dots: false,
        slidesToShow: 5,
        autoplay: true,
        speed: 500,
        autoplaySpeed: 2000,
            prevArrow: '<i class="fas fa-angle-left left_arrow">',
            nextArrow: '<i class="fas fa-angle-right right_arrow">',
        responsive: [
            {
                breakpoint: 1410,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                }
            }
        ]
    });

    // cards section
    $('.cards_slide_course').slick({
        centerMode: false,
        centerPadding: '15px',
        dots: false,
        slidesToShow: 3,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: '15px'
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '15px'
                }
            }
        ]
    });

    // switch form from register page
    $('.switch_register').click(() => {
        var signUp = document.getElementById("signUP");
        var register = document.getElementById("register");

        if (signUp.style.display === "none") {
            signUp.style.display = "block";
            register.style.display = "none"
        } else {
            signUp.style.display = "none";
            register.style.display = "block"
        }
    }); 

});
