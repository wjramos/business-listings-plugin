<?php

/**
 * Public
 */

/* Plugin name, version, and enqueue the public stylesheet and JavaScript. */
class Logik_Business_Listings_Public {

    /* Plugin ID */
    private $logik_business_listings;

    /* Plugin Version */
    private $version;

    /* Initialize the class and set its properties. */
    public function __construct( $logik_business_listings, $version ) {

        $this->logik_business_listings = $logik_business_listings;
        $this->version = $version;

    }

    /* Register public stylesheets */
    public function enqueue_styles() {

        // wp_enqueue_style( $this->logik_business_listings, plugin_dir_url( __FILE__ ) . 'css/public.css', array(), $this->version, 'all' );
    }

    /* Register public scripts */
    public function enqueue_scripts() {

        // wp_enqueue_script( $this->logik_business_listings, plugin_dir_url( __FILE__ ) . 'js/public.js', array( 'jquery' ), $this->version, false );
    }
}
