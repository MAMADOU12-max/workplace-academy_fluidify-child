<?php /** Template Name: Incompany template */ ?>
<?php   
    $project_done=array();
    $loop = new WP_Query( array( 'post_type' => 'project_done', 'posts_per_page' => 4 ) ); 
    while ( $loop->have_posts() ) : $loop->the_post();
    $project_done[]=array(
        'title'=>the_title_attribute( 'echo=0' ),
        'content'=>get_the_content(),
        'image'=>get_the_post_thumbnail_url(),
        'link'=>get_field('link'),
        'except'=>get_the_excerpt(),
    );
    // the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
    // the_content();
    // the_post_thumbnail('thumbnail');
    endwhile;
    //var_dump($project_done);        

?>

<?php get_header(); ?>
<style>
    html {
        margin-top:0 !important;
    }
    a{
        color: white;
    }
    @media screen and (max-width: 768px) {
        /* footer responsive */
        #footer {
            padding: 50px 20px;
        } 

    }
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
                <a href="#" class="btn btn-default theme-button bg__secondary">
                     <strong>Neem contact op</strong> 
                </a>
            </div>
            <div class="col-md-4 px-0 py-md-1 py-4 pt-md-1 pt-5 mt-4 text-end-define-lg text-center-define">                
                <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
            </div>
        </div>

        <div class="row d-flex justify-content-center slide_row">
            <div class="col-md-10 my-5">

                <div class="d-flex flex-row bd-highlight mb-3 justify-content-center slider_slick_logo">
                    <div class="mx-md-2 mx-0 logo bd-highlight" style="height: 100%">
                        <img class="img-fluid" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.002.jpeg' ?>" alt="">
                    </div>
                    <div class="mx-md-2 mx-0 logo bd-highlight">
                        <img class="img-fluid" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.003.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo bd-highlight">
                        <img class="img-fluid" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.004.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo bd-highlight">
                        <img class="" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.005.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo bd-highlight">
                        <img class="img-fluid" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.007.jpeg' ?>" alt="">            
                    </div>
                    <div class="mx-md-2 mx-0 logo bd-highlight">
                        <img class="img-fluid" style="width: 120px"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.006.jpeg' ?>" alt="">            
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="theme-section pb-2" style="padding-top: 0px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto col-12">
                <span class="hero-title"> Lorem ipsum dolor sit amet consectetur adipisicing. </span>
            </div>
        </div>
    </div>
</div>


