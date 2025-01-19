<?php
class WP_Headers_Footers_Admin {
    public function init() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));
    }

    public function add_admin_menu() {
        add_options_page(
            __('Headers & Footers', 'headers-footer-code-manager'),
            __('Headers & Footers', 'headers-footer-code-manager'),
            'manage_options',
            'headers-footer-code-manager',
            array($this, 'render_admin_page')
        );
    }

    public function register_settings() {
        register_setting('whf_settings', 'whf_header_code');
        register_setting('whf_settings', 'whf_footer_code');
        register_setting('whf_settings', 'whf_body_code');
    }

    public function enqueue_admin_assets($hook) {
        if ('settings_page_headers-footer-code-manager' !== $hook) {
            return;
        }

        wp_enqueue_style('dashicons');
        
        wp_enqueue_style(
            'whf-admin',
            WHF_PLUGIN_URL . 'assets/css/admin.css',
            array(),
            WHF_VERSION
        );

        wp_enqueue_script(
            'whf-admin',
            WHF_PLUGIN_URL . 'assets/js/admin.js',
            array('jquery'),
            WHF_VERSION,
            true
        );
    }

    public function render_admin_page() {
        require_once WHF_PLUGIN_DIR . 'inc/views/admin-page.php';
    }
}