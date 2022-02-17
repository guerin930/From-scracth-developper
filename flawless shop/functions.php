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