<div class="theme-section pt-1">
    <div class="container">

  
        <div class="row d-flex justify-content-center">
            <?php
                foreach ($project_done as $key => $value) {
            ?>
                <div class="col-md-5 p-4 card_side" href="">
                    <div class="row d-flex bd-highlight background__lightblue rounded rounded-5 theme-card__wrapper section-height_custom">
                        <div class="col-md-3">
                            <img class="img_card m-2"
                            src= <?php echo $value['image']; ?>>
                        </div>
                        <div class="col-md-9 col-12 px-md-2 px-0">
                            <h5 class="text-limit-agenda-title"> <strong><?php echo $value['title']; ?> </strong></h5> 
                            <p class="text-limit-section"><?php echo $value['except']; ?></p>                 
                        </div>
                    </div>
                </div>
            <?php 
                } 
            ?>
        </div>


        <div class="row">
            <div class="col-12 d-flex justify-content-center my-4">
                <button type="button" class="btn background__secondary text-white px-5">
                    <strong>Neem contact met ons op</strong>  
                </button>
            </div>
        </div>



        <!-- -------------------------------------------------------------- Start articles ---------------------------------------------------------------- -->

        <div class="row d-flex justify-content-center mt-5  align-items-center">           
            <div class="col-md-5">
                <img class="im-fluid " style="width: 100%;max-height: 350px"
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/austin-distel-Etxsv8WiFjM-unsplash-1536x1024.jpg' ?>">    
            </div>
            <div class="col-md-5 card_side mt-3">
                <h2 class="hero-title card_side">Toekomstbestendige werkomgeving vereist een</h2>
                <div class="theme-hero__content default-text">
                    Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                </div>
                <a href="#" class="btn btn-default theme-button bg__secondary px-5"> <strong>Lees meer</strong> </a>
            </div>
        </div>

        <div class="row  d-flex flex-column-reverse flex-md-row justify-content-center mt-4 pt-5 align-items-center">
            <div class="col-md-5 card_side mt-3">
                <h2 class="hero-title card_side">Toekomstbestendige werkomgeving vereist een</h2>
                <div class="theme-hero__content default-text ">
                    Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                </div>
                <a href="#" class="btn btn-default theme-button bg__secondary px-5"> <strong>Lees meer</strong> </a>
            </div>
            <div class="col-md-5">
                <img class="im-fluid " style="width: 100%;max-height: 350px"
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/austin-distel-Etxsv8WiFjM-unsplash-1536x1024.jpg' ?>">    
            </div>
        </div>

        <!-- ---------------------------------------------------------- End Articles  ----------------------------------------------------------------- -->


        <!-- ---------------------------------------------------- Start Voor Wie Section & Cards ------------------------------------------------------ -->

        
        <div class="row mt-md-5 my-4">
            <div class="col-md-6 col-12 text-center mx-auto mt-5">
                <span class="hero-title">Toekomstbestendige werkomgeving vereist een</span>
                <div class="default-text">
                    Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource man
                    agement, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    agement, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                </div>
            </div>
        </div>

        <div class="theme-section pt-1 px-0">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="row ">
                            <div class="col-md-6 col-lg-4 p-1">
                                <a>
                                    <div class="theme-card__wrapper text-center py-5">
                                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-4 p-1">
                                <a>
                                    <div class="theme-card__wrapper text-center py-5">
                                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-4 p-1">
                                <a>
                                    <div class="theme-card__wrapper text-center py-5">
                                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                                    </div>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
        <div class="theme-section pt-1 px-0">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                         <div class="row">
                            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                                <a>
                                    <div class="theme-card__wrapper text-center py-4">
                                        <img class="img-fluid" style="max-width: 150px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                                    </div>
                                </a> 
                            </div>

                            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                                <a>
                                    <div class="theme-card__wrapper text-center py-4">
                                        <img class="img-fluid" style="max-width: 150px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                                <a>
                                    <div class="theme-card__wrapper text-center py-4">
                                        <img class="img-fluid" style="max-width: 150px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                                <a>
                                    <div class="theme-card__wrapper text-center py-4">
                                        <img class="img-fluid" style="max-width: 150px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                                    </div>
                                </a> 
                            </div>
                         </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------- End Voor Wie Section & Cards ------------------------------------------------------ -->
   
    </div>
</div>



<div class="theme-hero bg__primary addMarginPadding-top">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
           
            <div class="col-md-4 text-md-start text-center">
                <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
            </div>

            <div class="col-md-6">
                <h2 class="hero-title text-white">De toekomstbestendige werkomgeving vereist een integrale en hybride aanpak</h2>
                <div class="theme-hero__content default-text text-white">
                Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                </div>

                <a href="#" class="btn btn-default theme-button bg__lightblue px-4 my-2">
                   <strong class="text-dark">Neem contact op</strong> </a>
                <a href="#" class="btn btn-default theme-button bg__secondary px-4 my-2">
                    <strong >Neem contact op</strong> 
                </a>
              
            </div>

        </div>

    </div>
</div>


<!-- require footer -->
<?php get_footer(); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- slick cdn Js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.slider_slick_logo').slick({
        centerMode: true,
        centerPadding: '0px',
        dots: false,
        slidesToShow: 6,
        arrows: false,
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
                    centerMode: true,
                    slidesToShow: 3,
                    centerPadding: '50px',
                }
            },
            {
            breakpoint: 480,
                settings: {
                    centerMode: true,
                    slidesToShow: 2,
                    centerPadding: '20px'
                }
            }
        ]
    });
</script>
	
