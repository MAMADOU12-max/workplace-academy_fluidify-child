<?php
    $args = array(
        'post_type' => 'workshop',

    );
    $query = new WP_Query( $args );
    $calendar_arr = array();
    foreach($query->get_posts() as $calendar) {
       $category= get_the_category($calendar->ID)[0]->name;
       if (is_array(get_field('date_series', $calendar->ID)) || is_object(get_field('date_series', $calendar->ID)))        
        foreach(get_field('date_series', $calendar->ID) as $date_series) {
            //var_dump($date_series);
            if ($category=='Masterclass')
            {
                $calendar_arr[date('Y-m-d', strtotime($date_series['date_series_start']))] = array(
                    'id' => $calendar->ID,
                    'post_type'=> $category ,
                    'start' => $date_series['date_series_start'],
                    'author' => get_the_author_meta('display_name', get_post_field('post_author', $calendar->ID)),
                    'author_id' => get_post_field('post_author', $calendar->ID),
                    'price' => $date_series['price'],
                    'post_title'=> get_post_field('post_title', $calendar->ID),
                    'image'=> get_the_post_thumbnail_url($calendar->ID),

                );
            }
        }
    }
    ksort($calendar_arr);
     //var_dump($calendar_arr);

?>


<div class="wrapper">
    <div class="theme-hero bg__lightblue">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row align-items-center d-flex justify-content-center">
                <div class="col-md-5 px-0">
                    <h2 class="hero-title">Ontwikkel nieuwe vaardigheden en leer van de experts</h2>
                    <div class="my-3">
                        <p> Leer theorie en praktijk van de experts uit de markt. Je kan de geleerde vaardigheden direct toepassen binnen jouw organisatie.</p>
                        <a href="/contact/" class="btn btn-default theme-button bg__secondary">
                            <strong>Neem direct contact met ons op</strong>  
                        </a>
                    </div>
                </div>    
                <div class="col-md-5 text-end-define-lg text-center-define px-0">
                    <img src="https://workplaceacademy.nl/wp-content/uploads/2021/02/basisopleiding-workplace-manager.png" class="img-fluid w-75" style="height:auto;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="theme-hero addPadding-top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <!-- <div class="col-md-6 col-sm-6 px-0"> -->
                <div class="col-md-10 col-sm-10 px-0">
                    <h2 class="hero-title">Masterclasses</h2>
                    <div class="my-3">
                        <p>
                            Aan de hand van relevante en actuele thema&#8217;s ontwikkelen wij hoogwaardige leermodules waarmee 
                            je met een beperkte tijdsinspanning op de hoogte bent van alle kennis en vaardigheden omtrent het desbetreffende thema.
                            Kijk hieronder naar onze huidige workshops.
                        </p>
                    </div>
                </div>

        </div>
    </div>
</div>


<!-- ---------------------------------------------- dynamic worshop --------------------------------------------- -->
<div class="wrapper">
    <div class="theme-hero addPadding-top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-md-start justify-content-center">
                        <?php
                            foreach ($calendar_arr as $key => $value) {
                        ?>
                        <div class="col-md-4 px-0">
                            <a  href="<?php esc_url(the_permalink($value['id'])); ?>">
                                <div class="theme-slider__slide__wrapper"> <!-- slide item -->
                                    <div class="theme-slider__slide__wrapper__head">
                                        <img src=<?php echo $value['image'] ;?>>
                                      
                                    </div>
                                    <div class="theme-slider__slide__wrapper__description">

                                        <div class="">
                                            <div class="theme-slider__slide__wrapper__head bg-white" style='height: 50px'>
                                                <div class="theme-slider__slide__items text-dark pl-0">
                                                    <div class="theme-slider__slide__items__icon">
                                                        <img alt='' src='https://secure.gravatar.com/avatar/ebe4d299984d515ee832ac64cb16396d?s=96&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/ebe4d299984d515ee832ac64cb16396d?s=192&#038;d=mm&#038;r=g 2x' class='avatar avatar-96 photo' height='96' width='96' loading='lazy'/></div><div class="theme-slider__slide__items__item"><strong class="text-dark">WorkPlace Academy</strong></div>
                                                    <div class="theme-slider__slide__items__icon">
                                                        <i class="fas fa-euro-sign"></i></div>
                                                        <div class="theme-slider__slide__items__item text-dark">
                                                        <strong class="text-dark">
                                                            <?php echo $value['price']; ?></strong></div>
                                                    <!-- <div class="theme-slider__slide__items__icon"><i class="far fa-calendar-alt"></i></div><div class="theme-slider__slide__items__item"><strong>26 May</strong></div> -->
                                                
                                                    <div class="theme-slider__slide__items__icon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                    <div class="theme-slider__slide__items__item text-dark m-0" style="width: 35%;">
                                                        <strong>
                                                                <?php
                                                                    echo date("d", strtotime($value['start']))." ";
                                                                    $dateObj   = DateTime::createFromFormat('!m', date("m", strtotime($value['start'])));
                                                                    $monthName = $dateObj->format('F'); 
                                                                    echo $monthName;
                                                                ?>
                                                        </strong>
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>

                                        <h4><?php echo $value['post_title']; ?></h4>
                                        <?php echo get_the_excerpt($value['id']);?>                       
                                        <div class="theme-slider__caret"><i class="fa fa-caret-right"></i></div>                        <div class="theme-slider__caret"><i class="fa fa-caret-right"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -------------------------------------------- dynamic course workshop --------------------------------------- -->


<div class="theme-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 px-0 col-11">
                <div class="theme-banner__wrapper">
                    <h4 class="theme-banner__title">Blijf op de hoogte van alle workplace activiteiten:</h4>
                    <div class="theme-banner__description">Opleidingen, workshops, masterclasses en veel meer</div>
                    <?php echo do_shortcode('[ninja_form id=11]') ?>
                </div>
            </div>
        </div>
    </div>
</div>