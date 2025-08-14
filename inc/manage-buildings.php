<?php
    // Register Courses CPT
    function swapnanagar_register_buildings_cpt() {
        $labels = array(
            'name'               => 'Buildings',
            'singular_name'      => 'Building',
            'menu_name'          => 'Buildings',
            'name_admin_bar'     => 'Building',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Building',
            'new_item'           => 'New Building',
            'edit_item'          => 'Edit Building',
            'view_item'          => 'View Building',
            'all_items'          => 'All Buildings',
            'search_items'       => 'Search Buildings',
            'not_found'          => 'No Buildings found.',
            'not_found_in_trash' => 'No Buildings Found in Trash.'
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'menu_icon'          => 'dashicons-welcome-learn-more',
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'        => true,
            'rewrite'            => array( 'slug' => 'buildings' ),
            'show_in_rest'       => true, // Gutenberg enabled
        );

        register_post_type( 'building', $args );
    }
    add_action( 'init', 'swapnanagar_register_buildings_cpt' );

    function swapnanagar_building_meta_box() {
        add_meta_box(
            'building_details',
            'Building Details',
            'swapnanagar_building_meta_box_callback',
            'building',
            'normal',
            'high'
        );
    }
    add_action( 'add_meta_boxes', 'swapnanagar_building_meta_box' );

    function swapnanagar_building_meta_box_callback( $post ) {
        $location = get_post_meta( $post->ID, 'location', true );
        $height   = get_post_meta( $post->ID, 'height', true );
        $floors   = get_post_meta( $post->ID, 'floors', true );
        $price    = get_post_meta( $post->ID, 'price', true );
        ?>
        <p><label>Location: </label><input type="text" name="location" value="<?php echo esc_attr($location); ?>" /></p>
        <p><label>Height: </label><input type="text" name="height" value="<?php echo esc_attr($height); ?>" /></p>
        <p><label>Floors: </label><input type="text" name="floors" value="<?php echo esc_attr($floors); ?>" /></p>
        <p><label>Price: </label><input type="text" name="price" value="<?php echo esc_attr($price); ?>" /></p>
        <?php
    }

    function swapnanagar_save_building_meta( $post_id ) {
        if ( array_key_exists( 'location', $_POST ) ) {
            update_post_meta( $post_id, 'location', sanitize_text_field( $_POST['location'] ) );
        }
        if ( array_key_exists( 'height', $_POST ) ) {
            update_post_meta( $post_id, 'height', sanitize_text_field( $_POST['height'] ) );
        }
        if ( array_key_exists( 'rating', $_POST ) ) {
            update_post_meta( $post_id, 'rating', sanitize_text_field( $_POST['rating'] ) );
        }
        if ( array_key_exists( 'price', $_POST ) ) {
            update_post_meta( $post_id, 'price', sanitize_text_field( $_POST['price'] ) );
        }
    }
    add_action( 'save_post', 'swapnanagar_save_building_meta' );