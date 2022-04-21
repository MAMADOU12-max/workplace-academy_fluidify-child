<?php if(get_field('fdfd_logo_slides')) {?>
<div class="theme-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="theme-slider-logo">
                    <?php foreach(get_field('fdfd_logo_slides') as $slider){?>
                    <div class="theme-logo__slide__wrapper"> <!-- slide item -->
                        <img src="<?php echo $slider['fdfd_image'];?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>