
<!-- This old calendar is updated and moved on the text-block file second position -->

<!-- <div class="theme-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Agenda en Activiteiten</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 column-count-2"> -->
                <?php
                $args = array(
                    'post_type' => 'workshop',
                );
                $query = new WP_Query( $args );

                $calendar_arr = array();

                foreach($query->get_posts() as $calendar) {
                    foreach(get_field('date_series', $calendar->ID) as $date_series) {
                        $calendar_arr[date('Y-m-d', strtotime($date_series['date_series_start']))] = array(

                            'id' => $calendar->ID,
                            'start' => $date_series['date_series_start'],
                            'author' => get_the_author_meta('display_name', get_post_field('post_author', $calendar->ID)),
                                'author_id' => get_post_field('post_author', $calendar->ID),
                            'price' => $date_series['price'],
                        );
                    }
                }
                ksort($calendar_arr);

                foreach($calendar_arr as $workshop){ ?>
                <!-- single item -->
                <!-- <div class="theme-calendar"> 
                    <a href="<?php esc_url(the_permalink($workshop['id']));?>">
                        <div class="theme-calendar__dates-wrapper">
                            <div class="single-date">
                                <h4 class="theme-calendar__month-name"><?php echo date("M", strtotime($workshop['start'])); ?></h4>
                                <h3 class="theme-calendar__month-day"><?php echo date("d", strtotime($workshop['start'])); ?></h3>
                            </div>
                        </div>
                        <div class="theme-calendar__description__wrapper">
                            <div class="theme-calendar__description">
                                <div class="theme-calendar__event__category"><?php $category = get_the_category($workshop['id']); echo $category[0]->name;?></div>
                                <div class="theme-calendar__event__description"><?php echo get_the_excerpt($workshop['id']);?></div>
                                <div class="theme-calendar__items">
                                    <div class="theme-calendar__items__icon"><img src="<?php echo get_field('fdfd_user_profile_image', 'user_'.$workshop['author_id']); ?>"></div><div class="theme-calendar__items__item"><strong><?php echo $workshop['author'] ?></strong></div>
                                    <div class="theme-calendar__items__icon"><i class="fas fa-euro-sign"></i></div><div class="theme-calendar__items__item"><strong><?php echo $workshop['price']; ?></strong></div> -->
                                    <!--                                <div class="theme-calendar__items__icon"></div><div class="theme-calendar__items__item"><strong>Amsterdam</strong></div>-->
                                <!-- </div>
                                <div class="theme-calendar__caret"><i class="fa fa-caret-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div> -->
                <?php } ?>
                <?php if (get_field('fdfd_button_text') && get_field('fdfd_button_url')) { ?>
                <!-- <div class="theme-calendar__wrapper__button">
                    <a href="<?php echo get_field('fdfd_button_url'); ?>" class="btn btn-default theme-button theme-button__primary"><?php echo get_field('fdfd_button_text'); ?>
                    <div class="theme-calendar__wrapper__button__caret"><i class="fa fa-caret-right"></i></div></a>
                </div> -->
                <?php } ?>
            <!-- </div>
        </div>

        
    </div>
</div> -->