<?php
    $args = array(
        'post_type' => 'workshop',
    );
    $query = new WP_Query( $args );
    $calendar_arr = array();
    foreach($query->get_posts() as $calendar) {
        //var_dump($calendar);break;
        foreach(get_field('date_series', $calendar->ID) as $date_series) {
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
    //var_dump($calendar_arr);
    //var_dump($loop);
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


<!-- --------------------------------------------------- Voor Wie Section & small Boxes ------------------------------------------------------- -->

<div class="theme-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto col-12">
                <strong class="hero-title"> Voor wie maken wij onze kennis-producten?</strong>
                <div class="default-text pt-3" >
                    <h5>Wij maken onze kennisproducten altijd voor een specifieke doelgroep. Dit kan op dire
                    ctie, management of uitvoerend niveau zijn.</h5>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="theme-section pt-1">
    <div class="container">

        <div class="row d-flex justify-content-center">
            <div class="col-md-10 my-5">
                <div class="row">
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Facilitair.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">Facilitair</h4>
                            </div>
                        </a> 
                    </div>
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/HR.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">HR</h4>
                            </div>
                        </a> 
                    </div>
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Real_Estate.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">Real Estate</h4>
                            </div>
                        </a> 
                    </div>
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/IT.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">IT</h4>
                            </div>
                        </a> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/mobiliteit.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">Mobiliteit</h4>
                            </div>
                        </a> 
                    </div>
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Duurzaamheid.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">Duurzaamheid</h4>
                            </div>
                        </a> 
                    </div>
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Adviseurs.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">Adviseurs</h4>
                            </div>
                        </a> 
                    </div>
                    <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                        <a>
                            <div class="theme-card__wrapper text-center py-4 pt-5">
                                <img class="img-fluid" style="max-width: 100px;"
                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Leveranciers.png' ?>">    
                                <h4 class="theme-card__title mt-2 mb-0">Leveranciers</h4>
                            </div>
                        </a> 
                    </div>
                </div>
            </div>
        </div> 

    </div>
</div>
<!-- -------------------------------------------------- End Voor Wie Section & small Boxes ------------------------------------------------------ -->



<!-- ------------------------------------------------------------ start agenda ------------------------------------------------------------------ -->

<div class="blockAgenda mt-5 mx-0 mx-md-3">

    <div class="blockFrontAgenda section-custom">
        <div class="container px-0">

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-11 mb-4">
                    <div class="hero-title text-center">Onze agenda met alle  Activiteiten voor jou </div>  
                </div>
            </div>

            <div class="sousBlockFrontAgenda">

                <?php foreach($calendar_arr as $workshop){  ?>    
                    <a href="<?php esc_url(the_permalink($workshop['id'])); ?>" class="blockCardFront rounded rounded-3 mx-2" style="color:#43454D">
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
                                <div class="janBlock">
                                    <div class="colorFront">
                                        <img src="<?php echo $company_logo; ?>" width="15" alt="">
                                    </div>
                                    <p class="textJan"><?php echo $workshop['author'] ?></p>
                                </div>
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

            <div class="row">
                <div class="col-12 d-flex justify-content-center my-4">
                    <button type="button" class="btn background__secondary text-white mt-3 px-5">
                        <strong>Allei Activiteiten</strong>  
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- --------------------------------------------------------------- End agenda ---------------------------------------------------------------- -->


<!-- --------------------------------------------------------------- Start section ---------------------------------------------------------------- -->

<div class="theme-section pt-0 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto col-12">
                <!-- <h2> Lorem ipsum dolor sit amet consectetur adipisicing. </h2> -->
                <div class="hero-title text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </div> 
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
            <div class="col-12 d-flex justify-content-center my-md-4 mb-5">
                <button type="button" class="btn background__secondary text-white mt-3 px-5">
                    <strong>Neem contact met ons op</strong>  
                </button>
            </div>
        </div>

    </div>
</div>

<!-- --------------------------------------------------------------- End section ---------------------------------------------------------------- -->
