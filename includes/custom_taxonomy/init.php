<?php

// Register Custom Taxonomy
function add_business_listing_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Business Categories', 'Taxonomy General Name', 'logik_business_listings' ),
        'singular_name'              => _x( 'Business Category', 'Taxonomy Singular Name', 'logik_business_listings' ),
        'menu_name'                  => __( 'Business Categories', 'logik_business_listings' ),
        'all_items'                  => __( 'All Categories', 'logik_business_listings' ),
        'parent_item'                => __( 'Parent Category', 'logik_business_listings' ),
        'parent_item_colon'          => __( 'Parent Category:', 'logik_business_listings' ),
        'new_item_name'              => __( 'New Category Name', 'logik_business_listings' ),
        'add_new_item'               => __( 'Add New Category', 'logik_business_listings' ),
        'edit_item'                  => __( 'Edit Category', 'logik_business_listings' ),
        'update_item'                => __( 'Update Category', 'logik_business_listings' ),
        'view_item'                  => __( 'View Category', 'logik_business_listings' ),
        'separate_items_with_commas' => __( 'Separate Categories with commas', 'logik_business_listings' ),
        'add_or_remove_items'        => __( 'Add or remove Categories', 'logik_business_listings' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'logik_business_listings' ),
        'popular_items'              => __( 'Popular Categories', 'logik_business_listings' ),
        'search_items'               => __( 'Search Categories', 'logik_business_listings' ),
        'not_found'                  => __( 'Not Found', 'logik_business_listings' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'business_category', array( 'business_listing' ), $args );

    $labels = array(
        'name'                       => _x( 'Business Locations', 'Taxonomy General Name', 'logik_business_listings' ),
        'singular_name'              => _x( 'Business Location', 'Taxonomy Singular Name', 'logik_business_listings' ),
        'menu_name'                  => __( 'Business Locations', 'logik_business_listings' ),
        'all_items'                  => __( 'All Locations', 'logik_business_listings' ),
        'parent_item'                => __( 'Parent Location', 'logik_business_listings' ),
        'parent_item_colon'          => __( 'Parent Location:', 'logik_business_listings' ),
        'new_item_name'              => __( 'New Location Name', 'logik_business_listings' ),
        'add_new_item'               => __( 'Add New Location', 'logik_business_listings' ),
        'edit_item'                  => __( 'Edit Location', 'logik_business_listings' ),
        'update_item'                => __( 'Update Location', 'logik_business_listings' ),
        'view_item'                  => __( 'View Location', 'logik_business_listings' ),
        'separate_items_with_commas' => __( 'Separate Locations with commas', 'logik_business_listings' ),
        'add_or_remove_items'        => __( 'Add or remove Locations', 'logik_business_listings' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'logik_business_listings' ),
        'popular_items'              => __( 'Popular Locations', 'logik_business_listings' ),
        'search_items'               => __( 'Search Locations', 'logik_business_listings' ),
        'not_found'                  => __( 'Not Found', 'logik_business_listings' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'business_location', array( 'business_listing' ), $args );

    $labels = array(
        'name'                       => _x( 'Business Districts', 'Taxonomy General Name', 'logik_business_listings' ),
        'singular_name'              => _x( 'Business District', 'Taxonomy Singular Name', 'logik_business_listings' ),
        'menu_name'                  => __( 'Business Districts', 'logik_business_listings' ),
        'all_items'                  => __( 'All Districts', 'logik_business_listings' ),
        'parent_item'                => __( 'Parent District', 'logik_business_listings' ),
        'parent_item_colon'          => __( 'Parent District:', 'logik_business_listings' ),
        'new_item_name'              => __( 'New District Name', 'logik_business_listings' ),
        'add_new_item'               => __( 'Add New District', 'logik_business_listings' ),
        'edit_item'                  => __( 'Edit District', 'logik_business_listings' ),
        'update_item'                => __( 'Update District', 'logik_business_listings' ),
        'view_item'                  => __( 'View District', 'logik_business_listings' ),
        'separate_items_with_commas' => __( 'Separate Districts with commas', 'logik_business_listings' ),
        'add_or_remove_items'        => __( 'Add or remove Districts', 'logik_business_listings' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'logik_business_listings' ),
        'popular_items'              => __( 'Popular Districts', 'logik_business_listings' ),
        'search_items'               => __( 'Search Districts', 'logik_business_listings' ),
        'not_found'                  => __( 'Not Found', 'logik_business_listings' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'business_district', array( 'business_listing' ), $args );

}
add_action( 'init', 'add_business_listing_taxonomy', 0 );

 ?>