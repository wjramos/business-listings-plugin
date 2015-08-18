<?php

// Register Custom Post Type
function add_business_listing_post_type() {

    $labels = array(
        'name'                => _x( 'Business Listings', 'Post Type General Name', 'logik_business_listings' ),
        'singular_name'       => _x( 'Business Listing', 'Post Type Singular Name', 'logik_business_listings' ),
        'menu_name'           => __( 'Business Listings', 'logik_business_listings' ),
        'name_admin_bar'      => __( 'Business Listings', 'logik_business_listings' ),
        'parent_item_colon'   => __( 'Parent Listing:', 'logik_business_listings' ),
        'all_items'           => __( 'All Listings', 'logik_business_listings' ),
        'add_new_item'        => __( 'Add New Listing', 'logik_business_listings' ),
        'add_new'             => __( 'Add New', 'logik_business_listings' ),
        'new_item'            => __( 'New Listing', 'logik_business_listings' ),
        'edit_item'           => __( 'Edit Listing', 'logik_business_listings' ),
        'update_item'         => __( 'Update Listing', 'logik_business_listings' ),
        'view_item'           => __( 'View Listing', 'logik_business_listings' ),
        'search_items'        => __( 'Search Listing', 'logik_business_listings' ),
        'not_found'           => __( 'Not found', 'logik_business_listings' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'logik_business_listings' ),
    );
    $args = array(
        'label'               => __( 'Business Listing', 'logik_business_listings' ),
        'description'         => __( 'Directory of businesses', 'logik_business_listings' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', ),
        'taxonomies'          => array( 'business_category', 'business_location', 'business_district' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-store',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'business_listing', $args );

}
add_action( 'init', 'add_business_listing_post_type', 0 );

?>