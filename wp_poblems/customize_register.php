<?php 

function the_latest_css($wp_customize){

    $wp_customize->add_section('footer_section', array(
        'title' => 'Footer area', 
        'priority' => 30,
    )); 
    
    $wp_customize->add_setting('copyright_section', array(
        'default' => 'copyright 2021', 
        'transport' => 'refresh'
    )); 

    $wp_customize->add_control('copyright_section', array(
        'label' => 'Enter your copright text',
        'section' => 'footer_section', 
        'type'   => 'text'
    ));  
}

add_action('customize_register', 'the_latest_css');     