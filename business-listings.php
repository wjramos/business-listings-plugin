<?php

/**
 * @link              http://example.com
 * @since             1.0.0
 * @package           Logik_Business_Listings
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
function activate_Logik_Business_Listings() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-logik-business-listings-activator.php';
    Logik_Business_Listings_Activator::activate();
}

/* Deactivate */
function deactivate_Logik_Business_Listings() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-logik-business-listings-deactivator.php';
    Logik_Business_Listings_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Logik_Business_Listings' );
register_deactivation_hook( __FILE__, 'deactivate_Logik_Business_Listings' );

/* Internationalization */
require plugin_dir_path( __FILE__ ) . 'includes/class-logik-business-listings.php';

/* Execute */
function run_Logik_Business_Listings() {

    $plugin = new Logik_Business_Listings();
    $plugin->run();
}

run_Logik_Business_Listings();
