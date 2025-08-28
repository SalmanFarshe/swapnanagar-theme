<?php
// ---------------------
// Register CPT: Buildings
// ---------------------
function swapnanagar_register_buildings_cpt() {
    $labels = array(
        'name'               => 'Buildings',
        'singular_name'      => 'Building',
        'menu_name'          => 'Buildings',
        'add_new_item'       => 'Add New Building',
        'all_items'          => 'All Buildings',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-building',
        'supports'      => array('title', 'editor', 'thumbnail'),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'buildings'),
        'show_in_rest'  => true,
    );

    register_post_type('buildings', $args);
}
add_action('init', 'swapnanagar_register_buildings_cpt');