<style>

.oneBlockAgenda {
    display: flex;
}
.blockAgenda {
    display: block;
}
.blockText8 {
    margin-left: auto;
    margin-right: auto;
    max-width: 491px;
    text-align: center;
    margin-bottom: 20px;
}
.titleAgenda {
    font-size: 30px;
    color: #023356;
    font-weight: bold;
    margin-bottom: 1px;
}
.sousBlockFrontAgenda {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.col-md-12 .blockCardFront {
    width: 100%;
}
.blockCardFront {
    width: 49%;
    background: white;
    box-shadow: 2px 1px 13px rgb(0 0 0 / 10%);
    padding: 10px 15px;
    display: flex;
    margin-top: 15px;
}
.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .deToekomstText {
    font-size: 13px;
}

.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .detaiElementAgenda .janBlock .textJan {
    font-size: 12px;
}
.blockCardFrontModife {
    width: 100%;
}
.workshopBlock {
    width: 125px;
    margin-right: 20px;
    height: 100px;
    position: relative;
}
.workshopBlock img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10%;
}
.containWorkshopAgenda{
    position: absolute;
    top: 0;
}
.workshopText {
    font-size: 13px;
    background: white;
    width: fit-content;
    padding: 3px 10px;
    margin-top: 15px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
    margin-bottom: 8px;
}
.blockDateFront {
    background: #023356;
    color: white;
    width: 50px;
    opacity: 11;
    position: relative;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
    text-align: center;
    padding: 5px 0;
}
.moiText {
    font-size: 11px;
    margin-bottom: 0;
    font-family: "Ubuntu";
    font-weight:500;
}
.dateText1 {
    color: #000000;
    font-size: 22px;
    margin-bottom: 8px;
    font-weight: bold;
}
.dateText {
    margin-bottom: 0px;
    font-size: 20px;
    margin-top: -6px;
    font-family: "Ubuntu";
    font-weight:500;
}
.deToekomstBlock{
    width: 75%;
}
.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .deToekomstText {
    font-size: 13px;
}

.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .detaiElementAgenda .janBlock .textJan {
    font-size: 12px;
}
.platformText {
    font-size: 13px;
    color: #707070;
    margin-bottom: 6px;
}
.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .detaiElementAgenda .janBlock .textJan {
    font-size: 12px;
}
.searchContentBlock .detaiElementAgendaModife {
    width: 100%;
    justify-content: space-between;
}
.detaiElementAgenda {
    display: flex;
    width: 100%;
    justify-content: space-between;
}
.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .detaiElementAgenda .janBlock .textJan {
    font-size: 12px;
}
.detaiElementAgendaModife {
    width: 53%;
    justify-content: space-between;
}

.detaiElementAgendaModife2 {
    width: 100%;
    justify-content: space-between;
}
.janBlock {
    display: flex;
}   
.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .detaiElementAgenda .janBlock .textJan {
    font-size: 12px;
}
.colorFront {
    width: 15px;
    height: 15px;
    background: #707070;
    border-radius: 100%;
    margin-top: 1px;
}
.textJan {
    font-size: 13px;
    margin-bottom: 2px;
    color: #707070;
    margin-left: 4px;
}
.sousBlockFrontProdcut .blockCardFront .deToekomstBlock .detaiElementAgenda .janBlock .textJan {
    font-size: 12px;
}
.euroBlock {
    display: flex;
}
.euroImg {
    height: 13px;
    margin-top: 3px;
}
.zwoleBlock {
    display: flex;
}
.ss {
    height: 15px;
    margin-top: 2px;
}
.facilityBlock {
    display: flex;
}
.faciltyImg {
    height: 14px;
    margin-top: 3px;
}

.img_card {
    width: 150px;
}

