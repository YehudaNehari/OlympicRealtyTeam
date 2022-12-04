<?php
/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Homes', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Home', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Homes', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Home', 'twentytwentyone' ),
        'all_items'           => __( 'All Homes', 'twentytwentyone' ),
        'view_item'           => __( 'View Homes', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Homes', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Home', 'twentytwentyone' ),
        'update_item'         => __( 'Update Homes', 'twentytwentyone' ),
        'search_items'        => __( 'Search Homes', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'homes', 'twentytwentyone' ),
        'description'         => __( 'Home news and reviews', 'twentytwentyone' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'menu_icon' => "dashicons-admin-home",
        'taxonomies'          => array( 'category' ),
    );
    add_filter( 'use_block_editor_for_post', '__return_false' );

    // Registering your Custom Post Type
    register_post_type( 'homes', $args );
  
}
  
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
  
add_action( 'init', 'custom_post_type', 0 );


add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'homes'); 
    $query->set('post_type',$post_type);
    return $query;
    }
}
