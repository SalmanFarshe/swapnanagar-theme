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

function swapnanagar_register_features_cpt() {
    $labels = [
        'name'               => 'Community Features',
        'singular_name'      => 'Feature',
        'menu_name'          => 'Community Features',
        'add_new'            => 'Add New Feature',
        'add_new_item'       => 'Add New Feature',
        'edit_item'          => 'Edit Feature',
        'new_item'           => 'New Feature',
        'all_items'          => 'All Features',
        'view_item'          => 'View Feature',
        'search_items'       => 'Search Features',
        'not_found'          => 'No features found',
        'not_found_in_trash' => 'No features found in Trash',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => 'swapnanagar_main_menu', // We'll create this menu slug next
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'supports'           => ['title', 'editor', 'excerpt'],
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-building', // icon for the submenu
    ];

    register_post_type('community_feature', $args);
}
add_action('init', 'swapnanagar_register_features_cpt');
function swapnanagar_register_main_menu() {
    add_menu_page(
        'Swapnanagar',             // Page title
        'Swapnanagar',             // Menu title
        'manage_options',          // Capability required
        'swapnanagar_main_menu',   // Menu slug
        '',                        // Callback function (empty because submenu pages handle content)
        'dashicons-admin-home',    // Menu icon
        4                         // Menu position
    );
}
add_action('admin_menu', 'swapnanagar_register_main_menu');

function swapnanagar_register_buildings_cpt() {
    $labels = [
        'name'               => 'Buildings',
        'singular_name'      => 'Building',
        'menu_name'          => 'Buildings',
        'add_new'            => 'Add New Building',
        'add_new_item'       => 'Add New Building',
        'edit_item'          => 'Edit Building',
        'new_item'           => 'New Building',
        'all_items'          => 'All Buildings',
        'view_item'          => 'View Building',
        'search_items'       => 'Search Buildings',
        'not_found'          => 'No buildings found',
        'not_found_in_trash' => 'No buildings found in Trash',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => 'swapnanagar_main_menu', // under your main menu
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'          => 'dashicons-building',
    ];

    register_post_type('building', $args);
}
add_action('init', 'swapnanagar_register_buildings_cpt');

function swapnanagar_building_meta_boxes() {
    add_meta_box(
        'building_info',
        'Building Info',
        'swapnanagar_building_meta_box_callback',
        'building',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'swapnanagar_building_meta_boxes');

function swapnanagar_building_meta_box_callback($post) {
    wp_nonce_field('swapnanagar_save_building_meta', 'swapnanagar_building_meta_nonce');

    $flats = get_post_meta($post->ID, '_building_flats', true);
    $to_let = get_post_meta($post->ID, '_building_to_let', true);

    echo '<label for="building_flats">Number of Flats:</label> ';
    echo '<input type="number" id="building_flats" name="building_flats" value="' . esc_attr($flats) . '" min="0" />';

    echo '<br><br><label for="building_to_let">Number of To-Let Flats:</label> ';
    echo '<input type="number" id="building_to_let" name="building_to_let" value="' . esc_attr($to_let) . '" min="0" />';
}

function swapnanagar_save_building_meta($post_id) {
    if (!isset($_POST['swapnanagar_building_meta_nonce'])) return;
    if (!wp_verify_nonce($_POST['swapnanagar_building_meta_nonce'], 'swapnanagar_save_building_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['building_flats'])) {
        update_post_meta($post_id, '_building_flats', intval($_POST['building_flats']));
    }

    if (isset($_POST['building_to_let'])) {
        update_post_meta($post_id, '_building_to_let', intval($_POST['building_to_let']));
    }
}
add_action('save_post', 'swapnanagar_save_building_meta');



function swapnanagar_register_tolet_cpt() {
    $labels = [
        'name'               => 'To-Let Listings',
        'singular_name'      => 'To-Let',
        'menu_name'          => 'To-Let Listings',
        'add_new'            => 'Add New To-Let',
        'add_new_item'       => 'Add New To-Let',
        'edit_item'          => 'Edit To-Let',
        'new_item'           => 'New To-Let',
        'all_items'          => 'All To-Lets',
        'view_item'          => 'View To-Let',
        'search_items'       => 'Search To-Lets',
        'not_found'          => 'No To-Lets found',
        'not_found_in_trash' => 'No To-Lets found in Trash',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => 'swapnanagar_main_menu',  // under Swapnanagar menu
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'supports'           => ['title', 'editor', 'excerpt'],
        'menu_icon'          => 'dashicons-admin-home',
    ];

    register_post_type('tolet', $args);
}
add_action('init', 'swapnanagar_register_tolet_cpt');


function swapnanagar_tolet_meta_boxes() {
    add_meta_box(
        'tolet_details',
        'To-Let Details',
        'swapnanagar_tolet_meta_box_callback',
        'tolet',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'swapnanagar_tolet_meta_boxes');

function swapnanagar_tolet_meta_box_callback($post) {
    wp_nonce_field('swapnanagar_save_tolet_meta', 'swapnanagar_tolet_meta_nonce');

    $flat_number = get_post_meta($post->ID, '_flat_number', true);
    $building = get_post_meta($post->ID, '_building', true);

    echo '<label for="flat_number">Flat Number:</label> ';
    echo '<input type="text" id="flat_number" name="flat_number" value="' . esc_attr($flat_number) . '" />';

    echo '<br><br><label for="building">Building Name:</label> ';
    echo '<input type="text" id="building" name="building" value="' . esc_attr($building) . '" />';
}

function swapnanagar_save_tolet_meta($post_id) {
    if (!isset($_POST['swapnanagar_tolet_meta_nonce'])) return;
    if (!wp_verify_nonce($_POST['swapnanagar_tolet_meta_nonce'], 'swapnanagar_save_tolet_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['flat_number'])) {
        update_post_meta($post_id, '_flat_number', sanitize_text_field($_POST['flat_number']));
    }
    if (isset($_POST['building'])) {
        update_post_meta($post_id, '_building', sanitize_text_field($_POST['building']));
    }
}
add_action('save_post', 'swapnanagar_save_tolet_meta');

