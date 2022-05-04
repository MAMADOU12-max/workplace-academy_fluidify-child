<!-- ----------------------------------------- Second block of cards ----------------------------------------- -->

<?php if (get_field('fdfd_card')) { ?>
<!-- <div class="theme-section alt">
    <div class="container">
        <div class="row">
            <?php foreach(get_field('fdfd_card') as $card) { ?>
            <div class="col-md-6 col-lg-3 p-1">
                <a href="<?php echo $card['fdfd_card_url']; ?>">
                    <div class="theme-card__wrapper">
                        <h4 class="theme-card__title"><?php echo $card['fdfd_card_title']; ?></h4>
                        <div class="theme-card__duration"><?php echo $card['fdfd_card_subtitle']; ?></div>
                        <div class="theme-card__description"><?php echo $card['fdfd_card_content']; ?></div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div> -->
<?php } ?>

<!-- click cdn css -->
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

<style>
    .text-size-cards {
  /* color: #023356; */
    font-size: 14px;
}
</style>
<head>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>


<div class="theme-section alt pt-0">
    <div class="container" id="cards_section">
    <!-- slider_slick -->
        <div class="row bg-white bg-info d-flex justify-content-center " >

            <div class="col-md-10">
                <div class="row" >

                    <div class="col-md-12 text-center  slider_slick px-0">

                        <div class="col-md-6 col-lg-3 p-1 items-slider-card ">
                            <a href="/workshop/opleiding/">
                                <div class="theme-card__wrapper">
                                    <h4 class="theme-card__title">Opleiding</h4>
                                    <div class="theme-card__duration">
                                        Workplace management in 6-dagdelen
                                    </div>
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class=" flex-grow-1 bd-highlight text-center mr-5">
                                            <span class="theme-card_star-icon"> &#9733;</span> 
                                            <span class="mb-1 note text-dark"> <strong>4,6 / 5</strong> </span> 
                                        </div>
                                        <div class="bd-highlight">
                                            <!-- <button type="button" class="btn btn-success px-3 deborded_button">Neem Contact</button> -->
                                            <button type="button" class="btn text-white px-md-2 px-3 deborded_button deborded_button_best-seller">
                                                <strong>Best-seller!    </strong>  
                                            </button>
                                        </div>²
                                    </div>
                                    <div class="theme-card__description">“Must have voor iedereen die werkt met de hedendaagse werkomgeving.”</div>

                                    <div class="theme-card__select-radio_content text-dark">
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Theorie_en_praktijk.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px; color: #023356">Theorie en praktijk </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Theorie_en_praktijk.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Meerdere experts </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Integrale_benadering.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Integrale benadering  </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Inspirerende_locaties.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Inspirerende locaties</span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Exclusieve_groep.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Exclusieve groep</span>
                                        </div>
                                        
                                    </div>

                                    <button type="button" class="btn background__secondary text-white w-100">
                                        <strong>Bekijk de opleiding</strong>  
                                    </button>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3 p-1 items-slider-card ">
                            <a href="/masterclasses/">
                                <div class="theme-card__wrapper">
                                    <h4 class="theme-card__title">Masterclasses</h4>
                                    <div class="theme-card__duration">Praktische handvatten door de experts uit de markt</div>
                                    <div class="text-center mb-3 bg-accent mr-5">
                                        <strong class="fw-bold"> 
                                            <span class="theme-card_star-icon" style="color: #316CB3;"> &#9733;</span> 
                                            <span class="note text-dark">4,6 / 5</span> 
                                        </strong>
                                    </div>
                                    <div class="theme-card__description">“Inhoudelijke kennis-sessies gegeven door de experts uit de markt”</div>

                                    <div class="theme-card__select-radio_content">
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Theorie_en_praktijk.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Experts uit de markt </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Theorie_en_praktijk.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Hedendaagse thema's </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Inclusief_lunch_en_koffie.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Inclusief lunch en koffie </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Theorie_en_praktijk.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Netwerken </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Exclusieve_groep.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Exclusieve groep </span>
                                        </div>
                                    </div>

                                    <button type="button" class="btn background__primary text-white w-100">
                                        <strong>Bekijk onze masterclasses</strong>  
                                    </button>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3 p-1 items-slider-card ">
                            <a href="/workshops/">
                                <div class="theme-card__wrapper">
                                    <h4 class="theme-card__title">Workshops</h4>
                                    <div class="theme-card__duration">Specifieke thema’s in kortere kennissessies</div>
                                    <div class="text-center mb-3 bg-accent mr-5">
                                        <strong class="fw-bold text-dark"> 
                                            <span class="theme-card_star-icon"> &#9733;</span> 
                                            <span class="mb-3 note text-card">4,6 / 5</span> 
                                        </strong>
                                    </div>
                                    <div class="theme-card__description">“Compacte sessies die je inzichten geven in de nieuwste ontwikkelingen”</div>

                                    <div class="theme-card__select-radio_content">
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Blijven_ontwikkelen.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Blijven ontwikkelen </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Gerichte_onderwerpen.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Gerichte onderwerpen </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Theorie_en_praktijk.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Netwerken </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Inspirerende_locaties.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Inspirerende locaties </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Exclusieve_groep.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Exclusieve groep </span>
                                        </div>
                                    </div>

                                    <button type="button" class="btn background__primary text-white w-100">
                                    <strong>Bekijk onze workshops</strong>  
                                    </button>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3 p-1 items-slider-card ">
                            <a href="/incompany/">
                                <div class="theme-card__wrapper">
                                    <h4 class="theme-card__title">Events</h4>
                                    <div class="theme-card__duration">Alle overige events mbt de werkomgeving</div>
                                    <div class="text-center mb-3 bg-accent mr-5">
                                        <strong class="fw-bold text-dark"> 
                                            <span class="theme-card_star-icon"> &#9733;</span> 
                                            <span class="mb-3 note">4,6 / 5</span> 
                                        </strong>
                                    </div>
                                    <div class="theme-card__description">“Van rondleiding langs 10 co-working spaces tot een beurs met 1500 man!”</div>

                                    <div class="theme-card__select-radio_content">
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/van_prive_sessies.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Van privé sessies </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Tot_beurs__Congres.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Tot beurs / congres </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Unieke_ervaring.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Unieke ervaringen </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Inspirerende_locaties.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Inspirerende locaties </span>
                                        </div>
                                        <div class="d-flex align-items-center py-1">
                                            <span class="mx-2" style="width: 23px" >
                                                <img class="im-fluid" style=""
                                                src="<?php  echo get_stylesheet_directory_uri() . '/assets/icons/Theorie_en_praktijk.png' ?>">  
                                            </span> 
                                            <span class="text-size-cards" style="margin-top: 5px;  color: #023356"> Netwerken </span>
                                        </div>
                                    </div>

                                    <button type="button" class="btn text-white w-100" style="background-color: #FFB700;">
                                         <strong>Bekijk onze events</strong>  
                                    </button>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            

        </div>
    </div>
</div>



<div class=" mb-5 mx-0 mx-md-2 section-custom">
    <div class="container pb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 p-3 p-md-1">
                <a>
                    <div class="theme-card__wrapper">

                        <div class="d-flex bd-highlight mb-3">
                            <div class=" flex-grow-1 bd-highlight">
                                <h4 class="theme-card__title text-start"
                            style="text-align:start">Incompany</h4>
                            </div>
                        </div>

                        <div class="theme-card__duration" style="text-align:start"
                        ><?php echo $card['fdfd_card_content']; ?></div>

                        <button type="button" class="btn background__secondary text-white w-100 mt-3">
                           <strong>Lees meer</strong>  
                        </button>

                    </div>
                </a>
            </div>

            <div class="col-md-5 p-3 p-md-1">
                <a href="<?php echo $card['fdfd_card_url']; ?>">
                    <div class="theme-card__wrapper">

                        <div class="d-flex bd-highlight mb-3">
                            <div class=" flex-grow-1 bd-highlight">
                                <h4 class="theme-card__title title-with_deborded-button" style="text-align:start">Persoonlijke begeleiding</h4>
                            </div>
                            <div class="bd-highlight">
                                <!-- <button type="button" class="btn btn-success px-3 deborded_button">Neem Contact</button> -->
                                <button type="button" class="btn text-white px-3 deborded_button deborded_button_gesprek">
                                    <strong>Vrijblijvend gesprek!</strong>  
                                </button>
                            </div>
                        </div>

                        <div class="theme-card__duration" style="text-align:start"
                        >Individuele begeleiding om er voor te zorgen dat jij een glansrijke carrière doorloopt</div>
                        
                        <button type="button" class="btn background__secondary text-white w-100 mt-3">
                           <strong>Lees meer</strong>  
                        </button>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- slick cdn Js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">

    $('.slider_slick').slick({
        centerMode: true,
        centerPadding: '0px',
        dots: false,
        slidesToShow: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 1410,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '20px',
                    arrows: false
                }
            },
            {
                breakpoint: 1240,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '20px',
                    arrows: false
                }
            },
            {
            breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2,
                    centerPadding: '10px',
                }
            },
            {
            breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1,
                    centerPadding: '15px',
                }
            }
        ]
    });
</script>
	