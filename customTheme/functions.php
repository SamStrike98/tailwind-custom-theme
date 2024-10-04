<?php
    // Load stylesheets
    function load_css()
    {
        //(given name, link to file, dependencies, version number, media)
        wp_register_style('tailwind_output', get_template_directory_uri() . '/src/output.css', array(), false, 'all');
        wp_enqueue_style('tailwind_output');

        wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');

        wp_register_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false, 'all');
        wp_enqueue_style('font_awesome');

        wp_register_style('google_font_orbitron', 'https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap', array(), null, 'all');
		wp_enqueue_style('google_font_orbitron');

    }

    add_action('wp_enqueue_scripts', 'load_css');

        // Load JavaScript
    function load_js()
    {

        //(given name, link to file, dependencies, version number, put script in footer? true/false)
        wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), false, true);
        wp_enqueue_script('main');



    }

    add_action('wp_enqueue_scripts', 'load_js');

        // Theme Options
    add_theme_support('menus');
    add_theme_support( 'custom-logo' );
    add_theme_support('widgets');
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

        //Menus
    register_nav_menus(
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
            'footer-upper-menu' => 'Footer Upper Menu Location',
            'footer-lower-menu' => 'Footer Lower Menu Location',
        )

    );


        // Register Sidebars
    function my_sidebars()
    {
        register_sidebar(
            array(
                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
            );

        register_sidebar(
            array(
                'name' => 'Car Sidebar',
                'id' => 'car-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
            );
    };

    add_action('widgets_init', 'my_sidebars');

    // Custom Post Type
    function cars_custom_post_type(){
        $args = array(
            'labels' => array(
                'name' => 'Cars',
                'singular' => 'Car'
            ),
            'hierarchical' => true,
            'menu_icon' => 'dashicons-car',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'thumbnail', 'custom-fields', 'category'),
        );

        register_post_type('cars', $args);
    };

    add_action('init', 'cars_custom_post_type');
?>