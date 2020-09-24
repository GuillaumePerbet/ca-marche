<?php 

//Add images from posts
add_theme_support( 'post-thumbnails' );

//Add title tag
add_theme_support( 'title-tag' );

//Add styles and scripts
function load_styles_and_scripts(){

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
    wp_deregister_script( 'jquery' );
    wp_enqueue_script(
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
add_action( 'wp_enqueue_scripts', 'load_styles_and_scripts' );

//Add menus
function register_menus() {
    //Header Menu
    register_nav_menu('header',__( 'Header' ));
    //Category Menu
    register_nav_menu('category',__( 'Category' ));
}
add_action( 'init', 'register_menus' );

//Replace #latestpost placeholder with permalink
function replace_placeholder_with_latest_post_permalink( $items , $menu , $args ) {
    foreach ( $items as $item ) {

        if ( '#latestpost' != $item->url ){
            continue;
        }

        $latestpost = get_posts( array(
            'numberposts' => 1,
        ) );

        if ( empty( $latestpost ) ){
            continue;
        }

        $item->url = get_permalink( $latestpost[0]->ID );
    }

    return $items;
}
//Don't replace placeholder in wp-admin
if ( ! is_admin() ) {
    add_filter( 'wp_get_nav_menu_items', 'replace_placeholder_with_latest_post_permalink', 10, 3 );
}

//remove p tag from the_excerpt
remove_filter( 'the_excerpt', 'wpautop' );