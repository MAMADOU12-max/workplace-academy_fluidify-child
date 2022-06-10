<!-- The large banner -->

<style>
      .bg-image-banner{
        background: url('<?php  echo get_stylesheet_directory_uri() . '/assets/img/bg-banner.png' ?>') center center / cover no-repeat;
     } 
     .form-subscribe .nf-form-content nf-fields-wrap .nf-field .nf-field-element input[type="email"] {
        /* border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        text-align: center; */
        color: #0b6eb9;
        background: white;
        opacity: 0.7;
    } 
</style>
<div class="my-5 bg-image-banner" style="height: 45vh;padding-top: 80px !important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="theme-banner__wrapper pt-5 pb-0" style="background: none;">
                    <h4 class="theme-banner__title"><?php echo get_field('fdfd_title'); ?> </h4>
                    <?php echo do_shortcode('[ninja_form id=11]') ?>
                </div>
            </div>
            <div class="col-md-12 text-center pb-5">
                <a href="" target="_blank"> <i class="fab fa-facebook fa-2x m-2" style="color: white;"></i></a>
                <a href="" target="_blank">
                    <i class="fab fa-whatsapp fa-2x m-2" style="color: white;"></i></a>
                <a href="" target="_blank"><i class="fab fa-instagram fa-2x m-2" 
                style=" border-radius: 10px; color: white;"></i></a>
                <a href="" target="_blank">
                    <i class="fab fa-linkedin fa-2x m-2" style="color: white;"></i></a>
                <a href="" target="_blank">
                    <i class="fab fa-twitter fa-2x m-2 " style="color: white;"></i></a>
                <a href="" target="_blank">
                    <i class="fab fa-youtube fa-2x m-2" style="color: white;"></i></a>
                <a href="" target="_blank"> 
                    <i class="fa     fa-envelope fa-2x m-2" style="color: white;"></i></a>
            </div>
        </div>
    </div>
</div>