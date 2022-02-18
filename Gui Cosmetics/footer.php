    <footer>
        <div class="footer">
            <div class="footer-container">
                <strong class="footer-container__heading">Besoin d'aide ? <svg class='tog' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>
                <?php 
                    wp_nav_menu( array(
                        'menu' => '40',
                        'menu_class' => 'footer-container__body'
                    ));
                ?>
            </div>
            <div class="footer-container">
                <strong class="footer-container__heading">Logo <svg class='tog' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>
                <ul class="footer-container__body">
                    <li> <a href="/#"> <img class="footer-container__logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-03.png" alt="logo"> </a>  </li>
                </ul>
            </div>
            <div class="footer-container">
                <strong class="footer-container__heading">Nos moyens de paiement <svg class='tog' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>
                <ul class="footer-container__body">
                    <li> <a href="#">Paiement a la livraison</a> </li>
                    <li> <a href="#">Paypal</a> </li>
                    <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/monetbil_partners_logo.png" alt="paiement"></a> </li>
                </ul>
            </div>
            <div class="footer-container">
                <strong class="footer-container__heading">Telecharger notre application Mobile <svg class='tog' xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></strong>
                <ul class="footer-container__body">
                  <li ><a href="#"><img  class="apps" src="<?php echo get_template_directory_uri(); ?>/images/icons/app-store.png" alt="store"></a></li> 
                  <li ><a href="#"><img class="apps" src="<?php echo get_template_directory_uri(); ?>/images/icons/google-play.png" alt="store"></a></li>   
                </ul>
            </div>
        </div>
        <div class="copyright">
            <div class="copyright__social">
                <a href="https://instagram.com/gui_cosmetics?utm_medium=copy_link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram (1).svg" alt="instagram">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/tiktok.svg" alt="tik tok">
                </a>
                <a href="https://www.facebook.com/guicosmeticsbeauty/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook (1).svg" alt="fb">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/WhatsApp.svg" alt="whatsapp">
                </a>
                <a href="https://twitter.com/Guicosmetics237?t=lGM9uXIRL5vbtGtoNnS0fQ&s=09">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter (1).svg" alt="twitter">
                </a>
                <a href="https://www.snapchat.com/add/guicosmetics">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/snapchat (1).png" alt="snapchat">
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