@media all and (min-width: 300px) and (max-width: 767px) {
    .blockAgenda {
        display: block;
    }
    .blockAgenda .filterBlock {
        background: #023356;
        text-align: center;
        padding: 8px 10px;
        margin: 20px 0px !important;
        border-radius: 11px;
        margin-top: 5px !important;
    }
    .blockAgenda {
        padding: 0 20px;
        margin-bottom: 30px;
    }
    .blockFrontAgenda {
        /* width: 100%; */
        margin-left: -18px;
        margin-right: 0px;
    }
    .sousBlockFrontAgenda {
        display: block;
        justify-content: unset;
        flex-wrap: unset;
        margin-left: 20px;
    }
    .blockCardFront {
        width: 100%;
        background: white;
        box-shadow: 2px 1px 13px rgb(0 0 0 / 10%);
        padding: 10px 15px;
        display: flex;
        margin-top: 15px;
    }
    .workshopText {
        font-size: 12px;
    }
    .deToekomstBlock {
        width: 72%;
    }
    .deToekomstText {
        font-size: 12px;
    }
    .searchContentBlock .deToekomstText {
        font-size: 16px;
    }
    .platformText {
        font-size: 11px;
    }
    .detaiElementAgenda {
        display: none;
    }

}

</style>

<!-- --------------------------------------- Voor Wie Section & Cards ------------------------------------------ -->

<div class="theme-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto col-12">
                <strong class="hero-title"> Voor wie maken wij onze kennis-producten?</strong>
                <div class="default-text pt-3" >
                    <h5>Wij maken onze kennisproducten altijd voor een specifieke doelgroep. Dit kan op dire
                    ctie, management of uitvoerend niveau zijn.</h5>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="theme-section pt-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
               <a>
                    <div class="theme-card__wrapper text-center py-4">
                        <img class="img-fluid" style="max-width: 150px;"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                    </div>
                </a> 
            </div>

            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                <a>
                    <div class="theme-card__wrapper text-center py-4">
                        <img class="img-fluid" style="max-width: 150px;"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                    </div>
                </a> 
            </div>
            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                <a>
                    <div class="theme-card__wrapper text-center py-4">
                        <img class="img-fluid" style="max-width: 150px;"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                    </div>
                </a> 
            </div>
            <div class="col-md-6 col-lg-3 p-1" style="height: 230px;">
                <a>
                    <div class="theme-card__wrapper text-center py-4">
                        <img class="img-fluid" style="max-width: 150px;"
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">    
                        <h4 class="theme-card__title mt-2 mb-0">Opleiding</h4>
                    </div>
                </a> 
            </div>

        </div>
    </div>
</div>



<!-- ---------------------------------------------- start agenda ---------------------------------------------- -->

