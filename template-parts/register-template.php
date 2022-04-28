<?php /** Template Name: Register template */ ?>
<?php get_header(); ?>

<style>
    #register {
        display: none;
    }
</style>

<div class="main">

    <!-- slick cdn Js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <div class="wrapper">
        <div class="theme-section bg__lightblue">
            <div class="container">
                <div class="row py-md-0 py-5 flex-column-reverse flex-md-row align-items-center">

                    <!-- ----------------------------------- SIGN UP ---------------------------------------- -->
                    <div class="col-md-4 mx-auto" id="signUP">
                        <!-- old form -->
                        <!-- <div class="theme-form__wrapper">
                            <noscript class="ninja-forms-noscript-message">
                                Kennisgeving: Voor dit product is een JavaScript vereist.
                            </noscript>
                            <div id="nf-form-4-cont" class="nf-form-cont" aria-live="polite" aria-labelledby="nf-form-title-4" aria-describedby="nf-form-errors-4" role="form">
                                <div class="nf-loading-spinner"></div>
                            </div>
                            <script>var formDisplay=1;var nfForms=nfForms||[];var form=[];form.id='4';form.settings={"objectType":"Form Setting","editActive":true,"title":"Contactformulier","show_title":0,"allow_public_link":0,"embed_form":"","clear_complete":1,"hide_complete":1,"default_label_pos":"hidden","wrapper_class":"","element_class":"","key":"","add_submit":0,"changeEmailErrorMsg":"Voer een geldig e-mailadres in!","changeDateErrorMsg":"Vul een geldige datum in!","confirmFieldErrorMsg":"Deze velden moeten overeenkomen","fieldNumberNumMinError":"Fout met minimumaantal","fieldNumberNumMaxError":"Fout met maximumaantal","fieldNumberIncrementBy":"Toenemen met ","formErrorsCorrectErrors":"Corrigeer de fouten voordat je dit formulier indient.","validateRequiredField":"Dit is een verplicht veld.","honeypotHoneypotError":"Honeypot-fout","fieldsMarkedRequired":"Velden die gemarkeerd zijn met een <span class=\"ninja-forms-req-symbol\">*<\/span> zijn verplichte velden.","currency":"","repeatable_fieldsets":"","unique_field_error":"A form with this value has already been submitted.","logged_in":false,"not_logged_in_msg":"","sub_limit_msg":"The form has reached its submission limit.","calculations":[],"formContentData":["naam_1613478326838","e-mailadres_1613478321431","telefoonnummer_1613478311850","bedrijf_1613478294704","verstuur_nu_1613478374380"],"drawerDisabled":false,"ninjaForms":"Ninja Forms","fieldTextareaRTEInsertLink":"Koppeling invoegen","fieldTextareaRTEInsertMedia":"Media invoegen","fieldTextareaRTESelectAFile":"Selecteer een bestand","formHoneypot":"Als je een persoon bent die dit veld ziet, laat je het leeg.","fileUploadOldCodeFileUploadInProgress":"Bestand wordt ge\u00fcpload.","fileUploadOldCodeFileUpload":"BESTANDSUPLOAD","currencySymbol":"&#36;","thousands_sep":".","decimal_point":",","siteLocale":"nl_NL","dateFormat":"m\/d\/Y","startOfWeek":"1","of":"van","previousMonth":"Vorige maand","nextMonth":"Volgende maand","months":["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"],"monthsShort":["Jan","Feb","Mrt","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Dec"],"weekdays":["Zondag","Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag"],"weekdaysShort":["Zon","Maa","Din","Woe","Don","Vri","Zat"],"weekdaysMin":["Zo","Ma","Di","Wo","Do","Vr","Za"],"currency_symbol":"","beforeForm":"","beforeFields":"","afterFields":"","afterForm":""};form.fields=[{"objectType":"Field","objectDomain":"fields","editActive":false,"order":1,"idAttribute":"id","label":"Naam","type":"firstname","key":"naam_1613478326838","label_pos":"hidden","required":1,"default":"","placeholder":"Naam","container_class":"","element_class":"","admin_label":"","help_text":"","custom_name_attribute":"fname","personally_identifiable":1,"value":"","drawerDisabled":false,"id":13,"beforeField":"","afterField":"","parentType":"firstname","element_templates":["firstname","input"],"old_classname":"","wrap_template":"wrap"},{"objectType":"Field","objectDomain":"fields","editActive":false,"order":2,"idAttribute":"id","label":"E-mailadres","type":"email","key":"e-mailadres_1613478321431","label_pos":"hidden","required":false,"default":"","placeholder":"E-mailadres","container_class":"","element_class":"","admin_label":"","help_text":"","custom_name_attribute":"email","personally_identifiable":1,"value":"","id":14,"beforeField":"","afterField":"","parentType":"email","element_templates":["email","input"],"old_classname":"","wrap_template":"wrap"},{"objectType":"Field","objectDomain":"fields","editActive":false,"order":3,"idAttribute":"id","label":"Telefoonnummer","type":"phone","key":"telefoonnummer_1613478311850","label_pos":"hidden","required":1,"default":"","placeholder":"Telefoonnummer","container_class":"","element_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":false,"admin_label":"","help_text":"","mask":"","custom_mask":"","custom_name_attribute":"phone","personally_identifiable":1,"value":"","id":15,"beforeField":"","afterField":"","parentType":"textbox","element_templates":["tel","textbox","input"],"old_classname":"","wrap_template":"wrap"},{"objectType":"Field","objectDomain":"fields","editActive":false,"order":4,"idAttribute":"id","label":"Bedrijf","type":"textbox","key":"bedrijf_1613478294704","label_pos":"hidden","required":1,"default":"","placeholder":"Bedrijf","container_class":"","element_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":false,"admin_label":"","help_text":"","mask":"","custom_mask":"","custom_name_attribute":"","personally_identifiable":"","value":"","drawerDisabled":false,"id":16,"beforeField":"","afterField":"","parentType":"textbox","element_templates":["textbox","input"],"old_classname":"","wrap_template":"wrap"},{"objectType":"Field","objectDomain":"fields","editActive":false,"order":5,"idAttribute":"id","label":"Verstuur nu","type":"submit","processing_label":"Aan het versturen...","container_class":"","element_class":"","key":"verstuur_nu_1613478374380","drawerDisabled":false,"id":17,"beforeField":"","afterField":"","value":"","label_pos":"hidden","parentType":"textbox","element_templates":["submit","button","input"],"old_classname":"","wrap_template":"wrap-no-label"}];nfForms.push(form);</script>

                        </div> -->

                        <h3 class="text-center py-4">Signup form</h3>
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" />
                                <label class="form-label" for="form2Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example2" class="form-control" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                                        <label class="form-check-label" for="form2Example34"> Remember me </label>
                                    </div>
                                    </div>

                                    <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!"  class="text-danger">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" style="background: #0B6EB9" class="btn btn-block mb-4 text-white">
                                 <strong>Sign in</strong>
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="#!" style="color: #0B6EB9" onclick="myFunction()">Register</a></p>
                                <p >or sign up with:</p>
                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- ------------------------------------------ Register ------------------------------------ -->
                    <div class="col-md-4 mx-auto" id="register">

                        <h3 class="text-center py-4">Register</h3>
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" />
                                <label class="form-label" for="form2Example1">Firstname</label>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" />
                                <label class="form-label" for="form2Example1">Lastname</label>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" />
                                <label class="form-label" for="form2Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example2" class="form-control" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                                        <label class="form-check-label" for="form2Example34"> Remember me </label>
                                    </div>
                                </div>

                            </div>

                            <!-- Submit button -->
                            <button type="submit" style="background: #0B6EB9" class="btn btn-block mb-4 text-white">
                                 <strong>Register</strong>
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Already a member? <a href="#!" style="color: #0B6EB9" onclick="myFunction()">Sign in</a></p>
                                <p >or sign up with:</p>
                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" style="background: #0B6EB9" class="btn btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-5 mt-md-1 mt-4">
                        <div class="theme-form__second-col">
                            <div class="text-default">
                                <h2>Wij gaan graag het gesprek met je aan</h2>
                                <p>Twijfel niet en neem contact met ons op! Wij zullen samen kijken wat de beste opleidingsmogelijkheden voor jouw organisatie zijn en zijn in staat om een maatwerk programma op te stellen.</p>
                                <p>????  Liever iemand spreken? <span style="text-decoration: underline;">+31621610903</span></p>
                            </div>
                        </div>
                  </div>
            </div>
        </div>
    </div>
</div>


<!-- require footer -->
<?php get_footer(); ?>



<script>
    function myFunction() {
        var signUp = document.getElementById("signUP");
        var register = document.getElementById("register");

        if (signUp.style.display === "none") {
            signUp.style.display = "block";
            register.style.display = "none"
        } else {
            signUp.style.display = "none";
            register.style.display = "block"
        }
    } 
</script>