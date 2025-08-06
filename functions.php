<?php
// Theme Functions for Modern Community Theme

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}


// Theme Setup
include_once('incs/theme-support.php');

// Enqueue Styles & Scripts
include_once('incs/enquestylesheets.php');

// Add Custom Logo Class
function moderncommunity_custom_logo_class($html) {
    $html = str_replace('custom-logo-link', 'custom-logo-link navbar-brand', $html);
    return $html;
}
add_filter('get_custom_logo', 'moderncommunity_custom_logo_class');

// Register Widget Areas (Optional for Sidebar/Footer)
function moderncommunity_widgets_init() {
    register_sidebar([
        'name'          => __('Footer Widgets', 'moderncommunity'),
        'id'            => 'footer-widgets',
        'description'   => __('Widgets for footer section', 'moderncommunity'),
        'before_widget' => '<div class="footer-widget mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title mb-3">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'moderncommunity_widgets_init');
