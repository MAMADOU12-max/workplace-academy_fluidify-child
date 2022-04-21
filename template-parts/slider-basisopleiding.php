<div class="theme-slider bg__lightblue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Basisopleidingen</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="theme-slider-slick">


                    <?php
                    $args = array(
                        'post_type' => 'workshop',
                        'cat' => 5,
                    );
                    $query = new WP_Query( $args );

                    $slider_arr = array();

                    foreach($query->get_posts() as $calendar) {
                        foreach(get_field('date_series', $calendar->ID) as $date_series) {
                            $slider_arr[date('Y-m-d',strtotime($date_series['date_series_start']))] = array(

                                'id' => $calendar->ID,
                                'start' => $date_series['date_series_start'],
                                'author' => get_the_author_meta('display_name', get_post_field('post_author', $calendar->ID)),
                                'price' => $date_series['price'],
                            );
                        }
                    }
                    ksort($slider_arr);

                    foreach($slider_arr as $slider){ ?>
                    <a href="<?php esc_url(the_permalink($slider['id']));?>">
                        <div class="theme-slider__slide__wrapper"> <!-- slide item -->
                            <div class="theme-slider__slide__wrapper__head">
                                <img src="<?php echo get_the_post_thumbnail_url($slider['id'])?>">
                                <div class="theme-slider__slide__items">
                                    <div class="theme-slider__slide__items__icon"></div><div class="theme-slider__slide__items__item"><strong><?php echo $slider['author'];?></strong></div>
                                    <div class="theme-slider__slide__items__icon"></div><div class="theme-slider__slide__items__item"><strong><?php echo $slider['price']; ?></strong></div>
                                    <div class="theme-slider__slide__items__icon"></div><div class="theme-slider__slide__items__item"><strong><?php echo date("d", strtotime($slider['start'])); echo ' '; echo date("M", strtotime($slider['start']));?></strong></div>
                                </div>
                            </div>
                            <div class="theme-slider__slide__wrapper__description">
                                <h4><?php echo get_the_title($slider['id']);?></h4>
                                <?php echo get_the_excerpt($slider['id']);?>
                                <div class="theme-slider__caret"><i class="fa fa-caret-right"></i></div>
                            </div>
                        </div></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>