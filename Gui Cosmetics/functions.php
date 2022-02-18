<?php


/*Mise en place du css & js */
function woocommerce_custom_theme() {
    wp_register_style('custom_css', get_template_directory_uri() .'/css/style.css', false, '1.0.0');

    wp_enqueue_style('custom_css');
    wp_enqueue_script('main-scripts', get_template_directory_uri() .'/js/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'woocommerce_custom_theme' );

/*Creation du Menu personaliser */
function woocommerce_custom_menu(){
    register_nav_menu('top-menu', __('WooCommerce Custom Menu', 'woocommercecustommenu'));
}
add_action('init', 'woocommerce_custom_menu' );




/* Woocommerce */
if (class_exists('WooCommerce')) {

    /*Woocommerce Support */
    function woocommerceshop_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action('after_setup_theme', 'woocommerceshop_add_woocommerce_support');

    //Remove Woocommerce Styles
    //add_filter('woocommerce_enqueue_styles', '__return_false' );

    //Remove show title
    add_filter('woocommerce_show_page_title', '__return_false' );

    // Add Support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}

     /**
      *   Notre fonction prends 3 paramètres :
      *   - le commentaire à afficher (un objet qui contient le titre, le contenu etc)
      *   - un tableau d'arguments divers comme la profondeur maximale de réponse, la taille de l'avatar...
      *     vous pouvez utiliser ce tableau pour contrôler plus finement certains aspects de l'affichage.
      *   - la profondeur actuelle de réponse
      */
     function commentaire( $comment, $args, $depth ) {

          /**
           *   Cette affectation permet d'utiliser des fonctions comme comment_text( ),
           *   comment_title( ) etc, qui utilisent la globale 'comment'.
           *   Personnellement, je trouve l'utilisation des globales peu recommandable,
           *   mais c'est comme ça, c'est WordPress !
           */
          $GLOBALS['comment'] = $comment;
?>

<!--
          L'élément de liste qui contient le commentaire.
          Comme avec les articles, on attribue un id qu'on récupère avec comment_ID( ),
          et on génère des classes avec comment_class( ), même principe que body_class( )
          ou post_class( ) que l'on a déjà rencontrées.
     -->
<li id="comment-<?php comment_ID( ); ?>" <?php comment_class( ); ?>>

    <!-- Le bloc d'en-tête du commentaire. -->
    <div class="en-tete-commentaire">

        <!-- comment_author_link( ) affiche le nom de l'auteur, avec un lien vers son site. -->
        <span class="auteur"><?php echo comment_author_link( ); ?></span>

        <!--
                    Méta-données sur le commentaire : date et lien d'édition.
                    Je ne m'étends pas dessus, c'est le même principe que pour les articles.
               -->
        <p class="meta-commentaire">
            <?php comment_time( get_option( 'date_format' )); ?>
            <?php edit_comment_link( 'Modifier', ' | ' ); ?>
        </p>
    </div>

    <div class="avatar">
        <?php
                    if ( function_exists( 'get_avatar' )) {
                         /**
                          *   Si la fonction get_avatar( ) existe (WordPress 3.x), on l'utilise pour afficher l'avatar.
                          *   Elle accepte deux paramètres :
                          *   - l'email de l'auteur
                          *   - la taille de l'avatar
                          */
                         echo get_avatar( $comment->comment_author_email, $args['avatar_size']);
                    } else {
                         /**
                          *   Pour les anciennes versions, on y va à l'ancienne !
                          *   On construit l'URL de l'avatar avec le md5 de l'email en minuscules, l'image par défaut (d), et la taille (s).
                          *   Ensuite, on affiche une image ayant cette Url pour source.
                          */
                         $gravatar = "http://www.gravatar.com/avatar/" . md5( strtolower( $comment->comment_author_email )) . '?d=mm&s=' . $args['avatar_size'];
                         echo '<img src="' . $gravatar . '" alt="avatar de l\'auteur" />';
                    }
               ?>
    </div>

    <div class="contenu-commentaire">
        <?php
                    /**
                     *   Si le commentaire n'est pas encore approuvé, on affiche un petit message, sinon son contenu.
                     */
                    if ( $comment->comment_approved == '0' ) {
                         echo '<em>Votre commentaire est en attente de mod&eacute;ration.</em>';
                    } else {
                         comment_text( );
                    }
               ?>
    </div>

    <div class="pied-article">
        <!--
                    comment_reply_link( ) affiche un lien de réponse au commentaire.
                    On lui passe en argument un tableau contenant la profondeur de réponse.
               -->
        <?php comment_reply_link( array( 'depth' => $depth )); ?>
    </div>

    <!--
          Les plus attentionnés aurons remarqué qu'il n'y a pas de balise fermante </li>.
          Il ne faut surtout pas l'ajouter, WordPress le fait tout seul.
          Pourquoi ? Au cas où il y aurait des commentaires en réponse à insérer avant de fermer la balise.
     -->

    <?php
        }