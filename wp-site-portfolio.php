<?php
/**
* @package  wp-site-portfolio
*/
/*
Plugin Name: WP Site Portfolio
Plugin URI: https://wpexpress.co.il/site-portfolio-plugin
Description: Show you work to potential customers
Version: 1.0.6
Author: WPexpress Ronen Abutbul
Author URI: https://wpexpress.co.il
License: GPLv2 or later
Licene URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-site-portfolio
Domain Path:  /languages
*/

//Exit if eccessed directly
if(! defined( 'ABSPATH' ) ){
	exit;
}
//Add Required Files
require_once(plugin_dir_path(__FILE__) .  '/includes/wpspf-cpt.php');
require_once(plugin_dir_path(__FILE__) .  '/includes/wpspf-cpt-fields.php');
require_once(plugin_dir_path(__FILE__) .  '/includes/function-wpspf.php');
require_once(plugin_dir_path(__FILE__) .  '/includes/templates/wpspf-shortcode.php');
require_once(plugin_dir_path(__FILE__) .  '/admin/function-admin.php');
require_once(plugin_dir_path(__FILE__) .  '/elementor/plugin.php');


function wpspf_load_plugin_textdomain() {
    load_plugin_textdomain( 'wp-site-portfolio', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'wpspf_load_plugin_textdomain' );
