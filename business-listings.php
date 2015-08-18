<?php

/**
 * @link              http://example.com
 * @since             1.0.0
 * @package           logik_business_listings
 *
 * @wordpress-plugin
 * Plugin Name:       Logik Business Listings
 * Description:
 * Version:           1.0.0
 * Author:            410 Creative LLC.
 * Author URI:        http://fourtencreative.com/
 * Text Domain:       logik-business-listings
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/* Activate */
function activate_logik_business_listings() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class/activator.php';
    Logik_Business_Listings_Activator::activate();
}

/* Deactivate */
function deactivate_logik_business_listings() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class/deactivator.php';
    Logik_Business_Listings_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_logik_business_listings' );
register_deactivation_hook( __FILE__, 'deactivate_logik_business_listings' );

/* Core */
require plugin_dir_path( __FILE__ ) . 'includes/class/business-listings.php';

/* Execute */
function run_logik_business_listings() {

    $plugin = new Logik_Business_Listings();
    $plugin->run();
}

run_logik_business_listings();
