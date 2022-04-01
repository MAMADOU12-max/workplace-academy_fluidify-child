<?php

$args = array(
    'post_type' => 'expert',
);
$query = new WP_Query( $args );
$experts = $query->get_posts();

?>

<div class="row">
    <div class="col-12">
        <div class="theme-blurb__slick__slider">
            <?php foreach($experts as $expert) { ?>
            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                <div class="col-md">
                    <div class="theme-blurb__image"><img src="<?php echo get_the_post_thumbnail_url($expert->ID);?>"></div>
                    <div class="theme-blurb__title"><?php echo $expert->post_title;?></div>
                    <div class="theme-blurb__description"><?php echo get_the_excerpt($expert->ID);?></div>
                    <div class="theme-blurb__icons">
                        <a href="<?php echo get_field('fdfd_expert_linkedin', $expert->ID);?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>