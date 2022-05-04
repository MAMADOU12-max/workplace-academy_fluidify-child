<style>
    a{
        color: white;
    }
    @media screen and (max-width: 768px) {
  /* footer responsive */
        #footer {
            padding: 50px 20px;
        } 
    }
    .strong-btn {
        font-weight: bolder;
        padding: 16.3px;
        background: #00A89D;
        border-radius: 5px;
    }
  
</style>

<!-- <footer id="footer" class="bg__grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <section class="footer-area footer-area-one">
                    <img src="http://localhost/workplaceacademy/wp-content/themes/fluidify-child/assets/img/logoWorkPlaceAcademy_01.png" class="image wp-image-309  attachment-150x56 size-150x56"
                     alt="" loading="lazy" style="max-width: 100%; height: auto;" sizes="(max-width: 150px) 100vw, 150px" width="150" height="56">
                </section>
                <section class="footer-area footer-area-one">			
                    <div class="textwidget">
                        <p class="pt-3">info@workplaceacademy.nl</p>
                    </div>
		        </section>            

            </div>
            

            <div class="col-md-3 text-white">
                <?php dynamic_sidebar( 'footer_area_two' ); ?>
            </div>

            <div class="col-md-3 text-white">
                <?php dynamic_sidebar( 'footer_area_three' ); ?>
            </div>

            <div class="col-md-3 text-white">
                <?php dynamic_sidebar( 'footer_area_four' ); ?>
            </div>
        </div>
    </div>
</footer> -->


<footer id="footer" class="bg__grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <section class="footer-area footer-area-one">
                    <img width="150" height="56" src="https://workplaceacademy.nl/wp-content/uploads/2021/02/cropped-logoWorkPlaceAcademy_01-300x112.png" class="image wp-image-309  attachment-150x56 size-150x56" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://workplaceacademy.nl/wp-content/uploads/2021/02/cropped-logoWorkPlaceAcademy_01-300x112.png 300w, https://workplaceacademy.nl/wp-content/uploads/2021/02/cropped-logoWorkPlaceAcademy_01.png 500w" sizes="(max-width: 150px) 100vw, 150px" />
                </section>
                <section class="footer-area footer-area-one">		
                    <div class="textwidget"> 
                        <p class="pt-4">info@workplaceacademy.nl</p>
                    </div>
		        </section>            
            </div>

            <div class="col-md-3 ">
                <section class="footer-area footer-area-two">
                    <h4>Opleidingsniveaus</h4>			
                    <div class="textwidget"><p>
                        <a href="/basisopleidingen/" class="text-white">Basisopleidingen</a><br />
                        <a href="/workshops/" class="text-white">Workshops</a><br />
                        <a href="/masterclasses/" class="text-white">Masterclasses</a></p>
                    </div>
		        </section>   
            </div>

            <div class="col-md-3">
                <section class="footer-area footer-area-three"><h4>Workplace Academy</h4>		
                	<div class="textwidget"><p>
                        <a href="/over-ons/" class="text-white">Over ons</a><br />
                        <a href="/incompany/" class="text-white">Incompany</a><br />
                        <a href="/agenda/" class="text-white">Agenda</a></p>
                    </div>
		        </section>           
            </div>

            <div class="col-md-3">
                <section class="footer-area footer-area-three">
                    <h4>Meld je aan voor de nieuwsbrief</h4>		
                    <div class="textwidget">
                        <?php echo do_shortcode('[ninja_form id=11]') ?>
                    </div>
		        </section>          
            </div>
            
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</div>

</body>
</html>