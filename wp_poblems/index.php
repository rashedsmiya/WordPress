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
