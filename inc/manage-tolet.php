<?php
    function create_tolet_post_type() {
    $labels = array(
        'name'                  => 'To-Let',
        'singular_name'         => 'To-Let',
        'menu_name'             => 'To-Let',
        'name_admin_bar'        => 'To-Let',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New To-Let',
        'new_item'              => 'New To-Let',
        'edit_item'             => 'Edit To-Let',
        'view_item'             => 'View To-Let',
        'all_items'             => 'All To-Let Posts',
        'search_items'          => 'Search To-Let',
        'not_found'             => 'No To-Let found.',
        'not_found_in_trash'    => 'No To-Let found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'tolet'),
        'menu_icon'          => 'dashicons-building', // House icon
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('tolet', $args);
}
add_action('init', 'create_tolet_post_type');

// Add Meta Box for To-Let Details
function tolet_meta_boxes() {
    add_meta_box('tolet_details', 'To-Let Details', 'tolet_meta_callback', 'tolet', 'normal', 'high');
}
add_action('add_meta_boxes', 'tolet_meta_boxes');

function tolet_meta_callback($post) {
    $rent = get_post_meta($post->ID, '_tolet_rent', true);
    $location = get_post_meta($post->ID, '_tolet_location', true);
    ?>
    <p><label>Rent: </label><input type="text" name="tolet_rent" value="<?php echo esc_attr($rent); ?>" style="width:100%"></p>
    <p><label>Location: </label><input type="text" name="tolet_location" value="<?php echo esc_attr($location); ?>" style="width:100%"></p>
    <?php
}

function save_tolet_meta($post_id) {
    if (isset($_POST['tolet_rent'])) {
        update_post_meta($post_id, '_tolet_rent', sanitize_text_field($_POST['tolet_rent']));
    }
    if (isset($_POST['tolet_location'])) {
        update_post_meta($post_id, '_tolet_location', sanitize_text_field($_POST['tolet_location']));
    }
}
add_action('save_post', 'save_tolet_meta');
