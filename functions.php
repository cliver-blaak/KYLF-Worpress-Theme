<?php
add_action( 'wp_enqueue_scripts', 'streamit_enqueue_styles' ,99);

function streamit_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'streamit-style' for the Streamit theme.
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css');
}

function streamit_child_theme_setup() {
    load_child_theme_textdomain( 'streamit', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'streamit_child_theme_setup' );
?>