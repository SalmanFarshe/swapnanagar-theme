<?php
    function moderncommunity_enqueue_assets() {
    // Bootstrap CSS (grid + utilities only)
    wp_enqueue_style('bootstrap-grid', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css', [], '5.3.3', 'all');
    wp_enqueue_style('bootstrap-utilities', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-utilities.min.css', [], '5.3.3', 'all');
    
    wp_enqueue_style('sn_style', get_stylesheet_uri());
    wp_enqueue_style('sn-root-css', '' . get_template_directory_uri() . '/css/root.css', [], '1.0.0', 'all');

    // registering js
    wp_enqueue_script('jquery');
    wp_enqueue_script('sn_root_js', get_template_directory_uri() . '/js/root.js', array(),  "1.0.0", "true");
}
add_action('wp_enqueue_scripts', 'moderncommunity_enqueue_assets');

?>