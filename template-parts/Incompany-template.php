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
    @media screen and (max-width: 576px) {
        .theme-hero h2 {
            font-size: 25px;
        }
        .description-title {
            font-size: 18px;
        }
    }   
</style>

<div class="theme-section <?php echo get_field('fdfd_bg_color'); ?>">
    <div class="container">
        
        <div class="row flex-column-reverse flex-md-row align-items-center text-center-define d-flex justify-content-center">
            <div class="col-md-6 col-11 px-0 text-md-start ">
                <h2 class="hero-title text-center-define">Maatwerk bij jou op de werkplek</h2>
                <div class="my-3">
                    <p>
                        Binnen jouw organisatie een maatwerk traject opzetten om specifieke kennis en vaardigheden over workplace management eigen te maken? Wij hebben ruime ervaring in het opzetten van incompany programma’s.
                        Neem eenvoudig contact op via de button hieronder.
                    </p>
                </div>
                <a href="/contact" class="btn btn-default theme-button bg__secondary">
                     <strong>Neem contact op</strong> 
                </a>
            </div>
            <div class="col-md-4 col-11 px-0 py-md-1 py-4 pt-md-1 pt-5 mt-4 text-end-define-lg text-center-define">                
                <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
            </div>
        </div>


        <!-- ----------------------------------------------------------------- slider logo --------------------------------------------------------------- -->
        <div class="row bg-white bg-info d-flex justify-content-center my-5" >
            <div class="col-md-10">
                <div class="row" >

                    <div class="col-md-12 text-center logo_slider px-0">
                        <div class="col-md-2 p-1 items-slider-card d-flex justify-content-center">
                            <img class="img-fluid" style="width: 130px"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.002.jpeg' ?>" alt="">
                        </div>

                        <div class="col-md-2 p-1 items-slider-card  d-flex justify-content-center">
                            <img class="" style="width: 130px"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.007.jpeg' ?>" alt=""> 
                        </div>


                        <div class="col-md-2 p-1 items-slider-card  d-flex justify-content-center">
                            <img class="" style="width: 130px"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.003.jpeg' ?>" alt="">     
                        </div>

                        <div class="col-md-2 p-1 items-slider-card  d-flex justify-content-center">
                             <img class="" style="width: 130px"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.005.jpeg' ?>" alt="">  
                        </div>


                        <div class="col-md-2 p-1 items-slider-card  d-flex justify-content-center">
                             <img class="" style="width: 130px"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.006.jpeg' ?>" alt="">
                        </div>

                        <div class="col-md-2 p-1 items-slider-card  d-flex justify-content-center">
                            <img class="" style="width: 130px"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.004.jpeg' ?>" alt="">  
                        </div>
                        
                        <div class="col-md-2 p-1 items-slider-card  d-flex justify-content-center">
                            <img class="" style="width: 130px"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Has_Hogeschool.001.jpeg' ?>" alt="">  
                        </div>
                    </div>

                </div>
            </div> 
        </div>
        <!-- --------------------------------------------------------------- end slider logo --------------------------------------------------------------- -->

    </div>
</div>




<div class="theme-section pb-2" style="padding-top: 0px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto col-12">
                <span class="hero-title"> Krijg een idee van de projecten die wij uitvoeren. </span>
            </div>
        </div>
    </div>
</div>


<div class="theme-section pt-1">
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="row d-flex justify-content-start">
                        
                    <?php
                        foreach ($project_done as $key => $value) {
                    ?>
                        <div class="col-md-6 px-4 py-1 card_side" href="">
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
            </div>
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
            <div class="col-md-5 text-md-left text-center">
                <img class="im-fluid " style="width: 80%;max-height: 350px"
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Image19.png' ?>">    
            </div>
            <div class="col-md-5 card_side mt-3">
                <h2 class="hero-title card_side">Soms is er gewoon wat persoonlijke begeleiding nodig.</h2>
                <div class="my-3">
                    <p>
                        Binnen jouw organisatie een maatwerk traject opzetten om specifieke kennis en vaardigheden over 
                        workplace management eigen te maken? Wij hebben ruime ervaring in het opzetten van incompany 
                        programma’s. Neem eenvoudig contact op via de button hieronder.
                    </p>
                </div>
                <a href="#" class="btn btn-default theme-button bg__secondary px-5"> <strong>Lees meer</strong> </a>
            </div>
        </div>

        <div class="row  d-flex flex-column-reverse flex-md-row justify-content-center mt-4 pt-5 align-items-center">
            <div class="col-md-5 card_side mt-3">
                <h2 class="hero-title card_side">Voor iedereen die ‘iets’ met de werkomgeving doet.</h2>
                <div class="my-3">
                    <p>
                        Binnen jouw organisatie een maatwerk traject opzetten om specifieke kennis en vaardigheden 
                        over workplace management eigen te maken? Wij hebben ruime ervaring in het opzetten van incompany programma’s.
                        Neem eenvoudig contact op via de button hieronder.   
                    </p>
                </div>
                <a href="#" class="btn btn-default theme-button bg__secondary px-5"> <strong>Lees meer</strong> </a>
            </div>
            <div class="col-md-5 text-md-right text-center">
                <img class="im-fluid " style="width: 80%;max-height: 350px"
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Image20.png' ?>">    
            </div>
        </div>

        <!-- ---------------------------------------------------------- End Articles  ----------------------------------------------------------------- -->


        <!-- ---------------------------------------------------- Start Voor Wie Section & Cards ------------------------------------------------------ -->

        
        <div class="row mt-md-5 my-4">
            <div class="col-md-6 col-12 text-center mx-auto mt-5">
                <span class="hero-title">Toekomstbestendige werkomgeving vereist een</span>
                <div class="my-3">
                    <p>
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource man
                        agement, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                        agement, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </p>
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

        <div class="theme-section pt-1">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 mb-5">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Facilitair.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">Facilitair</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/HR.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">HR</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Real_Estate.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">Real Estate</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/IT.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">IT</h4>
                                    </div>
                                </a> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/mobiliteit.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">Mobiliteit</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Duurzaamheid.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">Duurzaamheid</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Adviseurs.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">Adviseurs</h4>
                                    </div>
                                </a> 
                            </div>
                            <div class="col-md-6 col-lg-3 col-6 p-1" style="height: 230px;">
                                <a href="/incompany-3-template">
                                    <div class="theme-card__wrapper text-center py-4 pt-5">
                                        <img class="img-fluid" style="max-width: 85px;"
                                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Leveranciers.png' ?>">    
                                        <h4 class="theme-card__title mt-2 mb-0 customised_size_title">Leveranciers</h4>
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
           
            <div class="col-md-4 px-0 text-md-start text-center">
                <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Contact_team2.png' ?>">    
            </div>

            <div class="col-md-6 px-0">
                <h2 class="hero-title text-white">Direct contact met één van onze adviseurs?</h2>
                <div class="my-3 text-white">
                    <p>
                        We helpen je graag met jouw specifieke vragen omtrent workplace management en de toepasbaarheid hiervan binnen je organisatie.
                    </p>
                </div>    
                <a href="mailto:info@workplaceacademy.nl" class="btn btn-default theme-button bg__lightblue px-3 my-2 ml-md-0 ml-2">
                     <strong class="text-dark">Direct e-mailen </strong>
                </a>
                <a href="tel: +31621610903" class="btn btn-default theme-button bg__secondary px-5 my-2">
                      <strong >Bellen</strong> 
                </a>
              
            </div>

        </div>

    </div>
</div>


<!-- require footer -->
<?php get_footer(); ?>
