<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajouter les styles et les scripts
function camarche_load(){
    //style.css
    wp_enqueue_style( 
        'camarche',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    //jquery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://code.jquery.com/jquery-3.5.1.min.js', 
        false, 
        '3.5.1', 
        true 
    );

    //script.js
    wp_enqueue_script( 
        'camarche', 
        get_template_directory_uri() . '/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
}
add_action( 'wp_enqueue_scripts', 'camarche_load' );