<?php
    function sncommunity_theme_setup() {
    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register Menus
    register_nav_menus([
        'primary'   => __('Primary Menu', 'sncommunity'),
        'footer'    => __('Footer Menu', 'sncommunity')
    ]);
    }
add_action('after_setup_theme', 'sncommunity_theme_setup');
?>