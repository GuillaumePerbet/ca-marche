<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <!-- load styles -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- no header menu in 404 page -->
    <?php if (!is_404() && has_nav_menu('header')){ ?>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'container' => 'ul'
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </header>

    <?php } ?>