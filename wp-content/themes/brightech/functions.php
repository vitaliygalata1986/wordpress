<?php

add_action('after_setup_theme', 'setup_theme');
add_action( 'wp_enqueue_scripts', 'my_scripts' );


function my_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main-style.css', get_template_directory_uri() . '/css/style.css' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.0.min.js');
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
    wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC5DLhP5-D69v26AkzV2qrqaDMpl1nIGUk&callback=initMap', '', '', true );
}


function setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    load_theme_textdomain( 'icvr', get_template_directory() . '/languages' );
}

?>