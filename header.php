<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <!-- menu -->
        <?php
            if (has_nav_menu('header-menu')){
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar'
                    )
                );
            }
        ?>
        <!-- ??? -->
        <a href="<?php echo home_url( '/' ); ?>">
        <!-- logo -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
        </a>  
    </header>
    
    