<div class="blockAgenda mt-5">
    <!-- <div class="blockText8">
        <p class="titleAgenda">Een agenda vol leer-mogelijkheden</p>
        <p class="dePaterneText">Groei op zakelijk gebied of ontdek nieuwe talenten.</p>
    </div> -->

    <div class="blockFrontAgenda">
        <div class="container px-0">

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-11 mb-4">
                    <div class="hero-title text-center">Onze agenda met alle  Activiteiten voor jou </div>  
                </div>
            </div>

            <div class="sousBlockFrontAgenda">             
                <a href="<?php echo get_permalink($course->ID) ?>" class="blockCardFront rounded rounded-3" style="color:#43454D">
                    <div class="workshopBlock">
                        <img class="" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/placeholder.png" alt="">
                        <div class="containWorkshopAgenda">
                            <p class="workshopText">workshop text</p>
                            <div class="blockDateFront">
                                <p class="moiText">day</p>
                                <p class="dateText" style="font-size: 11px">month</p>
                            </div>
                        </div>
                    </div>
                    <div class="deToekomstBlock">
                        <p class="deToekomstText text-uppercase"> <strong>title post</strong></p>
                        <p class="platformText">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est perferendis, velit eos similique optio neque minus deleniti sapiente ea beatae!
                        </p>
                        <div class="detaiElementAgenda">
                            <div class="janBlock">
                                <div class="colorFront">
                                    <img src="<?php echo $company_logo; ?>" width="15" alt="">
                                </div>
                                <p class="textJan">title company</p>
                            </div>
                            <div class="euroBlock">
                                <img class="euroImg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/euro.png" alt="">
                                <p class="textJan">price</p>
                            </div>
                            <div class="zwoleBlock">
                                <img class="ss" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/ss.png" alt="">
                                <p class="textJan">localisation</p>
                            </div>
                            <div class="facilityBlock">
                                <img class="faciltyImg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/map-search.png" alt="">
                                <p class="textJan">test Jan</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="<?php echo get_permalink($course->ID) ?>" class="blockCardFront" style="color:#43454D">
                    <div class="workshopBlock">
                        <img class="" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/placeholder.png" alt="">
                        <div class="containWorkshopAgenda">
                            <p class="workshopText">workshop text</p>
                            <div class="blockDateFront">
                                <p class="moiText">day</p>
                                <p class="dateText" style="font-size: 11px">month</p>
                            </div>
                        </div>
                    </div>
                    <div class="deToekomstBlock">
                    <p class="deToekomstText text-uppercase"> <strong>title article 2</strong></p>
                        <p class="platformText">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est perferendis, velit eos similique optio neque minus deleniti sapiente ea beatae!
                        </p>
                        <div class="detaiElementAgenda">
                            <div class="janBlock">
                                <div class="colorFront">
                                    <img src="<?php echo $company_logo; ?>" width="15" alt="">
                                </div>
                                <p class="textJan">title company</p>
                            </div>
                            <div class="euroBlock">
                                <img class="euroImg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/euro.png" alt="">
                                <p class="textJan">price</p>
                            </div>
                            <div class="zwoleBlock">
                                <img class="ss" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/ss.png" alt="">
                                <p class="textJan">localisation</p>
                            </div>
                            <div class="facilityBlock">
                                <img class="faciltyImg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/map-search.png" alt="">
                                <p class="textJan">test Jan</p>
                            </div>
                        </div>
                    </div>
                </a>
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


<div class="theme-section pt-0 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto col-12">
                <!-- <h2> Lorem ipsum dolor sit amet consectetur adipisicing. </h2> -->
                <div class="hero-title text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </div> 
            </div>
        </div>
    </div>
</div>

<div class="theme-section pt-1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 p-4 card_side" href="">
                <div class="row d-flex bd-highlight background__lightblue rounded rounded-5 theme-card__wrapper">
                    <div class="col-md-3">
                        <img class="m-2 img_card" 
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">
                    </div>
                    <div class="col-md-9 col-12 px-md-2 px-0">
                        <h5 class=""> <strong>Title of the Opleiding</strong></h5> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis error nulla molestiae nemo? Dignissimos incidunt nam ex dolore qui?</p>  
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-4 card_side" href="">
                <div class="row d-flex bd-highlight background__lightblue rounded rounded-5 theme-card__wrapper">
                    <div class="col-md-3">
                        <img class="img_card m-2" style=""
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">
                    </div>
                    <div class="col-md-9 col-12 px-md-2 px-0">
                        <h5 class=""> <strong>Title of the Opleiding</strong></h5> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis error nulla molestiae nemo? Dignissimos incidunt nam ex dolore qui?</p>                 
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-6 p-1" href="">
                <div class="d-flex bd-highlight background__lightblue rounded rounded-5 theme-card__wrapper">
                    <div class="px-3 py-2 bd-highlight d-flex align-items-center">
                        <img class="im-fluid m-2" width="200px" style=""
                        src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/Afbeelding-opleiding-workplace-management.001.png' ?>">                          
                    </div>
                    <div class="p-2 bd-highlight flex-grow-1 ">
                        <h5 class=""> <strong>Title of the Opleiding</strong></h5> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis error nulla molestiae nemo? Dignissimos incidunt nam ex dolore qui?</p>
                    </div>
                </div>
            </div> -->

        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center my-md-4 mb-5">
                <button type="button" class="btn background__secondary text-white mt-3 px-5">
                    <strong>Neem contact met ons op</strong>  
                </button>
            </div>
        </div>

    </div>
</div>