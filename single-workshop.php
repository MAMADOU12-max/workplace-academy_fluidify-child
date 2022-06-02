<style>
    .theme-card__wrapper:hover {
        opacity: inherit !important;
    }
</style>

<body class="page-template-default page page-id-73 wp-custom-logo">

    <!-- require header -->
    <?php get_header(); ?>

    <div class="main"> 

        <div class="wrapper">
            <div class="theme-hero bg__lightblue">
                <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center d-flex justify-content-center">
                    <div class="col-md-5 px-0">
                        <h2 class="hero-title"><?php the_title(); ?></h2>
                        <div class="my-3">
                            <p><?php the_excerpt(); ?></p>
                            <!-- <a href="/contact/" class="btn btn-default theme-button bg__secondary">
                                <strong>Neem direct contact met ons op</strong>  
                            </a> -->
                            <a href="#available_timeschedules" class="btn btn-default theme-button bg__primary">
                                <strong>Schrijf mij in</strong> 
                            </a>
                            <a href="/contact" class="btn btn-default theme-button bg__secondary">
                                <strong>Neem contact op</strong>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 text-end-define-lg text-center-define px-0">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid w-75" style="height:auto;">   
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
                    <div class="col-md-6 col-sm-6 col-11 px-0">
                        <div class="content__title__center"><?php the_content(); ?></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-11 h-50 py-md-0 py-4 text-center-define text-end-define-lg px-0 offset-md-1">

                        <div class="theme-card__wrapper">
                            <h4 class="theme-card__title">Interesse</h4>
                            <div class="theme-card__duration">Maar toch nog een vraag?</div>

                            <div class="theme-card__select-radio_content">
                                <form>
                                    
                                    <!--  start place form  php -->
                                    <div class="form-outline my-2">
                                        <input type="text" id="form2Example1" class="form-control border border-white rounded py-3 text-center" placeholder="Naam" />
                                    </div>

                                    <div class="form-outline my-2">
                                        <input type="email" id="form2Example2" class="form-control border border-white rounded py-3 text-center" placeholder="Email" />
                                    </div>

                                    <div class="form-outline my-2">
                                        <input type="email" id="form2Example2" class="form-control border border-white rounded py-3 text-center " placeholder="Telefoon" />
                                    </div>


                                    <button type="button" class="btn text-white w-100 my-2 bg__primary py-2 rounded rounded-4">
                                        <strong class="text-button m-0">Wij nemen contact met je op</strong>  
                                    </button>
                                    <!--  end place form  php -->


                                    <h3 class="line-text my-3"><span  class="line-center">Of</span></h3>


                                    <button type="button" class="btn text-white w-100 my-2 bg__secondary py-2">
                                        <strong class="text-button m-0">Bel direct</strong>  
                                    </button>
                                    <button type="button" class="btn text-white w-100 mt-2 py-2" style="background-color: #003358;">
                                        <strong class="text-button m-0">Stuur een mail</strong>  
                                    </button>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="theme-blurb bg__lightblue">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 text-center">
                        <h4>De expert(s)</h4>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="theme-blurb__slick__slider expert_slide">
                            <?php foreach(get_field('fdfd_experts') as $expert) { ?>
                            <div class="theme-blurb__slide-wrapper"> 
                                <div class="col-md-10">
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
        </div> -->


        <div class="theme-section bg__lightblue my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>De expert(s)</h4>
                    </div>
                </div>
                
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="theme-blurb__slick__slider expert_slide">
                            
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2022/02/Jan-Klein-Goldewijk.jpeg"></div>
                                    <div class="theme-blurb__title">Jan Klein Goldewijk</div>
                                    <div class="theme-blurb__description">Manager Facility Services &#038; Real Estate bij Essent</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://nl.linkedin.com/in/jankleingoldewijk" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2022/02/Roelof-van-der-Kooi.jpeg"></div>
                                    <div class="theme-blurb__title">Roelof van der Kooi</div>
                                    <div class="theme-blurb__description">Hoofd Facilitair Bedrijf bij het Van Gogh Museum</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://nl.linkedin.com/in/roelofvanderkooi" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2022/02/Marc-Kooij.jpeg"></div>
                                    <div class="theme-blurb__title">Marc Kooij</div>
                                    <div class="theme-blurb__description">Senior Business Development Manager SPIE</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://nl.linkedin.com/in/marckooijeindhoven" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/09/F.-Zilte-C__DSC1891.jpg"></div>
                                    <div class="theme-blurb__title">Babs van der Zon</div>
                                    <div class="theme-blurb__description">Co-Founder SUB</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://nl.linkedin.com/in/babs-mammen-van-der-zon-6593946" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/09/Marc-Jutte.png"></div>
                                    <div class="theme-blurb__title">Marc Jutte</div>
                                    <div class="theme-blurb__description">Eigenaar Instatera</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://nl.linkedin.com/in/marcjutte" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/06/Bas-van-doeleb.jpeg"></div>
                                    <div class="theme-blurb__title">Bas van Doelen</div>
                                    <div class="theme-blurb__description">Consultant Working Conditions and Healthy Work</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://www.linkedin.com/in/bas-van-der-doelen-1a0b606/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/06/Jack-Stuifbergen-Breedweer-foto-LinkedIn-300x300-1.jpeg"></div>
                                    <div class="theme-blurb__title">Jack Stuifbergen</div>
                                    <div class="theme-blurb__description">Directeur Breedweer</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://nl.linkedin.com/in/jackstuifbergen" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/06/jeroen-Zonneveld.jpeg"></div>
                                    <div class="theme-blurb__title">Jeroen Zonneveld</div>
                                    <div class="theme-blurb__description">Co-founder SUB</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://nl.linkedin.com/in/jeroen-zonneveld-a120791b" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/03/Michel-Pan.jpeg"></div>
                                    <div class="theme-blurb__title">Michel Pan</div>
                                    <div class="theme-blurb__description">Business strategy bij D&#038;B The Facility Group</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://www.linkedin.com/in/michel-pan/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-blurb__slide-wrapper"> <!-- slide item -->
                                <div class="col-md">
                                    <div class="theme-blurb__image"><img src="https://workplaceacademy.nl/wp-content/uploads/2021/03/Ilya-Devèrs.jpeg"></div>
                                    <div class="theme-blurb__title">Ilya Devèrs</div>
                                    <div class="theme-blurb__description">Oprichter Work &#038; People Analytics</div>
                                    <div class="theme-blurb__icons">
                                        <a href="https://www.linkedin.com/in/theilya/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>


        <div id="available_timeschedules" class="theme-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
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



    </div>
    
</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- slick cdn Js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
     $('.expert_slide').slick({
        // centerMode: true,
        // centerPadding: '0px',
        dots: false,
        slidesToShow: 5,
        autoplay: true,
        speed: 500,
        autoplaySpeed: 2000,
            prevArrow: '<i class="fas fa-angle-left left_arrow">',
            nextArrow: '<i class="fas fa-angle-right right_arrow">',
        responsive: [
            {
                breakpoint: 1410,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    // centerMode: true,
                    slidesToShow: 1,
                }
            }
        ]
    });
</script>