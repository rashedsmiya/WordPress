<?php 

function custom_styles() {
    wp_enqueue_style(
        'my-custom-style', // Unique handle
        get_stylesheet_directory_uri() . '/css/style.css', // URL of the stylesheet
        array(), // No dependencies
        '1.0.0', // Version number
        'all' // Media type (e.g., screen, print, all)
    );
}

add_action('wp_enqueue_scripts', 'custom_styles');





function ali_css_js_file_calling() { 
    // Enqueue default stylesheet
    wp_enqueue_style('ali-style', get_stylesheet_uri());

    // Register additional stylesheets
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');

    // Enqueue registered stylesheets
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // Enqueue JavaScript libraries
    wp_enqueue_script('jquery'); // Default WordPress jQuery
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true'); // Bootstrap JS
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true'); // Custom JS
}
