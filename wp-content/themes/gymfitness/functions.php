<?php

// Menus de navegacion, agregar mas utilizandoel arreglo
function gymfitness_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'gymfitness' )
    ));
}
add_action('init', 'gymfitness_menus');

// Scripts y Styles
function gymfitness_scripts_styles() {
    
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.1');

    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swa', array(), '1.0.1');
  
    // la hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
    
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');












?>