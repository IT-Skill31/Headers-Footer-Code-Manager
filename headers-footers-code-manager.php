<?php
/**
 * Plugin Name: Headers Footer Code Manager
 * Plugin URI: https://appystore.pro/headers-footers-code-manager
 * Description: Easily insert code in header, footer and body of your WordPress site
 * Version: 1.0.0
 * Author: Adda REFES
 * Author URI: https://appystore.pro
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: headers-footer-code-manager
 */

if (!defined('ABSPATH')) {
    exit;
}

define('WHF_VERSION', '1.0.0');
define('WHF_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WHF_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Class autoloader
 */
function whf_autoloader($class) {
    $prefix = 'WP_Headers_Footers';
    
    if (strpos($class, $prefix) !== 0) {
        return;
    }
    
    $class_name = str_replace('_', '-', strtolower($class));
    $file = WHF_PLUGIN_DIR . 'inc/class-' . $class_name . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('whf_autoloader');

/**
 * Initialize plugin
 */
function whf_init() {
    if (class_exists('WP_Headers_Footers')) {
        $plugin = new WP_Headers_Footers();
        $plugin->init();
    }
}
add_action('plugins_loaded', 'whf_init');

/**
 * Activation hook
 */
function whf_activate() {
    if (!get_option('whf_header_code')) {
        add_option('whf_header_code', '');
    }
    if (!get_option('whf_body_code')) {
        add_option('whf_body_code', '');
    }
    if (!get_option('whf_footer_code')) {
        add_option('whf_footer_code', '');
    }
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'whf_activate');

/**
 * Deactivation hook
 */
function whf_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'whf_deactivate');