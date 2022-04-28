<!-- First block on the homepage -->
<style>
    @media screen and (max-width: 576px) {
        .theme-hero h2 {
            font-size: 25px;
        }
        .description-title {
            font-size: 18px;
        }
        .logo {
            width: 160px !important;
        }
        .slide_row{
            height: 180px !important;
        }
    }
</style>

<div class="theme-section <?php echo get_field('fdfd_bg_color'); ?>">
    <div class="container">
        
        <div class="row flex-column-reverse flex-md-row align-items-center text-center-define d-flex justify-content-center">
            <div class="col-md-6 px-0 text-md-start ">
                <h2 class="hero-title text-center-define">De toekomstbestendige werkomgeving vereist een integrale en hybride aanpak</h2>
                <div class="theme-hero__content default-text ">
                    <h5 class="description-title">
                      Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </h5>
                </div>
                <a href="/workshop/opleiding/" class="btn btn-default theme-button bg__primary">Ontwikkel jezelf</a>
                <a href="/over-ons/" class="btn btn-default theme-button bg__secondary">Lees meer</a>
            </div>
            <div class="col-md-4 px-0 py-md-1 py-4 pt-md-1 pt-5 mt-4 text-end-define-lg text-center-define">                
                <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
            </div>
        </div>

        <div class="row d-flex justify-content-center slide_row">
            <div class="col-md-10 my-5">

                <div class="d-flex flex-row bd-highlight mb-3 justify-content-center slider_slick_logo">
                    <div class="mx-md-2 mx-0 logo">
                        <img class="img-fluid" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.002.jpeg' ?>" alt="">
                    </div>
                    <div class="mx-md-2 mx-0 logo">
                        <img class="" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.003.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo">
                        <img class="" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.004.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo">
                        <img class="" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.005.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo">
                        <img class="" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.007.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo">
                        <img class="" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.006.jpeg' ?>" alt="">            
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- slick cdn Js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">

    $('.slider_slick_logo').slick({
        centerMode: true,
        centerPadding: '0px',
        dots: false,
        slidesToShow: 6,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '50px',
                }
            },
            {
                breakpoint: 1240,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '50px',
                }
            },
            {
            breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3,
                    centerPadding: '50px',
                }
            },
            {
            breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2,
                    centerPadding: '20px'
                }
            }
        ]
    });
</script>
	