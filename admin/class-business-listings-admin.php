<?php

/**
 * Admin Functionality
 */

class Logik_Business_Listings_Admin {

   	/* Plugin ID */
    private $Logik_Business_Listings;

    /* Plugin Version */
    private $version;

    /* Initialize Class and set properties*/
    public function __construct( $Logik_Business_Listings, $version ) {

        $this->Logik_Business_Listings = $Logik_Business_Listings;
        $this->version = $version;
    }

    /* Register Admin Stylesheets */
    public function enqueue_styles() {

        wp_enqueue_style( $this->Logik_Business_Listings, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), $this->version, 'all' );
    }

    /* Register Admin Scripts */
    public function enqueue_scripts() {

        wp_enqueue_script( $this->Logik_Business_Listings, plugin_dir_url( __FILE__ ) . 'js/admin.js', array( 'jquery' ), $this->version, false );
    }
}
