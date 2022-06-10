<?php /** Template Name: Incompany-4 template */ ?>


<!-- require header -->
<?php get_header(); ?>

<?php
    $post=get_post($_GET['project-id']);
?>
<div class="theme-section">
    <div class="container">
        
        <div class="row flex-column-reverse flex-md-row align-items-center text-center-define d-flex justify-content-center">
            <div class="col-md-6 px-0 text-md-start ">
                <h2 class="hero-title text-center-define"><?= $post->post_title?> </h2>
                <div class="my-4">
                    <p>
                        <?= $post->post_excerpt?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 px-0 py-md-1 py-4 pt-md-1 pt-5 mt-4 text-end-define-lg text-center-define">                
                <!-- <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">     -->
                <?php echo  get_the_post_thumbnail($post->ID); ?>
            </div>
        </div>
       
    </div>
</div>


<div class="theme-section my-5 my-md-2">
     <div class="container">        
        <div class="row d-flex justify-content-center ">
            <div class="col-md-10">
                <div class="row" style="background: #E3EFF4; border-radius: 20px !important;">
                    <div class="col-md-2 col-6 " >
                        <div class="my-2">
                            <img class="im-fluid w-100" style=""
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/photo5812418038572629207_prev_ui.png' ?>">             
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="my-2">
                            <img class="im-fluid w-100" style=""
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/photo5812418038572629208_prev_ui.png' ?>">             
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="my-2">
                            <img class="im-fluid w-100" style=""
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/photo5812418038572629207_prev_ui.png' ?>">             
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="my-2">
                            <img class="im-fluid w-100" style=""
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/photo5812418038572629208_prev_ui.png' ?>">             
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="my-2">
                            <img class="im-fluid w-100" style=""
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/photo5812418038572629207_prev_ui.png' ?>">             
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="my-2">
                            <img class="im-fluid w-100" style=""
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/photo5812418038572629208_prev_ui.png' ?>">             
                        </div>
                    </div>
                </div>
            </div>            
        </div>       
    </div>
</div>


<div class="theme-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-6 col-11 px-0">
                <div class="content__title__center">

                <?=  $post->post_content; ?>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-11 h-50 py-md-0 py-4 text-center-define text-end-define-lg px-0 offset-md-1">

                <div class="theme-card__wrapper">
                    <h4 class="theme-card__title">Interesse</h4>
                    <div class="theme-card__duration">Maar toch nog een vraag?</div>

                    <div class="theme-card__select-radio_content">
                        <form>
                            
                            <!--  start place form  php -->
                            <?php echo do_shortcode('[ninja_form id=13]') ?>
                            <!--  end place form  php -->

                            <h3 class="line-text my-3"><span  class="line-center">Of</span></h3>


                            <button type="button" class="btn text-white w-100 my-2 bg__secondary py-2">
                                <strong class="text-button m-0">Bel direct</strong>  
                            </button>
                            <button type="button" class="btn text-white w-100 mt-2 py-2" style="background-color: #003358;">
                                <strong class="text-button m-0">Stuur een mail</strong>  
                            </button>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="theme-hero bg__primary addMarginPadding-top">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
        
            <div class="col-md-4 px-0 text-md-left text-center">
                <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Contact_team2.png' ?>">    
            </div>

            <div class="col-md-6 px-0">
                <h2 class="hero-title text-white">Direct contact met één van onze adviseurs?</h2>
                <div class="my-3 text-white">
                    <p>
                        We helpen je graag met jouw specifieke vragen omtrent talent management en de toepasbaarheid hiervan binnen je organisatie.
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