<?php
    $args = array(
        'post_type' => 'workshop',
    );
    $query = new WP_Query( $args );
    $calendar_arr = array();
    foreach($query->get_posts() as $calendar) {
       $category= get_the_category($calendar->ID)[0]->name;
       if (is_array(get_field('date_series', $calendar->ID)) || is_object(get_field('date_series', $calendar->ID)))        
        foreach(get_field('date_series', $calendar->ID) as $date_series) {
            //var_dump($date_series);
            if ($category=='Workshop')
            {
                $calendar_arr[date('Y-m-d', strtotime($date_series['date_series_start']))] = array(
                    'id' => $calendar->ID,
                    'post_type'=> $category ,
                    'start' => $date_series['date_series_start'],
                    'author' => get_the_author_meta('display_name', get_post_field('post_author', $calendar->ID)),
                    'author_id' => get_post_field('post_author', $calendar->ID),
                    'price' => $date_series['price'],
                    'post_title'=> get_post_field('post_title', $calendar->ID),
                    'image'=> get_the_post_thumbnail_url($calendar->ID),

                );
            }
        }
    }
    ksort($calendar_arr);
     //var_dump($calendar_arr);

?>

<div class="wrapper">
    <div class="theme-hero bg__lightblue">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row align-items-center d-flex justify-content-center">
            <div class="col-md-5 px-0">
                <h2 class="hero-title">Vaardigheden bijspijkeren door  middel van een Workshop </h2>
                <div class="my-3">
                    <p>
                        Aan de hand van relevante en actuele thema&#8217;s ontwikkelen wij hoogwaardige leermodules waarmee 
                        je met een beperkte tijdsinspanning op de hoogte bent van alle kennis en vaardigheden omtrent het desbetreffende thema.
                        Kijk hieronder naar onze huidige workshops. </div>
                    </p>
                    <a href="/contact/" class="btn btn-default theme-button bg__secondary">
                        <strong>Neem direct contact met ons op</strong>  
                    </a>
                </div>
            <div class="col-md-5 text-end-define-lg text-center-define px-0">
                <img src="https://workplaceacademy.nl/wp-content/uploads/2021/02/basisopleiding-workplace-manager.png" class="img-fluid w-75" style="height:auto;">
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="theme-hero addPadding-top">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-sm-10 px-0">
                <h2 class="hero-title">Workshops </h2>
                <div class="my-3">
                    <p>
                        Aan de hand van relevante en actuele thema&#8217;s ontwikkelen wij hoogwaardige leermodules waarmee 
                        je met een beperkte tijdsinspanning op de hoogte bent van alle kennis en vaardigheden omtrent het desbetreffende thema.
                        Kijk hieronder naar onze huidige workshops. <
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ---------------------------------------------- dynamic worshop --------------------------------------------- -->
<div class="wrapper">
    <div class="theme-hero addPadding-top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-md-start justify-content-center">
                        <?php
                            foreach ($calendar_arr as $key => $value) {
                        ?>
                        <div class="col-md-4 px-0">
                            <a  href="<?php esc_url(the_permalink($value['id'])); ?>">
                                <div class="theme-slider__slide__wrapper"> <!-- slide item -->
                                    <div class="theme-slider__slide__wrapper__head">
                                        <img src=<?php echo $value['image'] ;?>>
                                      
                                    </div>
                                    <div class="theme-slider__slide__wrapper__description">

                                        <div class="">
                                            <div class="theme-slider__slide__wrapper__head bg-white" style='height: 50px'>
                                                <div class="theme-slider__slide__items text-dark pl-0">
                                                    <div class="theme-slider__slide__items__icon">
                                                        <img alt='' src='https://secure.gravatar.com/avatar/ebe4d299984d515ee832ac64cb16396d?s=96&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/ebe4d299984d515ee832ac64cb16396d?s=192&#038;d=mm&#038;r=g 2x' class='avatar avatar-96 photo' height='96' width='96' loading='lazy'/></div><div class="theme-slider__slide__items__item"><strong class="text-dark">WorkPlace Academy</strong></div>
                                                    <div class="theme-slider__slide__items__icon">
                                                        <i class="fas fa-euro-sign"></i></div>
                                                        <div class="theme-slider__slide__items__item text-dark">
                                                        <strong class="text-dark">
                                                            <?php echo $value['price']; ?></strong></div>
                                                    <!-- <div class="theme-slider__slide__items__icon"><i class="far fa-calendar-alt"></i></div><div class="theme-slider__slide__items__item"><strong>26 May</strong></div> -->
                                                
                                                    <div class="theme-slider__slide__items__icon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                    <div class="theme-slider__slide__items__item text-dark m-0" style="width: 35%;">
                                                        <strong>
                                                                <?php
                                                                    echo date("d", strtotime($value['start']))." ";
                                                                    $dateObj   = DateTime::createFromFormat('!m', date("m", strtotime($value['start'])));
                                                                    $monthName = $dateObj->format('F'); 
                                                                    echo $monthName;
                                                                ?>
                                                        </strong>
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>

                                        <h4><?php echo $value['post_title']; ?></h4>
                                        <?php echo get_the_excerpt($value['id']);?>                       
                                        <div class="theme-slider__caret"><i class="fa fa-caret-right"></i></div>                        <div class="theme-slider__caret"><i class="fa fa-caret-right"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -------------------------------------------- dynamic course workshop --------------------------------------- -->


<div class="theme-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-11 px-0">
                <div class="theme-banner__wrapper">
                    <h4 class="theme-banner__title">Blijf op de hoogte van alle WorkPlace Activiteiten:</h4>
                    <div class="theme-banner__description">Opleidingen, workshops, masterclasses en veel meer 

                        <noscript class="ninja-forms-noscript-message">
                            Kennisgeving: Voor dit product is een JavaScript vereist.</noscript><div id="nf-form-2-cont" class="nf-form-cont form-subscribe" aria-live="polite" aria-labelledby="nf-form-title-2" aria-describedby="nf-form-errors-2" role="form">

                            <div class="nf-loading-spinner"></div>

                        </div>
                        <script>var formDisplay=1;var nfForms=nfForms||[];var form=[];form.id='2';form.settings={"objectType":"Form Setting","editActive":true,"title":"Nieuwsbrief aanmelding","show_title":0,"allow_public_link":0,"embed_form":"","clear_complete":1,"hide_complete":1,"default_label_pos":"hidden","wrapper_class":"form-subscribe","element_class":"","key":"","add_submit":0,"changeEmailErrorMsg":"Voer een geldig e-mailadres in!","changeDateErrorMsg":"Vul een geldige datum in!","confirmFieldErrorMsg":"Deze velden moeten overeenkomen","fieldNumberNumMinError":"Fout met minimumaantal","fieldNumberNumMaxError":"Fout met maximumaantal","fieldNumberIncrementBy":"Toenemen met ","formErrorsCorrectErrors":"Corrigeer de fouten voordat je dit formulier indient.","validateRequiredField":"Dit is een verplicht veld.","honeypotHoneypotError":"Honeypot-fout","fieldsMarkedRequired":"Velden die gemarkeerd zijn met een <span class=\"ninja-forms-req-symbol\">*<\/span> zijn verplichte velden.","currency":"","repeatable_fieldsets":"","unique_field_error":"A form with this value has already been submitted.","logged_in":false,"not_logged_in_msg":"","sub_limit_msg":"The form has reached its submission limit.","calculations":[],"formContentData":["jouw_e-mailadres_1614628437304","aanmelden_1613415466567"],"drawerDisabled":false,"ninjaForms":"Ninja Forms","fieldTextareaRTEInsertLink":"Koppeling invoegen","fieldTextareaRTEInsertMedia":"Media invoegen","fieldTextareaRTESelectAFile":"Selecteer een bestand","formHoneypot":"Als je een persoon bent die dit veld ziet, laat je het leeg.","fileUploadOldCodeFileUploadInProgress":"Bestand wordt ge\u00fcpload.","fileUploadOldCodeFileUpload":"BESTANDSUPLOAD","currencySymbol":"&#36;","thousands_sep":".","decimal_point":",","siteLocale":"nl_NL","dateFormat":"m\/d\/Y","startOfWeek":"1","of":"van","previousMonth":"Vorige maand","nextMonth":"Volgende maand","months":["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"],"monthsShort":["Jan","Feb","Mrt","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Dec"],"weekdays":["Zondag","Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag"],"weekdaysShort":["Zon","Maa","Din","Woe","Don","Vri","Zat"],"weekdaysMin":["Zo","Ma","Di","Wo","Do","Vr","Za"],"currency_symbol":"","beforeForm":"","beforeFields":"","afterFields":"","afterForm":""};form.fields=[{"objectType":"Field","objectDomain":"fields","editActive":false,"order":1,"idAttribute":"id","type":"email","label":"Jouw e-mailadres","key":"jouw_e-mailadres_1614628437304","label_pos":"hidden","required":1,"default":"","placeholder":"Jouw e-mailadres","container_class":"","element_class":"","admin_label":"","help_text":"","custom_name_attribute":"email","personally_identifiable":1,"value":"","drawerDisabled":false,"id":5,"beforeField":"","afterField":"","parentType":"email","element_templates":["email","input"],"old_classname":"","wrap_template":"wrap"},{"objectType":"Field","objectDomain":"fields","editActive":false,"order":2,"idAttribute":"id","label":"Aanmelden","type":"submit","processing_label":"Verwerken...","container_class":"","element_class":"","key":"aanmelden_1613415466567","drawerDisabled":false,"id":6,"beforeField":"","afterField":"","value":"","label_pos":"hidden","parentType":"textbox","element_templates":["submit","button","input"],"old_classname":"","wrap_template":"wrap-no-label"}];nfForms.push(form);</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

