<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<style>
    @media screen and (max-width: 576px) {
        .theme-button__secondary {
            background-color: red;
            padding: 0px;
            font-weight: 500;
        }
        body{
            overflow-y: hidden;
        }
    }
    
    /* to remove padding right on the mobile screen */
    body{
        overflow-y: hidden;
    }
</style>

<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo('blogname');?></title>
        <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" />
       
        <!-- slick cdn css -->
        <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="navbar navbar-default bg__primary fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-branding">
                        <a href="/" class="custom-logo-link" rel="home"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/02/cropped-logoWorkPlaceAcademy_01.png" class="custom-logo" alt="Workplace Academy" srcset="https://workplaceacademy.nl/wp-content/uploads/2021/02/cropped-logoWorkPlaceAcademy_01.png 500w, https://workplaceacademy.nl/wp-content/uploads/2021/02/cropped-logoWorkPlaceAcademy_01-300x112.png 300w" sizes="(max-width: 500px) 100vw, 500px" width="500" height="186"></a>
                    </div>
                    <div class="navbar-mobile__wrapper">
                        <a href="/contact/" class="btn btn-default theme-button theme-button__secondary">Contact ons</a>
                        <div id="mobile_menu_icon" class="navbar-mobile__wrapper__menu__icon">
                            <span></span>
                            <span class="center"></span>
                            <span class="center"></span>
                            <span></span>
                            <!-- <span>lormejjjjjjjjjjjjjjjjj</span> -->
                        </div>
                    </div>
                </div>
                <nav>
                    <?php 
                        echo wp_nav_menu(array(
                            'menu' => 'menu-main',
                            'container' => null,
                            'menu_class' => 'nav navbar-nav',

                        ));
                    ?>
                </nav>
            </div>
        </header>
        
        

        <div class="main">


   
<!-- call js file -->
<script src="<?php echo get_stylesheet_directory_uri();?>/main.js"></script>
<!-- cdn slick, jquery, bootstrap  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
