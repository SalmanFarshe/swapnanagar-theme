<?php
function moderncommunity_enqueue_assets() {
    // Bootstrap CSS (Grid + Utilities only)
    wp_enqueue_style('bootstrap-grid', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css', [], '5.3.3', 'all');
    wp_enqueue_style('bootstrap-utilities', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-utilities.min.css', [], '5.3.3', 'all');

    // Animate.css
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', [], '4.1.1', 'all');

    // AOS CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1', 'all');

    // Theme Styles
    wp_enqueue_style('sn-root-css', get_template_directory_uri() . '/css/root.css', [], '1.0.0', 'all');
    wp_enqueue_style('sn-style', get_stylesheet_uri());

    // jQuery (comes with WordPress)
    wp_enqueue_script('jquery');

    // AOS JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);

    // WOW.js
    wp_enqueue_script('wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', ['jquery'], '1.1.2', true);

    // Root JS (your custom JS, dependent on jQuery, AOS, WOW.js)
    wp_enqueue_script('sn-root-js', get_template_directory_uri() . '/js/root.js', ['jquery', 'aos-js', 'wow-js'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'moderncommunity_enqueue_assets');
