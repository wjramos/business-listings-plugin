<?php

/* Internationalization */

class Logik_Business_Listings_i18n {

    /* Domain */
    private $domain;

    /* Load Text Domain */
    public function load_plugin_textdomain() {

        load_plugin_textdomain(
            $this->domain,
            false,
            dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
        );
    }

    /* Set Domain to Text Domain */
    public function set_domain( $domain ) {
        $this->domain = $domain;
    }
}
