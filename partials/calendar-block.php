<?php
    $args = array(
        'post_type' => 'workshop', 'posts_per_page' => '4',
    );
    $query = new WP_Query( $args );
    $calendar_arr = array();
    foreach($query->get_posts() as $calendar) {

       if (is_array(get_field('date_series', $calendar->ID)) || is_object(get_field('date_series', $calendar->ID)))        
        foreach(get_field('date_series', $calendar->ID) as $date_series) {
            var_dump($date_series);
            $calendar_arr[date('Y-m-d', strtotime($date_series['date_series_start']))] = array(
                'id' => $calendar->ID,
                'start' => $date_series['date_series_start'],
                'author' => get_the_author_meta('display_name', get_post_field('post_author', $calendar->ID)),
                    'author_id' => get_post_field('post_author', $calendar->ID),
                'price' => $date_series['price'],
                'post_title'=> get_post_field('post_title', $calendar->ID),
                'image'=> get_the_post_thumbnail_url($calendar->ID),
            );
        }
    }
    ksort($calendar_arr);
    // var_dump($calendar_arr);

?>


<!-- ---------------------------------------------- start agenda ---------------------------------------------- -->


<div class="theme-section">

    <div class="container">

        <div class="row d-flex justify-content-center my-3">
            <div class="col-md-10 col-11 col-sm-12">
                <div class="hero-title text-start">Agenda en activiteiten </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-11 px-0 col-sm-12">
                <div class="sousBlockFrontAgenda">

 
                        
                            <?php foreach($calendar_arr as $workshop){  ?>    
                                
                                <a href="<?php esc_url(the_permalink($workshop['id'])); ?>" class="blockCardFront rounded rounded-3  mx-md-2 mx-0" style="color:#43454D">
                                    <div class="workshopBlock">
                                        <img class="" src=<?php echo $workshop['image'] ;?> alt="">
                                        <div class="containWorkshopAgenda">
                                            <p class="workshopText"> <?php $category = get_the_category($workshop['id']); echo $category[0]->name;?> </p>
                                            <div class="blockDateFront">
                                                <p class="moiText"><?php echo date("d", strtotime($workshop['start'])); ?></p>
                                                <p class="dateText" style="font-size: 11px">
                                                <?php
                                                    $dateObj   = DateTime::createFromFormat('!m', date("m", strtotime($workshop['start'])));
                                                    $monthName = $dateObj->format('F'); 
                                                    echo $monthName;
                                                ?>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deToekomstBlock">
                                        <p class="deToekomstText text-uppercase text-limit-agenda-title"> <strong><?php echo $workshop['post_title'];?></strong></p>
                                        <p class="platformText text-limit-agenda-description">
                                            <?php echo get_the_excerpt($workshop['id']);?>
                                        </p>
                                        <div class="detaiElementAgenda">
                                           
                                            <div class="euroBlock">
                                                <img class="euroImg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/euro.png" alt="">
                                                <p class="textJan"><?php echo $workshop['price']; ?></p>
                                            </div>
                                            <!-- <div class="zwoleBlock">
                                                <img class="ss" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/ss.png" alt="">
                                                <p class="textJan">localisation</p>
                                            </div> -->
                                            <!-- <div class="facilityBlock">
                                                <img class="faciltyImg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/map-search.png" alt="">
                                                <p class="textJan"><?php echo $workshop["post_date"] ?></p>
                                            </div> -->
                                        </div>
                                    </div>
                                </a>

                            <?php } ?>  

                 

                </div>

            </div>
        </div>
    </div>
</div>        
<!-- ---------------------------------------------------End agenda --------------------------------------------- -->
