<?php

/**
 * Public
 */

/* Plugin name, version, and enqueue the admin-specific stylesheet and JavaScript. */
class Logik_Business_Listings_Public {

    /* Plugin ID */
    private $Logik_Business_Listings;

    /* Plugin Version */
    private $version;

    /* Initialize the class and set its properties. */
    public function __construct( $Logik_Business_Listings, $version ) {

        $this->Logik_Business_Listings = $Logik_Business_Listings;
        $this->version = $version;

    }

    /* Register public stylesheets */
    public function enqueue_styles() {

        wp_enqueue_style( $this->Logik_Business_Listings, plugin_dir_url( __FILE__ ) . 'css/public.css', array(), $this->version, 'all' );
    }

    /* Register public scripts */
    public function enqueue_scripts() {

        wp_enqueue_script( $this->Logik_Business_Listings, plugin_dir_url( __FILE__ ) . 'js/public.js', array( 'jquery' ), $this->version, false );
    }
}
