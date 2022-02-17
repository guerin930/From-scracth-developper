    <footer>
        <div class="footer">
            <div class="footer-container">
                <strong class="footer-container__heading">Besoin d'aide ? <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>

                <?php 

                    wp_nav_menu( array(
                        'menu' => '40',
                        'menu_class' => 'footer-container__body'
                    ));

                ?>

            </div>
            <div class="footer-container">
                <strong class="footer-container__heading">A propos de nous <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>
                <ul class="footer-container__body">
                    <li> <a href="#"> <img class="footer-container__logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-03.png" alt="logo"> </a>  </li>
                </ul>
            </div>
            <div class="footer-container">
                <strong class="footer-container__heading">Nos moyens de paiement <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>
                <ul class="footer-container__body">
                    <li> <a href="#">Paiement a la livraison</a> </li>
                    <li> <a href="#">Paypal</a> </li>
                    <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/monetbil_partners_logo.png" alt="paiement"></a> </li>
                </ul>
            </div>
            <div class="footer-container">
                <strong class="footer-container__heading">Telecharger notre application Mobile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>
                <ul class="footer-container__body">
                  <li ><a href="#"><img  class="apps" src="<?php echo get_template_directory_uri(); ?>/images/icons/app-store.png" alt="store"></a></li> 
                  <li ><a href="#"><img class="apps" src="<?php echo get_template_directory_uri(); ?>/images/icons/google-play.png" alt="store"></a></li>   
                </ul>
            </div>
        </div>
        <div class="copyright">
            <div class="copyright__social">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/Instagram - Negative.png" alt="insta">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/Vector.svg" alt="insta">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/WhatsApp.svg" alt="insta">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/Facebook - Negative.svg" alt="insta">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/Twitter - Negative.svg" alt="insta">
                </a>
            </div>
            <div class="copyright__body">
                &copy; copyright <?php echo date("Y"); echo " "; echo bloginfo('name') ?>, tous droits reservés
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>