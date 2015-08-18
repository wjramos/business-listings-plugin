<?php

/**
 * Plugin Class
 */

class Logik_Business_Listings {

    /* Loader for maintaining and registering all hooks */
    protected $loader;

    /* The unique identifier of this plugin. */
    protected $Logik_Business_Listings;


    /* Current Version */
    protected $version;

    /* Get Version */
    public function get_version() {
        return $this->version;
    }


    /* Core Functionality */
    public function __construct() {

        $this->Logik_Business_Listings = 'logik-business-listings';
        $this->version = '1.0.0';

        $this->load_dependencies();
        $this->set_locale();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    /* Load Dependencies */
    private function load_dependencies() {

        /* Actions and Filters */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-logik-business-listings-loader.php';

        /* Internationalization */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-logik-business-listings-i18n.php';

        /* Admin Actions */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-logik-business-listings-admin.php';

        /* Public Actions */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-logik-business-listings-public.php';

        $this->loader = new Logik_Business_Listings_Loader();
    }


   /*
    * Hooks
    */

    /* Hooks Loader */
    public function get_loader() {
        return $this->loader;
    }

    /* Register Admin Hooks */
    private function define_admin_hooks() {

        $plugin_admin = new Logik_Business_Listings_Admin( $this->get_Logik_Business_Listings(), $this->get_version() );

        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
    }

    /* Register Public Hooks*/
    private function define_public_hooks() {

        $plugin_public = new Logik_Business_Listings_Public( $this->get_Logik_Business_Listings(), $this->get_version() );

        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
    }


   /*
    * Internationalization
    */

    /* Run Loader to execute Hooks */
    public function run() {
        $this->loader->run();
    }

    /* Namespace */
    public function get_Logik_Business_Listings() {
        return $this->Logik_Business_Listings;
    }

    /* Locale (Internationalization) */
    private function set_locale() {

        $plugin_i18n = new Logik_Business_Listings_i18n();
        $plugin_i18n->set_domain( $this->get_Logik_Business_Listings() );

        $this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
    }
}
