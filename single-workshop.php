<?php

?>

<?php get_header(); ?>

<div class="theme-hero bg__lightblue">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row align-items-center">
            <div class="col-md-6">
                <h2 class="hero-title"><?php the_title(); ?></h2>
                <div class="default-text"><?php the_excerpt(); ?></div>
                <a href="#available_timeschedules" class="btn btn-default theme-button bg__primary">Schrijf mij in</a>
                <a href="/contact" class="btn btn-default theme-button bg__secondary">Neem contact op</a>
            </div>
            <div class="col-md-6">
                <img src="<?php the_post_thumbnail_url(); ?>" style="height:auto;">
            </div>
        </div>
    </div>
</div>
<div class="theme-usp-section">
    <div class="container">
        <div class="theme-usp-block__wrapper">
            <?php if (get_field('fdfd_workshop_specifications')) { ?>
            <?php foreach(get_field('fdfd_workshop_specifications') as $specification)  {?>
            <div class="theme-usp-block__single_usp">
                <h5><?php echo $specification['fdfd_workshop_spec_title']; ?></h5>
                <p><?php echo $specification['fdfd_workshop_spec_content']; ?></p>
            </div>
            <?php } }?>
        </div>
    </div>
</div>

<div class="theme-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="content__title__center"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
</div>

<div class="theme-blurb bg__lightblue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>De expert(s)</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="theme-blurb__slick__slider">
                    <?php foreach(get_field('fdfd_experts') as $expert) { ?>
                    <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                        <div class="col-md">
                            <div class="theme-blurb__image"><img src="<?php echo get_the_post_thumbnail_url($expert->ID); ?>"></div>
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
    </div>
</div>

<div id="available_timeschedules" class="theme-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <?php if (get_field('date_series')) { ?>
                <?php foreach(get_field('date_series') as $agenda) { ?>
                <div class="theme-time-block__wrapper">
                    <div class="col-md-4 float-left">
                        <h2><?php echo $agenda['date_series_start']; ?></h2>
                        <p><?php if (get_field('fdfd_description')) { echo get_field('fdfd_description'); } ?></p>
                    </div>
                    <div class="col-md-4 float-left">
                        <?php if ($agenda['agenda']) { ?>
                        <?php foreach($agenda['agenda'] as $nr => $agenda_item) { ?>
                        <div class="theme-time-block__wrapper__item"><div class="theme-time-block__icon"><?php echo (int)$nr+1; ?></div><?php echo date("d M", strtotime($agenda_item['agenda_date'])); ?>, <?php echo date("H:i", strtotime($agenda_item['agenda_date'])); ?>, <?php echo $agenda_item['agenda_location']; ?></div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-4 float-right">
                        <div class="theme-time-block__wrapper__price">
                            <h4 class="theme-time-block__price">&euro;<?php echo $agenda['price']; ?></h4>
                            <div class="theme-time-block__exvat">Ex BTW</div>
                            <a href="/inschrijven/?type=<?php echo the_title(); ?>&date=<?php echo $agenda['date_series_start'];?>&price=<?php echo $agenda['price'];?>" class="btn btn-default theme-button theme-button__primary">Schrijf mij in!</a>
                        </div>
                    </div>
                </div>

                <?php } }?>
            </div>
        </div>
    </div>
</div>

<?php echo get_template_part('template-parts/agenda', 'slider'); ?>

<?php get_footer(); ?>