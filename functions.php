<?php
// Laad stylesheets in en scripts
function loadCSSandJS() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
}

add_action( 'init', 'loadCSSandJS');

// Menu registreren
function register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main menu' )
        )
    );
}

add_action( 'init', 'register_menus' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'init', 'register_navwalker' );