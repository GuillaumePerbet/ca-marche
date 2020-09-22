<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        
        <!-- Inclure les feuilles de style -->
        <?php wp_head(); ?>
    </head>

    <body>
        <?php wp_body_open(); ?>

        <!-- header menu -->
        <!-- désactiver sur page 404 is_404()?-->
        <header>
            <?php
                if (has_nav_menu('header-menu')){
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'container' => 'ul',
                            'menu_class' => 'header-menu'
                        )
                    );
                }
            ?>
        </header>