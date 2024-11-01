<?php

/**
 * Plugin Name:       Stripe Express
 * Plugin URI:        https://wordpress.org/plugins/wp-stripe-express/
 * Description:       Shipping With a bunch of built-in stripe payment widgets including alipay & wechat pay and also woocommerce addon, simply choose them to integrate into your page easily.
 * Version:           1.24.0
 * Author:    				Payment Addons, support@payaddons.com 
 * Author URI:				https://payaddons.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: 			Stripe Express
 *
 */
if ( !class_exists( 'Stripe\\Stripe' ) ) {
    require_once 'vendor/stripe-php/init.php';
}
if ( !class_exists( 'IT_Stripe_Express' ) ) {
    define( 'IT_STRIPE_EXPRESS_DIR', plugin_dir_path( __FILE__ ) );
    define( 'IT_STRIPE_EXPRESS_URL', plugin_dir_url( __FILE__ ) );
    define( 'IT_STRIPE_EXPRESS_INC', plugin_dir_path( __FILE__ ) . 'includes' );
    define( 'IT_STRIPE_EXPRESS_VERSION', '1.24.0' );
    define( 'IT_STRIPE_EXPRESS_FILE', __FILE__ );
    define( 'IT_STRIPE_EXPRESS_NAME', 'stripe-express' );
    define( 'IT_STRIPE_EXPRESS_PLUGIN_URL', 'https://payaddons.com/' );
    define( 'IT_STRIPE_EXPRESS_REST_API', 'stripe-express/v1/' );
    define( 'IT_STRIPE_EXPRESS_LOG_FOLDER', plugin_dir_path( __FILE__ ) . 'logs' );
    require_once 'freemius-config.php';
    require_once 'vendor/autoload.php';
    require_once 'includes/wp-stripe-logger.php';
    require_once 'includes/wp-stripe-activator.php';
    require_once 'includes/wp-stripe-deactivator.php';
    require_once 'includes/wp-stripe-apple-pay-registration.php';
    require_once 'includes/wp-stripe-menu.php';
    require_once 'includes/wp-stripe-routes.php';
    require_once 'includes/wp-stripe-scripts.php';
    require_once 'includes/wp-stripe-shortcodes.php';
    require_once 'includes/admin-api/element.php';
    require_once 'includes/admin-api/setting.php';
    require_once 'includes/admin-api/system.php';
    require_once 'includes/common/countries.php';
    require_once 'includes/common/security.php';
    require_once 'includes/common/utils.php';
    require_once 'includes/stripe-api/stripe.php';
    require_once 'includes/addons/wp-stripe-cf7.php';
    class IT_Stripe_Express {
        private $shortcodes;

        private $scripts;

        private $menu;

        private $routes;

        function __construct() {
            $this->shortcodes = new Stripe_Express_Shortcodes();
            $this->scripts = new Stripe_Express_Scripts();
            $this->menu = new Stripe_Express_Menu();
            $this->routes = new Stripe_Express_Routes();
        }

        function admin_page() {
            $this->menu->register_menu();
        }

        function stripe_admin_scripts() {
            $this->scripts->admin_scripts();
        }

        function stripe_client_scripts() {
            $this->scripts->client_scripts();
        }

        function stripe_routes() {
            $this->routes->register_routes();
        }

        function stripe_express_shortcode( $atts ) {
            return $this->shortcodes->register_shortcode( $atts );
        }

        function stripe_express_receipt_shortcode( $atts ) {
            return $this->shortcodes->register_receipt_shortcode( $atts );
        }

        function activate() {
            Stripe_Express_Activator::activate();
        }

        function deactivate() {
            Stripe_Express_Deactivator::deactivate();
        }

    }

    add_action( 'woocommerce_blocks_loaded', function () {
    } );
}
add_action( 'plugins_loaded', function () {
} );
global $WP_STRIPE;
$WP_STRIPE = new IT_Stripe_Express();
add_action( 'admin_menu', array($WP_STRIPE, 'admin_page') );
add_action( 'admin_enqueue_scripts', array($WP_STRIPE, 'stripe_admin_scripts') );
add_action( 'wp_enqueue_scripts', array($WP_STRIPE, 'stripe_client_scripts') );
/*
 * Stripe for WP API Routes
 */
add_action( 'rest_api_init', array($WP_STRIPE, 'stripe_routes') );
/*
 * Register Shortcode
 */
add_shortcode( 'stripe-express', array($WP_STRIPE, 'stripe_express_shortcode') );
add_shortcode( 'stripe-express-receipt', array($WP_STRIPE, 'stripe_express_receipt_shortcode') );
/*
 * Plugin activation
 */
register_activation_hook( __FILE__, array($WP_STRIPE, 'activate') );
/*
 * Plugin deactivation
 */
register_deactivation_hook( __FILE__, array($WP_STRIPE, 'deactivate') );