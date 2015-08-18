<?php

/**
 * Plugin Class
 */

class Logik_Business_Listings {

    /* Loader for maintaining and registering all hooks */
    protected $loader;

    /* The unique identifier of this plugin. */
    protected $logik_business_listings;


    /* Current Version */
    protected $version;

    /* Get Version */
    public function get_version() {
        return $this->version;
    }


    /* Core Functionality */
    public function __construct() {

        $this->logik_business_listings = 'logik-business-listings';
        $this->version = '1.0.0';

        $this->load_dependencies();

        $this->define_admin_hooks();
        $this->define_public_hooks();

        // $this->set_locale();
    }

    /* Load Dependencies */
    private function load_dependencies() {

        /* Custom Post Types */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'custom_post_type/init.php';

        /* Custom Taxonomies */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'custom_taxonomy/init.php';

    	/* Custom Meta */
    	require_once plugin_dir_path( dirname( __FILE__ ) ) . 'custom_meta/init.php';

        /* Actions and Filters */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'class/loader.php';

        /* Internationalization */
        // require_once plugin_dir_path( dirname( __FILE__ ) ) . 'class/i18n.php';

        /* Admin Actions */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . '../admin/class/admin.php';

        /* Public Actions */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . '../public/class/public.php';

        $this->loader = new Logik_Business_Listings_Loader();
    }


    /* Namespace */
    public function get_logik_business_listings() {
        return $this->logik_business_listings;
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

        $plugin_admin = new Logik_Business_Listings_Admin( $this->get_logik_business_listings(), $this->get_version() );

        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
    }

    /* Register Public Hooks*/
    private function define_public_hooks() {

        $plugin_public = new Logik_Business_Listings_Public( $this->get_logik_business_listings(), $this->get_version() );

        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
    }


    /* Run Loader to execute Hooks */
    public function run() {
        $this->loader->run();
    }


   /*
    * Internationalization
    */

    // /* Locale (Internationalization) */
    // private function set_locale() {

    //     $plugin_i18n = new Logik_Business_Listings_i18n();
    //     $plugin_i18n->set_domain( $this->get_logik_business_listings() );

    //     $this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
    // }
}
