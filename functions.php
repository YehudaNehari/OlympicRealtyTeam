<?php

require_once(__DIR__ . '/includes/custom_homes.php');
require_once(__DIR__ . '/includes/bootstrap_nav.php');


function wpb_adding_scripts() {
    wp_register_style('header-css', get_template_directory_uri() .'/css/header.css');
    wp_register_style('front-page-css', get_template_directory_uri() .'/css/front-page.css');
    wp_register_style('home-single-css', get_template_directory_uri() .'/css/home-single.css');
    wp_register_style('category-css', get_template_directory_uri() .'/css/category.css');
    wp_register_style('footer-css', get_template_directory_uri() .'/css/footer.css');

    wp_register_style('slick-css', get_template_directory_uri() .'/css/slick/slick.css');
	wp_register_style('slick-theme-css', get_template_directory_uri() .'/css/slick/slick-theme.css');
    wp_register_script('my_amazing_script', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ),time(), true);

    wp_enqueue_style('header-css');
    wp_enqueue_style('front-page-css');
    wp_enqueue_style('home-single-css');
    wp_enqueue_style('category-css');
    wp_enqueue_style('footer-css');
    wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
    wp_enqueue_script('my_amazing_script');
} 

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts', 999 ); 





  function custom_menu_setup() {
    register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'nepalbuzz' ),
            'footer'  => esc_html__( 'Footer Menu', 'nepalbuzz' ),
    ) );
}


function custom_theme_setup() {
    register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'nepalbuzz' ),
            'footer'  => esc_html__( 'Footer Menu', 'nepalbuzz' ),
            'main-menu' => esc_html__( 'Main menu', 'main-menu')

    ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}



