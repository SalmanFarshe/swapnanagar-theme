<?php
function moderncommunity_enqueue_assets() {
    // Bootstrap CSS (Grid + Utilities only)
    wp_enqueue_style('bootstrap-grid', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css', [], '5.3.3', 'all');
    wp_enqueue_style('bootstrap-utilities', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-utilities.min.css', [], '5.3.3', 'all');

    // Theme Styles
    wp_enqueue_style('sn-style', get_stylesheet_uri());
    wp_enqueue_style('sn-root-css', get_template_directory_uri() . '/css/root.css', [], '1.0.0', 'all');

    // AOS CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1', 'all');

    // jQuery (already included by WordPress, but we ensure it loads)
    wp_enqueue_script('jquery');

    // AOS JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);

    // Root JS (depends on jQuery and AOS)
    wp_enqueue_script('sn-root-js', get_template_directory_uri() . '/js/root.js', ['jquery', 'aos-js'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'moderncommunity_enqueue_assets');
