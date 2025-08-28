<?php
    
// ---------------------
// Register CPT: Owners
// ---------------------
function swapnanagar_register_owners_cpt() {
    $labels = array(
        'name'               => 'Owners',
        'singular_name'      => 'Owner',
        'menu_name'          => 'Owners',
        'add_new_item'       => 'Add New Owner',
        'all_items'          => 'All Owners',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-groups',
        'supports'      => array('title', 'editor', 'thumbnail'),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'owners'),
        'show_in_rest'  => true,
    );

    register_post_type('owners', $args);
}
add_action('init', 'swapnanagar_register_owners_cpt');


// ---------------------
// Owner Meta Box: Linked Buildings
// ---------------------
function swapnanagar_owner_buildings_meta_box() {
    add_meta_box(
        'owner_buildings',
        'Linked Buildings',
        'swapnanagar_owner_buildings_meta_callback',
        'owners',
        'side'
    );
}
add_action('add_meta_boxes', 'swapnanagar_owner_buildings_meta_box');

function swapnanagar_owner_buildings_meta_callback($post) {
    wp_nonce_field('swapnanagar_save_linked_buildings', 'swapnanagar_owner_buildings_nonce');

    $linked_buildings = get_post_meta($post->ID, '_linked_buildings', true);
    if (!is_array($linked_buildings)) $linked_buildings = array();

    $buildings = get_posts(array(
        'post_type'      => 'buildings',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC',
    ));

    echo '<select name="linked_buildings[]" multiple style="width:100%; min-height:150px;">';
    foreach($buildings as $building) {
        $selected = in_array($building->ID, $linked_buildings) ? 'selected' : '';
        echo '<option value="' . esc_attr($building->ID) . '" ' . $selected . '>' . esc_html($building->post_title) . '</option>';
    }
    echo '</select>';
}

// Save Linked Buildings
function swapnanagar_save_owner_buildings_meta($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (!isset($_POST['swapnanagar_owner_buildings_nonce'])) return;
    if (!wp_verify_nonce($_POST['swapnanagar_owner_buildings_nonce'], 'swapnanagar_save_linked_buildings')) return;

    if (isset($_POST['linked_buildings']) && is_array($_POST['linked_buildings'])) {
        $linked_buildings = array_map('intval', $_POST['linked_buildings']);
        update_post_meta($post_id, '_linked_buildings', $linked_buildings);
    } else {
        delete_post_meta($post_id, '_linked_buildings');
    }
}
add_action('save_post_owners', 'swapnanagar_save_owner_buildings_meta');