<?php /** Template Name: Agenda template */ ?>

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


<body class="page-template-default page page-id-63 wp-custom-logo">

    <!-- require header -->
    <?php get_header(); ?>

    <div class="main">

        <div class="wrapper">
            <div class="theme-hero bg__lightblue">
            <div class="container">
                <div class="row my-5 flex-column-reverse flex-md-row align-items-center d-flex justify-content-center">
                    <div class="col-md-5">
                        <h2 class="hero-title">Alle activiteiten die je wil volgen als workplace manager</h2>
                        <div class="theme-hero__content default-text"></div>
                        <a href="#" class="btn btn-default theme-button bg__secondary">Ik heb een vraag</a>
                    </div>
                    <div class="col-md-5    ">
                        <img src="" style="height:auto;">
                    </div>
                </div>
            </div>
        </div>


<!-- ---------------------------------------------- start agenda ---------------------------------------------- -->

<div class="blockAgenda mt-5 mx-0 mx-md-3">

    <div class="blockFrontAgenda section-custom">
        <div class="container px-0">

            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-11 mb-4">
                    <div class="hero-title text-start">Agenda en activiteiten </div>  
                </div>
            </div>

            <div class="sousBlockFrontAgenda">

                <?php foreach($calendar_arr as $workshop){  ?>    
                       
                    <a href="<?php esc_url(the_permalink($workshop['id'])); ?>" class="blockCardFront rounded rounded-3" style="color:#43454D">
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
                            <p class="deToekomstText text-uppercase"> <strong><?php echo $workshop['post_title'];?></strong></p>
                            <p class="platformText">
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

<!-- ---------------------------------------------------End agenda --------------------------------------------- -->



<div class="theme-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="theme-banner__wrapper">
                    <h4 class="theme-banner__title">Blijf op de hoogte van alle workplace activiteiten:</h4>
                    <div class="theme-banner__description">Opleidingen, workshops, masterclasses en veel meer

                        <noscript class="ninja-forms-noscript-message">
                        Kennisgeving: Voor dit product is een JavaScript vereist.</noscript>
                        <div id="nf-form-2-cont" class="nf-form-cont form-subscribe" aria-live="polite" aria-labelledby="nf-form-title-2" aria-describedby="nf-form-errors-2" role="form">
                            <div class="nf-loading-spinner"></div>
                        </div>
                        <!-- TODO: Move to Template File. -->
                        <script>var formDisplay=1;var nfForms=nfForms||[];var form=[];form.id='2';form.settings={"objectType":"Form Setting","editActive":true,"title":"Nieuwsbrief aanmelding","show_title":0,"allow_public_link":0,"embed_form":"","clear_complete":1,"hide_complete":1,"default_label_pos":"hidden","wrapper_class":"form-subscribe","element_class":"","key":"","add_submit":0,"changeEmailErrorMsg":"Voer een geldig e-mailadres in!","changeDateErrorMsg":"Vul een geldige datum in!","confirmFieldErrorMsg":"Deze velden moeten overeenkomen","fieldNumberNumMinError":"Fout met minimumaantal","fieldNumberNumMaxError":"Fout met maximumaantal","fieldNumberIncrementBy":"Toenemen met ","formErrorsCorrectErrors":"Corrigeer de fouten voordat je dit formulier indient.","validateRequiredField":"Dit is een verplicht veld.","honeypotHoneypotError":"Honeypot-fout","fieldsMarkedRequired":"Velden die gemarkeerd zijn met een <span class=\"ninja-forms-req-symbol\">*<\/span> zijn verplichte velden.","currency":"","repeatable_fieldsets":"","unique_field_error":"A form with this value has already been submitted.","logged_in":false,"not_logged_in_msg":"","sub_limit_msg":"The form has reached its submission limit.","calculations":[],"formContentData":["jouw_e-mailadres_1614628437304","aanmelden_1613415466567"],"drawerDisabled":false,"ninjaForms":"Ninja Forms","fieldTextareaRTEInsertLink":"Koppeling invoegen","fieldTextareaRTEInsertMedia":"Media invoegen","fieldTextareaRTESelectAFile":"Selecteer een bestand","formHoneypot":"Als je een persoon bent die dit veld ziet, laat je het leeg.","fileUploadOldCodeFileUploadInProgress":"Bestand wordt ge\u00fcpload.","fileUploadOldCodeFileUpload":"BESTANDSUPLOAD","currencySymbol":"&#36;","thousands_sep":".","decimal_point":",","siteLocale":"nl_NL","dateFormat":"m\/d\/Y","startOfWeek":"1","of":"van","previousMonth":"Vorige maand","nextMonth":"Volgende maand","months":["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"],"monthsShort":["Jan","Feb","Mrt","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Dec"],"weekdays":["Zondag","Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag"],"weekdaysShort":["Zon","Maa","Din","Woe","Don","Vri","Zat"],"weekdaysMin":["Zo","Ma","Di","Wo","Do","Vr","Za"],"currency_symbol":"","beforeForm":"","beforeFields":"","afterFields":"","afterForm":""};form.fields=[{"objectType":"Field","objectDomain":"fields","editActive":false,"order":1,"idAttribute":"id","type":"email","label":"Jouw e-mailadres","key":"jouw_e-mailadres_1614628437304","label_pos":"hidden","required":1,"default":"","placeholder":"Jouw e-mailadres","container_class":"","element_class":"","admin_label":"","help_text":"","custom_name_attribute":"email","personally_identifiable":1,"value":"","drawerDisabled":false,"id":5,"beforeField":"","afterField":"","parentType":"email","element_templates":["email","input"],"old_classname":"","wrap_template":"wrap"},{"objectType":"Field","objectDomain":"fields","editActive":false,"order":2,"idAttribute":"id","label":"Aanmelden","type":"submit","processing_label":"Verwerken...","container_class":"","element_class":"","key":"aanmelden_1613415466567","drawerDisabled":false,"id":6,"beforeField":"","afterField":"","value":"","label_pos":"hidden","parentType":"textbox","element_templates":["submit","button","input"],"old_classname":"","wrap_template":"wrap-no-label"}];nfForms.push(form);</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="theme-section theme-cta">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h2>Basisopleiding workplace manager</h2>
                <div class="default-text">Zorg dat je binnen jouw organisatie in staat bent om het gesprek 
                    aan te gaan met de verschillende afdelingen betrokken bij de 
                    WorkPlace. Of dit nu vanuit de FM, HR, IT, bouw en vastgoed kant 
                    komt. Jij zult in staat zijn de taal te spreken en weloverwogen 
                    keuzes te maken.</div>
            </div>
            <div class="col-md-5">
                <div class="theme-cta__wrapper">
                    <div class="theme-cta__wrapper__items">
                        <h4>Jij als toekomstige workplace manager</h4>
                        <div class="theme-cta__wrapper__borderline"></div>
                            <div class="theme-cta__wrapper__items__item"><div class="theme-cta__wrapper__items__icon-checkmark"><i class="fa fa-check"></i></div><div class="theme-cta__wrapper__items__description">Het programma is samengesteld door experts</div></div>

                            <div class="theme-cta__wrapper__items__item"><div class="theme-cta__wrapper__items__icon-checkmark"><i class="fa fa-check"></i></div><div class="theme-cta__wrapper__items__description">Een combinatie van kennis en direct toepasbare vaardigheden</div></div>

                            <div class="theme-cta__wrapper__items__item"><div class="theme-cta__wrapper__items__icon-checkmark"><i class="fa fa-check"></i></div><div class="theme-cta__wrapper__items__description">Ontmoet peers, ontwikkel je netwerk en ga het gesprek aan met de experts</div></div>

                            <div class="theme-cta__wrapper__items__item"><div class="theme-cta__wrapper__items__icon-checkmark"><i class="fa fa-check"></i></div><div class="theme-cta__wrapper__items__description">Ontvang je bewijs als officieel workplace manager</div></div>

                            <div class="theme-cta__wrapper__items__item"><div class="theme-cta__wrapper__items__icon-checkmark"><i class="fa fa-check"></i></div><div class="theme-cta__wrapper__items__description">Word onderdeel van de workplace community</div></div>

                        </div>
                    <a href="/workshop/basisopleiding/">
                        <div class="theme-cta__button">
                            <h4>Ik ben geïnteresseerd!</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="theme-slider bg__primary mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <h2>Workshops</h2>
            </div>
        </div>
    </div>
</div>

<div class="theme-slider bg__lightblue">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <h2>Masterclasses</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="theme-slider-slick">


                    <a href="https://workplaceacademy.nl/workshop/de-4-themas-voor-een-duurzaam-en-gezond-kantoor/">
                        <div class="theme-slider__slide__wrapper"> <!-- slide item -->
                            <div class="theme-slider__slide__wrapper__head">
                                <img src="https://workplaceacademy.nl/wp-content/uploads/2022/02/masterclass-duurzaam-en-gezond-kantoor.001.jpeg">
                                <div class="theme-slider__slide__items">
                                    <div class="theme-slider__slide__items__icon"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/02/cropped-logoWorkPlaceAcademy_01.png"></div>
                                    <div class="theme-slider__slide__items__item"><strong>WorkPlace Academy</strong></div>
                                    <div class="theme-slider__slide__items__icon"><i class="fas fa-euro-sign"></i></div><div class="theme-slider__slide__items__item"><strong>595</strong></div>
                                    <div class="theme-slider__slide__items__icon"><i class="far fa-calendar-alt"></i></div><div class="theme-slider__slide__items__item"><strong>26 May</strong></div>
                                </div>
                            </div>
                            <div class="theme-slider__slide__wrapper__description">
                                <h4>De 4 thema’s voor een duurzaam en gezond kantoor</h4>
                                Een gezond en duurzaam kantoor wordt steeds belangrijker en data maakt hierin het onderscheid. Maar hoe maak je jouw kantoor nou gezond en duurzaam?                                <div class="theme-slider__caret"><i class="fa fa-caret-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div></div>

 

<!-- require footer -->
<?php get_footer(); ?>
