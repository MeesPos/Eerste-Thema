<?php
// Laad stylesheets in
function loadStylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
}

add_action( 'init', 'loadStylesheets');

// Menu registreren
function register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main menu' ),
            'extra-menu' => __( 'Extra menu' )
        )
    );
}

add_action( 'init', 'register_menus' );