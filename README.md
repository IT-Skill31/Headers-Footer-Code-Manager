# Headers-Footer-Code-Manager

* Contributors: Adda REFES
* Donate link: https://buymeacoffee.com/designsparkcanada
* Tags: header footer, analytics, custom code, scripts, insert code
* Requires at least: 5.0
* Tested up to: 6.4
* Requires PHP: 7.2 and higher
* Stable tag: 1.0.0
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily add custom code to your WordPress site's header, footer, and body sections without editing theme files.

## Description

Headers Footer Code Manager is a simple but powerful plugin that allows you to insert code into your WordPress website's headers, footers, and body section without editing your theme files. Built with a modern, organized structure, it's perfect for adding tracking codes, custom CSS, meta tags, scripts, and more.

## Key Features

* Insert code to WordPress headers & footers easily
* Add code to the body section (after <body> tag)
* Insert Google Analytics tracking code
* Add Facebook Pixel code
* Implement Google Optimize for A/B testing
* Add Google Search Console verification code
* Insert custom CSS and HTML
* Add Google Tag Manager scripts
* Implement Microsoft Clarity tracking
* Add Bing Webmaster verification
* Insert Google AdSense code

## Technical Features

* Modern Object-Oriented Architecture
* Separated admin and frontend functionality
* Optimized asset loading (CSS/JS only loaded when needed)
* Clean and maintainable code structure
* Extensible through WordPress actions and filters

## Directory Structure

```
headers-footer-code-manager/
├── assets/
│   ├── css/
│   │   └── admin.css
│   └── js/
│       └── admin.js
├── inc/
│   ├── views/
│   │   └── admin-page.php
│   ├── class-headers-footer-code-manager.php
│   ├── class-headers-footer-code-manager-admin.php
│   └── class-headers-footer-code-manager-frontend.php
├── headers-footer-code-manager.php
└── readme.txt
```

## For Developers

The plugin follows WordPress coding standards and provides various filters and actions for customization:

* 'whf_before_header_code'
* 'whf_after_header_code'
* 'whf_before_body_code'
* 'whf_after_body_code'
* 'whf_before_footer_code'
* 'whf_after_footer_code'

## Installation

1. Upload the `headers-footer-code-manager` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Settings' -> 'Headers & Footers' to configure the plugin

For manual installation:
1. Download the plugin ZIP file
2. Go to WordPress admin > Plugins > Add New
3. Click "Upload Plugin"
4. Upload the ZIP file
5. Activate the plugin

#  Frequently Asked Questions

## Where can I find the settings page?

After activation, go to Settings -> Headers & Footers in your WordPress admin panel.

## Is it safe to add custom code?

Yes, the plugin includes security measures to prevent unauthorized access and code injection. However, only add code from trusted sources.

## Will it slow down my website?

No, the plugin is built with performance in mind:
* CSS/JS files are only loaded on the admin page
* Minimal database queries
* Efficient code structure

## Can I add different codes for different pages? 

The current version supports site-wide code insertion. Page-specific insertion will be available in future updates.

##  What if my theme doesn't support wp_body_open?

For themes that don't support wp_body_open hook (WordPress 5.2+), the body code will not be inserted. Header and footer insertions will work normally.

## Can I extend the plugin functionality?

Yes, the plugin is built with extensibility in mind. Use the provided WordPress actions and filters to customize or extend functionality.

## Screenshots

1. Main settings page
2. Header code section
3. Body code section
4. Footer code section
5. Plugin architecture diagram

## Changelog

= 1.0.0 =
* Initial release
* Modern OOP architecture implementation
* Separated admin and frontend functionality
* Asset optimization
* Security features implementation

## Upgrade Notice 

= 1.0.0 =
Initial release of Headers Footer Code Manager plugin with modern architecture.

## Additional Information 

For support, feature requests, or bug reporting, please visit:
* [Support Forum](https://wordpress.org/support/plugin/headers-footer-code-manager/)
* [GitHub Repository](https://github.com/yourusername/headers-footer-code-manager)
* [Documentation](https://your-documentation-url.com)

= Contributing =

We welcome contributions! Please check our GitHub repository for contribution guidelines.

= Development =

* GitHub Repository: [https://github.com/yourusername/headers-footer-code-manager](https://github.com/yourusername/headers-footer-code-manager)
* Issue Tracker: [https://github.com/yourusername/headers-footer-code-manager/issues](https://github.com/yourusername/headers-footer-code-manager/issues)

## Credits 

Headers Footer Code Manager is developed and maintained by [Your Name/Company]. Special thanks to the WordPress community for their continuous support and feedback.