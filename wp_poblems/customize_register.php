<?php 

function the_latest_css($wp_customize){
    // add_section: Adds a new section to the WordPress Customizer
    $wp_customize->add_section('footer_section', array( 
        'title' => 'Footer area', 
        'priority' => 30,
    )); 
    // add_setting: Creates a new setting in the Customizer.
    $wp_customize->add_setting('copyright_section', array(
        'default' => 'copyright 2021', 
        'transport' => 'refresh'
    )); 
    // add_control: Adds a UI element (control) to the Customizer, allowing the user to interact with the setting.
    $wp_customize->add_control('copyright_section', array(
        'label' => 'Enter your copright text',
        'section' => 'footer_section', 
        'type'   => 'text'
    ));  
}

add_action('customize_register', 'the_latest_css');     

// Theme Functon 
function ali_customizar_reister($wp_customize){
    $wp_customize->add_section('ali_header_area', array(
        'title' => __('Header Area', 'alihossain'),
        'priority' => 30,
        'description' => 'if you interasted to update your header area, your can do it here'
    )); 

    $wp_customize->add_setting('ali_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo2.png', 
    ));

    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'ali_logo', array(
        'label'   => 'Logo Upload',
        'description' => 'if you interasted to update your header area, your can do it here',
        'setting' => 'ali_logo',
        'section' => 'ali_header_area', 
    ) 
  )); 
}

add_action('customize_register', 'ali_customizar_reister');