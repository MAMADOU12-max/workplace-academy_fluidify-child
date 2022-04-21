<!-- ------------------ Workplace manager in 6-dagdelen block this block is removed as wel -------------------- -->
<!-- <div class="theme-section theme-cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 mx-auto">
                <h2><?php echo get_field('fdfd_title'); ?></h2>
                <div class="default-text">Zorg dat je binnen jouw organisatie in staat bent om het gesprek 
                    aan te gaan met de verschillende afdelingen betrokken bij de 
                    WorkPlace. Of dit nu vanuit de FM, HR, IT, bouw en vastgoed kant 
                    komt. Jij zult in staat zijn de taal te spreken en weloverwogen 
                    keuzes te maken.</div>
            </div>
            <div class="col-md-5 mx-auto">
                <div class="theme-cta__wrapper">
                    <div class="theme-cta__wrapper__items">
                        <h4><?php echo get_field('fdfd_cta_title');?></h4>
                        <div class="theme-cta__wrapper__borderline"></div>
                        <?php if (get_field('fdfd_items')) { foreach(get_field('fdfd_items') as $item) {?>
                        <div class="theme-cta__wrapper__items__item"><div class="theme-cta__wrapper__items__icon-checkmark"><i class="fa fa-check"></i></div><div class="theme-cta__wrapper__items__description"><?php echo $item['fdfd_item_text']; ?></div></div>
                        <?php } }?>
                    </div>
                    <a href="<?php if (get_field('fdfd_button_url')) {echo get_field('fdfd_button_url');} ?>">
                        <div class="theme-cta__button">
                            <h4><?php if (get_field('fdfd_button_text')) { echo get_field('fdfd_button_text');} ?></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->