<?php
// Register Library CPT
function swapnanagar_register_librarys_cpt() {
    $labels = array(
        'name'               => 'Libraries',
        'singular_name'      => 'Library',
        'menu_name'          => 'Libraries',
        'name_admin_bar'     => 'Library',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Book',
        'new_item'           => 'New Book',
        'edit_item'          => 'Edit Book',
        'view_item'          => 'View Book',
        'all_items'          => 'All Books',
        'search_items'       => 'Search Books',
        'not_found'          => 'No books found.',
        'not_found_in_trash' => 'No books found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-book',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'libraries' ),
        'show_in_rest'       => true, // Gutenberg enabled
    );

    register_post_type( 'libraries', $args );
}
add_action( 'init', 'swapnanagar_register_librarys_cpt' );

// Add Meta Box for Book Details
function swapnanagar_library_meta_box() {
    add_meta_box(
        'library_details',
        'Book Details',
        'swapnanagar_library_meta_box_callback',
        'library',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'swapnanagar_library_meta_box' );

// Meta Box Fields
function swapnanagar_library_meta_box_callback( $post ) {
    $author           = get_post_meta( $post->ID, 'author', true );
    $publisher        = get_post_meta( $post->ID, 'publisher', true );
    $publication_year = get_post_meta( $post->ID, 'publication_year', true );
    $pages            = get_post_meta( $post->ID, 'pages', true );
    $price            = get_post_meta( $post->ID, 'price', true );
    ?>
    <p><label>Author:</label><br>
        <input type="text" name="author" value="<?php echo esc_attr($author); ?>" style="width:100%;" />
    </p>
    <p><label>Publisher:</label><br>
        <input type="text" name="publisher" value="<?php echo esc_attr($publisher); ?>" style="width:100%;" />
    </p>
    <p><label>Publication Year:</label><br>
        <input type="number" name="publication_year" value="<?php echo esc_attr($publication_year); ?>" min="0" style="width:100%;" />
    </p>
    <p><label>Pages:</label><br>
        <input type="number" name="pages" value="<?php echo esc_attr($pages); ?>" min="0" style="width:100%;" />
    </p>
    <p><label>Price (leave blank or 0 for Free):</label><br>
        <input type="number" step="0.01" name="price" value="<?php echo esc_attr($price); ?>" style="width:100%;" />
    </p>
    <?php
}

// Save Meta Box Data
function swapnanagar_save_library_meta( $post_id ) {
    $fields = array( 'author', 'publisher', 'publication_year', 'pages', 'price' );
    foreach ( $fields as $field ) {
        if ( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'swapnanagar_save_library_meta' );
