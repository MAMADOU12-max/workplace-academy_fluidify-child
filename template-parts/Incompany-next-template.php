<?php /** Template Name: Incompany Next template */ ?>
<?php get_header(); ?>
<style>
    html {
        margin-top:0 !important;
    }
    a{
        color: white;
    }
    @media screen and (max-width: 768px) {
        /* footer responsive */
        #footer {
            padding: 50px 20px;
        } 
    }
    @media screen and (max-width: 576px) {
        .logo {
            width: 170px !important;
        }
        .slide_row{
            height: 180px !important;
        }
    }
    
</style>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<body>
    

    <div class="theme-section <?php echo get_field('fdfd_bg_color'); ?>">
        <div class="container">
            
            <div class="row flex-column-reverse flex-md-row align-items-center text-center-define d-flex justify-content-center">
                <div class="col-md-6 px-0 text-md-start ">
                    <h2 class="hero-title text-center-define">De toekomstbestendige werkomgeving vereist een integrale en hybride aanpak</h2>
                    <div class="theme-hero__content default-text ">
                        <h5 class="description-title">
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                        </h5>
                    </div>
                    <a href="#" class="btn btn-default theme-button bg__secondary">
                        <strong>Neem contact op</strong> 
                    </a>
                </div>
                <div class="col-md-4 px-0 py-md-1 py-4 pt-md-1 pt-5 mt-4 text-end-define-lg text-center-define">                
                    <img class="im-fluid w-75" style=""
                    src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                </div>
            </div>

            <div class="row d-flex justify-content-center slide_row">
                <div class="col-md-10 my-5">

                    <div class="d-flex flex-row bd-highlight mb-3 justify-content-center slider_slick_logo">
                        <div class="mx-md-2 mx-0 logo bd-highlight" style="height: 100%">
                            <img class="img-fluid" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.002.jpeg' ?>" alt="">
                        </div>
                        <div class="mx-md-2 mx-0 logo bd-highlight">
                            <img class="img-fluid" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.003.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-2 mx-0 logo bd-highlight">
                            <img class="img-fluid" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.004.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-2 mx-0 logo bd-highlight">
                            <img class="" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.005.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-2 mx-0 logo bd-highlight">
                            <img class="img-fluid" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.007.jpeg' ?>" alt="">            
                        </div>
                        <div class="mx-md-2 mx-0 logo bd-highlight">
                            <img class="img-fluid" style="width: 120px"
                            src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Logos_website_WPA.006.jpeg' ?>" alt="">            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- <div class="theme-section pt-1">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row d-flex justify-content-center mt-1  align-items-center
                mr-md-0 mr-1 card_side">           
                <div class="col-md-5 m-2">
                    <h2 class="hero-title card_side">Toekomstbestendige werkomgeving vereist een</h2>
                    <div class="my-1 bg-accent">
                        <strong class="fw-bold"> 
                            <span class="theme-card_star-icon text-dark"> &#9733;</span> 
                            <span class="mb-1 text-dark">4,6 / 5</span>  &nbsp;&nbsp;&nbsp;
                            <span class=" theme-card_star-icon text-dark">&#8364;</span> 
                            <span class="mb-1 text-dark">700</span> 
                        </strong>
                    </div>
                    <div class="theme-hero__content default-text ">
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </div>
                    <a href="#" class="btn btn-default theme-button bg__secondary px-5"> <strong>Lees meer</strong> </a>
                </div>
                <div class="col-md-5 m-2">
                    <img class="im-fluid " style="width: 100%;max-height: 300px"
                    src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/austin-distel-Etxsv8WiFjM-unsplash-1536x1024.jpg' ?>">    
                </div>
            </div>

            <div class="row d-flex justify-content-center mt-5 pt-5  align-items-center">           
                <div class="col-md-5 m-2">
                    <img class="im-fluid " style="width: 100%;max-height: 300px"
                    src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/austin-distel-Etxsv8WiFjM-unsplash-1536x1024.jpg' ?>">    
                </div>

                <div class="col-md-5 m-2 card_side">
                    <h2 class="hero-title card_side">Toekomstbestendige werkomgeving vereist een</h2>
                    <div class="my-1 bg-accent">
                        <strong class="fw-bold"> 
                            <span class="theme-card_star-icon text-dark"> &#9733;</span> 
                            <span class="mb-1 text-dark">4,6 / 5</span>  &nbsp;&nbsp;&nbsp;
                            <span class=" theme-card_star-icon text-dark">&#8364;</span> 
                            <span class="mb-1 text-dark">700</span> 
                        </strong>
                    </div>
                    <div class="theme-hero__content default-text">
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </div>
                    <div>
                        <a href="#" class="btn btn-default theme-button bg__secondary px-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
                            <strong>Creêer</strong> </a>
                        <img class="img-fluid" style="width: 2.3em"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/logo_livelearn.png' ?>">
                        
                    </div>
                </div>
            </div>


        </div>
    </div> -->


    <div class="theme-section pt-1">
        <div class="container">

            <div class="row flex-column-reverse flex-md-row d-flex justify-content-center pb-5 align-items-center
                 mr-md-0  card_side">           
                <div class="col-md-5 mt-3">
                    <h2 class="hero-title card_side">Toekomstbestendige werkomgeving vereist een</h2>
                    <div class="my-1 bg-accent">
                        <strong class="fw-bold"> 
                            <span class="theme-card_star-icon text-dark"> &#9733;</span> 
                            <span class="mb-1 text-dark">4,6 / 5</span>  &nbsp;&nbsp;&nbsp;
                            <span class=" theme-card_star-icon text-dark">&#8364;</span> 
                            <span class="mb-1 text-dark">700</span> 
                        </strong>
                    </div>
                    <div class="theme-hero__content default-text ">
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </div>
                    <a href="#" class="btn btn-default theme-button bg__secondary px-5"> <strong>Lees meer</strong> </a>
                </div>
                <div class="col-md-5">
                    <img class="im-fluid " style="width: 100%;max-height: 350px"
                    src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/austin-distel-Etxsv8WiFjM-unsplash-1536x1024.jpg' ?>">    
                </div>
            </div>


            <div class="row d-flex justify-content-center my-5  align-items-center">           
                <div class="col-md-5">
                    <img class="im-fluid " style="width: 100%;max-height: 350px"
                    src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/austin-distel-Etxsv8WiFjM-unsplash-1536x1024.jpg' ?>">    
                </div>

                <div class="col-md-5 card_side mt-3">
                    <h2 class="hero-title card_side">Toekomstbestendige werkomgeving vereist een</h2>
                    <div class="my-1 bg-accent">
                        <strong class="fw-bold"> 
                            <span class="theme-card_star-icon text-dark"> &#9733;</span> 
                            <span class="mb-1 text-dark">4,6 / 5</span>  &nbsp;&nbsp;&nbsp;
                            <span class=" theme-card_star-icon text-dark">&#8364;</span> 
                            <span class="mb-1 text-dark">700</span> 
                        </strong>
                    </div>
                    <div class="theme-hero__content default-text">
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                        Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </div>
                    <div>
                        <a href="#" class="btn btn-default theme-button bg__secondary px-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
                            <strong>Creêer</strong> </a>
                        <img class="img-fluid" style="width: 2.3em"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/logo_livelearn.png' ?>">
                    </div>
                </div>
            </div>


            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close bg-danger btn text-white" data-bs-dismiss="modal" aria-label="Close">
                            <strong>X</strong> 
                        </button>
                    </div>
                    <div class="modal-body p-5">

                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form1Example1" class="form-control" />
                                <label class="form-label" for="form1Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example2" class="form-control" />
                                <label class="form-label" for="form1Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                                </div>
                                </div>

                                <div class="col">
                                <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-block text-white" style="background-color: #0B6EB9;">
                                 <strong> Sign in</strong> 
                            </button>
                        </form>

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div class="theme-hero bg__primary addMarginPadding-top">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
            
                <div class="col-md-4 text-md-start text-center">
                    <img class="im-fluid w-75" style=""
                    src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                </div>

                <div class="col-md-6">
                    <h2 class="hero-title text-white">De toekomstbestendige werkomgeving vereist een integrale en hybride aanpak</h2>
                    <div class="theme-hero__content default-text text-white">
                    Wij noemen dit workplace management. Leer van de experts op het gebied van facility management, human resource management, duurzaamheid, IT, mobiliteit, vastgoed, bouw en gezondheid.
                    </div>

                    <a href="#" class="btn btn-default theme-button bg__lightblue px-4 my-2">
                    <strong class="text-dark">Neem contact op</strong> </a>
                    <a href="#" class="btn btn-default theme-button bg__secondary px-4 my-2">
                        <strong >Neem contact op</strong> 
                    </a>
                
                </div>

            </div>

        </div>
    </div>

    <!-- require footer -->
    <?php get_footer(); ?>

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- slick cdn Js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
     $('.slider_slick_logo').slick({
        centerMode: true,
        centerPadding: '0px',
        dots: false,
        slidesToShow: 6,
        arrows: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '50px',
                }
            },
            {
                breakpoint: 1240,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: true,
                    centerPadding: '50px',
                }
            },
            {
            breakpoint: 768,
                settings: {
                    centerMode: true,
                    slidesToShow: 3,
                    centerPadding: '50px',
                }
            },
            {
            breakpoint: 480,
                settings: {
                    centerMode: true,
                    slidesToShow: 2,
                    centerPadding: '20px'
                }
            }
        ]
    });
</script>
	
