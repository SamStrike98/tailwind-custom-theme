<?php
    // Load stylesheets
    function load_css()
    {
        //(given name, link to file, dependencies, version number, media)
        wp_register_style('tailwind_output', get_template_directory_uri() . '/src/output.css', array(), false, 'all');
        wp_enqueue_style('tailwind_output');

        wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');

    }

    add_action('wp_enqueue_scripts', 'load_css');
?>