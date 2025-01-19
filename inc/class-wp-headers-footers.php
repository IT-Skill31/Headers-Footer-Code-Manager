<?php
class WP_Headers_Footers {
    private static $instance = null;
    private $admin;
    private $frontend;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function init() {
        // Initialize admin
        if (is_admin()) {
            $this->admin = new WP_Headers_Footers_Admin();
            $this->admin->init();
        }

        // Initialize frontend
        $this->frontend = new WP_Headers_Footers_Frontend();
        $this->frontend->init();
    }
}