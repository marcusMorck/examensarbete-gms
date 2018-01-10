<?php

//Disable message: that the theme isn't supported with the woocommerce plugin.
function woocommerce_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');


//Function that loads all css styles
function load_styles() {
    wp_enqueue_style('style.css', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
//Executes the function load_styles() and adds all of the css styles
add_action('wp_enqueue_scripts', 'load_styles');

//Function that loads all scripts
function load_scripts()
{
    wp_enqueue_script('jquery');
    //wp_enqueue_script('download-files.js', get_template_directory_uri() . '/assets/js/download-files.js', array('jquery'), '1.0.0', false);
    //wp_enqueue_script('showhide.js', get_template_directory_uri() . '/assets/js/showhide.js', array('jquery'), '1.0.0', false);
}
//Executes the function load_scripts() and adds all of the scripts
add_action('wp_enqueue_scripts', 'load_scripts');

//Function that sets default values for custom logo and adds the functionality in wordpress
function gms_custom_logo_setup() {
    $defaults = array(
        'height'      => 500,
        'width'       => 500,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
//Executes the function gms_custom_logo_setup()
add_action('after_setup_theme', 'gms_custom_logo_setup');

//Function that register a custom menu
function register_custom_products_menu() {
    register_nav_menu('product-menu',__( 'product-menu' ));
}
add_action( 'init', 'product-menu' );

//Removes woocommerce css
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_filter( 'nav_menu_meta_box_object', 'disable_pagination_in_menu_meta_box', 9 );