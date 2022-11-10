<?php

require_once(__DIR__ . '/includes/custom_homes.php');

function wpb_adding_scripts() {
    wp_register_script('my_amazing_script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'),'1.1', false);
    wp_enqueue_script('my_amazing_script');
} 

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts', 999 ); 



add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'homes'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}
function custom_theme_setup() {
    register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'nepalbuzz' ),
            'footer'  => esc_html__( 'Footer Menu', 'nepalbuzz' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

	
