<!-- inc/views/admin-page.php -->
<div class="wrap">
    <div class="whf-container">
        <div class="whf-header">
            <h1><?php esc_html_e('Headers & Footers Settings', 'headers-footer-code-manager'); ?></h1>
        </div>
        
        <form method="post" action="options.php">
            <?php
            settings_fields('whf_settings');
            do_settings_sections('whf_settings');
            ?>
            
            <div class="whf-section">
                <h2>
                    <span class="dashicons dashicons-editor-code"></span>
                    <?php esc_html_e('Header Code', 'headers-footer-code-manager'); ?>
                </h2>
                
                <div class="whf-description">
                    <p>
                        <?php esc_html_e('Add code to <code>&lt;head&gt;</code> section of your site. This is useful for:', 'headers-footer-code-manager'); ?>
                    </p>
                    <ul>
                        <li><?php esc_html_e('Google Analytics tracking code', 'headers-footer-code-manager'); ?></li>
                        <li><?php esc_html_e('Meta verification tags', 'headers-footer-code-manager'); ?></li>
                        <li><?php esc_html_e('Custom CSS styles', 'headers-footer-code-manager'); ?></li>
                    </ul>
                </div>
                
                <div class="whf-textarea-wrapper">
                    <textarea name="whf_header_code" class="large-text code" rows="10"><?php echo esc_textarea(get_option('whf_header_code')); ?></textarea>
                </div>
            </div>
            
            <div class="whf-section">
                <h2>
                    <span class="dashicons dashicons-layout"></span>
                    <?php esc_html_e('Body Code', 'headers-footer-code-manager'); ?>
                </h2>
                
                <div class="whf-description">
                    <p>
                        <?php esc_html_e('Add code right after <code>&lt;body&gt;</code> tag. Useful for:', 'headers-footer-code-manager'); ?>
                    </p>
                    <ul>
                        <li><?php esc_html_e('Google Tag Manager', 'headers-footer-code-manager'); ?></li>
                        <li><?php esc_html_e('Facebook Pixel code', 'headers-footer-code-manager'); ?></li>
                        <li><?php esc_html_e('Custom body scripts', 'headers-footer-code-manager'); ?></li>
                    </ul>
                </div>
                
                <div class="whf-textarea-wrapper">
                    <textarea name="whf_body_code" class="large-text code" rows="10"><?php echo esc_textarea(get_option('whf_body_code')); ?></textarea>
                </div>
            </div>
            
            <div class="whf-section">
                <h2>
                    <span class="dashicons dashicons-arrow-down"></span>
                    <?php esc_html_e('Footer Code', 'headers-footer-code-manager'); ?>
                </h2>
                
                <div class="whf-description">
                    <p>
                        <?php esc_html_e('Add code to footer before closing <code>&lt;/body&gt;</code> tag. Ideal for:', 'headers-footer-code-manager'); ?>
                    </p>
                    <ul>
                        <li><?php esc_html_e('Google AdSense code', 'headers-footer-code-manager'); ?></li>
                        <li><?php esc_html_e('Custom JavaScript code', 'headers-footer-code-manager'); ?></li>
                        <li><?php esc_html_e('Other tracking codes', 'headers-footer-code-manager'); ?></li>
                    </ul>
                </div>
                
                <div class="whf-textarea-wrapper">
                    <textarea name="whf_footer_code" class="large-text code" rows="10"><?php echo esc_textarea(get_option('whf_footer_code')); ?></textarea>
                </div>
            </div>
            
            <div class="whf-submit">
                <?php submit_button(esc_html__('Save Changes', 'headers-footer-code-manager'), 'primary', 'submit', false); ?>
            </div>
        </form>
    </div>
</div>