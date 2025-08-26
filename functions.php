<?php
    // Enqueue styles and scripts
    function swapnanagar_enqueue_scripts() {
        // Main stylesheet
        wp_enqueue_style('swapnanagar-style', get_stylesheet_uri());

        // Assets CSS
        wp_enqueue_style('swapnanagar-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0');

        wp_enqueue_style('swapnanagar-tiny-slider', get_template_directory_uri() . '/assets/css/tiny-slider.css', array(), '1.0.0');
        
        wp_enqueue_style('swapnanagar-glightbox', get_template_directory_uri() . '/assets/css/glightbox.min.css', array(), '1.0.0');
        
        wp_enqueue_style('swapnanagar-lineicons', get_template_directory_uri() . '/assets/css/LineIcons.2.0.css', array(), '1.0.0');

        wp_enqueue_style('swapnanagar-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-5.0.5-alpha.min.css', array(), '5.3.2');
        
        // wp_enqueue_style('swapnanagar-bootstrap', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');

        wp_enqueue_style('swapnanagar-main-style', get_template_directory_uri() . '/assets/css/root.css', array(), '1.0.0');

        // Assets JS
        wp_enqueue_script('jquery');

        wp_enqueue_script('swapnanagar-tiny-slider', get_template_directory_uri() . '/assets/js/tiny-slider.js', array('jquery'), '1.0.0', true);
        
        wp_enqueue_script('swapnanagar-glightbox', get_template_directory_uri() . '/assets/js/glightbox.min.js', array('jquery'), '1.0.0', true);

        wp_enqueue_script('swapnanagar-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle-5.0.0.alpha-min.js', array('jquery'), '5.3.2', true);

        wp_enqueue_script('swapnanagar-contact', get_template_directory_uri() . '/assets/js/contact-form.js', array('jquery'), '5.0.5', true);

        wp_enqueue_script('swapnanagar-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true);
        
        wp_enqueue_script('swapnanagar-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'swapnanagar_enqueue_scripts');


    // Register navigation menus
    function swapnanagar_register_menus() {
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'swapnanagar'),
        ));
    }
    add_action('init', 'swapnanagar_register_menus');

    // Add <li> class
    add_filter( 'nav_menu_css_class', function( $classes, $item, $args ) {
        if ( isset( $args->add_li_class ) ) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }, 10, 3 );

    // Add <a> class
    add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
        if ( isset( $args->add_a_class ) ) {
            $atts['class'] = $args->add_a_class;
        }
        return $atts;
    }, 10, 3 );

    // theme support
    // Enable post thumbnails for posts, pages, and custom post types
    add_theme_support('post-thumbnails', array('post', 'page', 'service', 'buildings', 'libraries', 'tutor', 'tolet')); // add your CPTs

    // Optional: define custom image sizes
    add_image_size('swapnanagar-small', 300, 200, true);
    add_image_size('swapnanagar-medium', 600, 400, true);
    add_image_size('swapnanagar-large', 900, 600, true);


    //  building section options
    include_once('inc/manage-buildings.php');

    //  library section options
    include_once('inc/manage-library.php');
    
    //  tutor section options
    include_once('inc/manage-tutors.php');
    
    //  tolet section options
    include_once('inc/manage-tolet.php');