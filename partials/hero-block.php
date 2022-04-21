<!-- First block on the homepage -->
<style>
    @media screen and (max-width: 576px) {
        .theme-hero h2 {
            font-size: 25px;
        }
    }
    
</style>

<div class="theme-hero <?php echo get_field('fdfd_bg_color'); ?>">
    <div class="container">
        
        <div class="row flex-column-reverse flex-md-row align-items-center">
            <div class="col-md-6 offset-md-1 px-0">
                <h2 class="hero-title">De toekomstbestendige werkomgeving vereist een integrale en hybride aanpak</h2>
                    <div class="theme-hero__content default-text">
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </div>
                <?php
                // old button
                // if(get_field('fdfd_buttons')) {
                //     foreach(get_field('fdfd_buttons') as $button) {
                //         echo '<a href="'.$button['fdfd_button_url'].'" class="btn btn-default theme-button '.$button['fdfd_button_color'].'">'.$button['fdfd_button_text'].'</a>';
                //     }
                // }
                ?>

                <a href="#" class="btn btn-default theme-button bg__primary">Ontwikkel jezelf</a>
                <a href="#" class="btn btn-default theme-button bg__secondary">Lees meer</a>
            </div>
            <div class="col-md-5">
                <!-- <img src="<?php echo get_field('fdfd_image'); ?>" style="height:auto;"> -->
                <img class="im-fluid w-75" style=""
                src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">
    
            </div>
        </div>

        <div class="row d-flex justify-content-center bg-accent">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium mollitia saepe dolor!</p> -->
            <!-- <section class="px-3"> -->
                <div class="container my-5">
                    <div class="row d-flex justify-content-center">
                        <div class="mx-md-4 mx-3">
                            <img class="img-fluid" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.002.jpeg' ?>" alt="">
                            <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci reprehenderit totam maxime! -->
                        </div>
                        <div class="mx-md-4 mx-3">
                            <img class="" style="width: 120px"
                           src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.003.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-4 mx-3">
                            <img class="" style="width: 120px"
                           src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.004.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-4 mx-3">
                            <img class="" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.005.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-4 mx-3">
                            <img class="" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.006.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-4 mx-3">
                            <img class="" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.007.jpeg' ?>" alt="">            
                        </div>
                    </div>
                </div>
            <!-- </section> -->
        </div>

    </div>
</div>