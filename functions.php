<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajouter les styles et les scripts
function camarche_load(){

    //Montserrat font
    wp_enqueue_style(
        'montserrat',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&display=swap'
    );

    //Raleway font
    wp_enqueue_style(
        'raleway',
        'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap'
    );

    //Permanent Marker font
    wp_enqueue_style(
        'permanent-marker',
        'https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap'
    );

    //Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css',
        array(),
        '5.14.0'
    );

    //style.css
    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        array( 'montserrat' , 'raleway' , 'permanent-marker' , 'font-awesome' )
    );

    //grid.css
    wp_enqueue_style(
        'grid',
        get_template_directory_uri() . '/grid.css'
    );

    //jquery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://code.jquery.com/jquery-3.5.1.min.js',
        array(),
        '3.5.1'
    );

    //script.js
    wp_enqueue_script( 
        'script',
        get_template_directory_uri() . '/script.js',
        array( 'jquery' )
    );
}
add_action( 'wp_enqueue_scripts', 'camarche_load' );

//Ajouter les menus
function register_my_menu() {
    //Header Menu
    register_nav_menu('header-menu',__( 'Header Menu' ));
    //Category Menu
    register_nav_menu('category-menu',__( 'Category Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Ajouter le lien vers le dernier post dans le menu
// Front end only, don't hack on the settings page
if ( ! is_admin() ) {
    add_filter( 'wp_get_nav_menu_items', 'replace_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}

function replace_placeholder_nav_menu_item_with_latest_post( $items , $menu , $args ) {
    // Loop through the menu items looking for placeholder
    foreach ( $items as $item ) {

        // Is this the placeholder we're looking for?
        if ( '#latestpost' != $item->url ){
            continue;
        }

        // Get the latest post
        $latestpost = get_posts( array(
            'numberposts' => 1,
        ) );

        if ( empty( $latestpost ) ){
            continue;
        }

        // Replace the placeholder with the real URL
        $item->url = get_permalink( $latestpost[0]->ID );
    }

    // Return the modified (or maybe unmodified) menu items array
    return $items;
}