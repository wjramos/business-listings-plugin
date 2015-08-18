<?php

/**
 * Admin Functionality
 */

class Logik_Business_Listings_Admin {

   	/* Plugin ID */
    private $logik_business_listings;

    /* Plugin Version */
    private $version;

    /* Initialize Class and set properties*/
    public function __construct( $logik_business_listings, $version ) {

        $this->logik_business_listings = $logik_business_listings;
        $this->version = $version;
    }

    /* Register Admin Stylesheets */
    public function enqueue_styles() {

    //     wp_enqueue_style( $this->logik_business_listings, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), $this->version, 'all' );
    }

    /* Register Admin Scripts */
    public function enqueue_scripts() {

    //     wp_enqueue_script( $this->logik_business_listings, plugin_dir_url( __FILE__ ) . 'js/admin.js', array( 'jquery' ), $this->version, false );
    }
}
