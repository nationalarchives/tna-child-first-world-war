<?php



function dequeue_parent_style() {
    wp_dequeue_style('tna-styles');
    wp_deregister_style('tna-styles');
}
add_action( 'wp_enqueue_scripts', 'dequeue_parent_style', 9999 );
add_action( 'wp_head', 'dequeue_parent_style', 9999 );

// Enqueue styles
function tna_child_styles() {
    wp_register_style( 'tna-parent-styles', get_template_directory_uri() . '/css/base-sass.css.min', array(), EDD_VERSION, 'all' );
    wp_register_style( 'tna-child-styles', get_stylesheet_directory_uri() . '/style.css', array(), '0.1', 'all' );
    wp_enqueue_style( 'tna-parent-styles' );
    wp_enqueue_style( 'tna-child-styles' );
}
add_action( 'wp_enqueue_scripts', 'tna_child_styles' );



