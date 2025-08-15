<?php
    // Register Tutors Custom Post Type
    function swapnanagar_register_tutors_cpt() {
        $labels = array(
            'name'               => 'Tutors',
            'singular_name'      => 'Tutor',
            'menu_name'          => 'Tutors',
            'name_admin_bar'     => 'Tutor',
            'add_new'            => 'Add New Tutor',
            'add_new_item'       => 'Add New Tutor',
            'new_item'           => 'New Tutor',
            'edit_item'          => 'Edit Tutor',
            'view_item'          => 'View Tutor',
            'all_items'          => 'All Tutors',
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'menu_icon'          => 'dashicons-welcome-learn-more',
            'supports'           => array('title', 'editor', 'thumbnail'),
            'has_archive'        => true,
            'rewrite'            => array('slug' => 'tutors'),
            'show_in_rest'       => true,
        );

        register_post_type('tutor', $args);
    }
    add_action('init', 'swapnanagar_register_tutors_cpt');
// Add Tutor Social Links Meta Box
function swapnanagar_add_tutor_meta_boxes() {
    add_meta_box(
        'tutor_social_links',
        'Tutor Social Links',
        'swapnanagar_tutor_social_links_callback',
        'tutor',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'swapnanagar_add_tutor_meta_boxes');

function swapnanagar_tutor_social_links_callback($post) {
    $facebook = get_post_meta($post->ID, '_facebook', true);
    $twitter  = get_post_meta($post->ID, '_twitter', true);
    $instagram= get_post_meta($post->ID, '_instagram', true);
    ?>
    <p><label>Facebook URL:</label><br>
    <input type="url" name="facebook" value="<?php echo esc_url($facebook); ?>" style="width:100%;"></p>

    <p><label>Twitter URL:</label><br>
    <input type="url" name="twitter" value="<?php echo esc_url($twitter); ?>" style="width:100%;"></p>

    <p><label>Instagram URL:</label><br>
    <input type="url" name="instagram" value="<?php echo esc_url($instagram); ?>" style="width:100%;"></p>
    <?php
}

function swapnanagar_save_tutor_meta($post_id) {
    if (array_key_exists('facebook', $_POST)) {
        update_post_meta($post_id, '_facebook', esc_url($_POST['facebook']));
    }
    if (array_key_exists('twitter', $_POST)) {
        update_post_meta($post_id, '_twitter', esc_url($_POST['twitter']));
    }
    if (array_key_exists('instagram', $_POST)) {
        update_post_meta($post_id, '_instagram', esc_url($_POST['instagram']));
    }
}
add_action('save_post', 'swapnanagar_save_tutor_meta');
