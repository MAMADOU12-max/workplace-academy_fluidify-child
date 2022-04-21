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
    /* @media screen and (max-width: 576px) {
        .theme-button__secondary {
            padding: 5px 10px;
        }
    }
     */
  
</style>

<footer id="footer" class="bg__grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <section class="footer-area footer-area-one">
                    <img src="http://localhost/workplaceacademy/wp-content/themes/fluidify-child/assets/img/logoWorkPlaceAcademy_01.png" class="image wp-image-309  attachment-150x56 size-150x56"
                     alt="" loading="lazy" style="max-width: 100%; height: auto;" sizes="(max-width: 150px) 100vw, 150px" width="150" height="56">
                </section>
                <section class="footer-area footer-area-one">			
                    <div class="textwidget">
                        <!-- <p>Workplace Academy</p> -->
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
</footer>

<?php wp_footer(); ?>
</div>

</body>
</html>