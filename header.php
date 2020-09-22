<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        
        <!-- Inclure les feuilles de style -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <?php
        if (!is_404() && has_nav_menu('header-menu')){
        ?>
            <!-- header menu -->
            <header>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'container' => 'ul',
                        'menu_class' => 'header-menu'
                    )
                );
                ?>
            </header>
        <?php
        }
        ?>