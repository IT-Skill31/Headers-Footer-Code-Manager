<?php
/**
 * Frontend functionality for Headers Footer Code Manager
 * 
 * Handles the output of custom code in header, body, and footer sections
 * 
 * @package Headers_Footer_Code_Manager
 * @since 1.0.0
 */
class WP_Headers_Footers_Frontend {
    
    /**
     * Initialize the frontend functionality
     * 
     * @return void
     */
    public function init() {
        add_action('wp_head', array($this, 'insert_header_code'));
        add_action('wp_footer', array($this, 'insert_footer_code'));
        add_action('wp_body_open', array($this, 'insert_body_code'));
    }

    /**
     * Insert code into the header section
     * 
     * @return void
     */
    public function insert_header_code() {
        $this->output_code('whf_header_code');
    }

    /**
     * Insert code into the body section
     * 
     * @return void
     */
    public function insert_body_code() {
        $this->output_code('whf_body_code');
    }

    /**
     * Insert code into the footer section
     * 
     * @return void
     */
    public function insert_footer_code() {
        $this->output_code('whf_footer_code');
    }

    /**
     * Output the code with proper security escaping
     * 
     * Safely outputs custom code while allowing specific HTML tags and attributes
     * Uses wp_kses to ensure only allowed HTML elements can be output
     * 
     * @param string $option_name The option name to retrieve from WordPress options
     * @return void
     */
    private function output_code($option_name) {
        $code = get_option($option_name);
        if (!empty($code)) {
            // Define allowed HTML tags and their attributes
            $allowed_html = array(
                // Scripts
                'script' => array(
                    'type' => array(),
                    'src' => array(),
                    'async' => array(),
                    'defer' => array(),
                    'id' => array(),
                    'charset' => array()
                ),
                // Styles
                'style' => array(
                    'type' => array(),
                    'id' => array(),
                    'media' => array()
                ),
                // Link tags (for external resources)
                'link' => array(
                    'rel' => array(),
                    'href' => array(),
                    'type' => array(),
                    'media' => array()
                ),
                // Meta tags
                'meta' => array(
                    'name' => array(),
                    'content' => array(),
                    'property' => array(),
                    'charset' => array(),
                    'http-equiv' => array()
                ),
                // No-script fallback
                'noscript' => array(),
                // Iframes (for embeds)
                'iframe' => array(
                    'src' => array(),
                    'height' => array(),
                    'width' => array(),
                    'style' => array(),
                    'frameborder' => array(),
                    'allowfullscreen' => array()
                )
            );

            // Apply security filtering while preserving necessary HTML
            echo wp_kses(wp_unslash($code), $allowed_html) . "\n";
        }
    }
}