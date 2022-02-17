<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="main-header">
        <div class="main-header__logo">
            <a href="/">
                <h2>Flawless eshop</h2>
            </a>
        </div>

        <nav class="main-header__nav">
            <div class="menu-link">
                <span></span>
                <span></span>
            </div>

            <h3>
                <?php
                wp_nav_menu( array(
                        'theme_location' => 'top-menu',
                        'container' => false
                ));
            ?>
            </h3>

        </nav>

        <div class="main-header__tools">
            <a href="http://e-commerce.test/mon-compte/" class="tools-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </a>
            <a href="<?php echo wc_get_cart_url(); ?>" class="tools-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-shopping-cart">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
            </a>
        </div>
    </header>

    <div class="mobile-menu">
        <strong>
            <?php
                wp_nav_menu( array(
                        'theme_location' => 'top-menu',
                        'container' => false
                ));
            ?>
        </strong>
    </div>