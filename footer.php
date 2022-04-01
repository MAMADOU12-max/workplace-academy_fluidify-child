<style>
    a{
        color: white;
    }
    @media screen and (max-width: 768px) {
  /* footer responsive */
  #footer {
    padding: 50px 20px;
  } }
</style>

<footer id="footer" class="bg__grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php dynamic_sidebar( 'footer_area_one' ); ?>
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