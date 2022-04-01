<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo('blogname');?></title>
        <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- slick cdn css -->
        <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="navbar navbar-default bg__primary">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-branding">
                        <?php the_custom_logo();?>
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

        <!-- slick cdn Js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>