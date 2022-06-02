<?php

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
<!-- --------------------------------------------------------------- Start section ---------------------------------------------------------------- -->
<div class="theme-section pt-0 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto col-12">
                <!-- <h2> Lorem ipsum dolor sit amet consectetur adipisicing. </h2> -->
                <div class="hero-title text-center">
                    Krijg een idee van de projecten die wij uitvoeren.
                </div> 
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
                        <div class="col-md-6 px-4 py-1 card_side bg-card" href="/incompany-4-template">
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
            <div class="col-12 d-flex justify-content-center my-md-4 mb-5">
                <button type="button" class="btn background__secondary text-white mt-3 px-5">
                    <strong>Neem contact met ons op</strong>  
                </button>
            </div>
        </div>

    </div>
</div>

<!-- --------------------------------------------------------------- End section ---------------------------------------------------------------- -->
