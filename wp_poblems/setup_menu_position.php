
<?php echo get_theme_mod('ali_menu_position'); ?>

<?php
// Menu Position Option
    $wp_customize->add_section('ali_menu_option', array(
    'title' => __('Menu Position Option', 'alihossain'), 
    'description' => 'if you interasted to update your header area, your can do it here',
    ));
    
    $wp_customize->add_setting('ali_menu_position', array(
      'default' => 'right_menu', 
    ));
  
    $wp_customize->add_control('ali_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position', 
        'setting' => 'ali_menu_position', 
        'section' => 'ali_menu_option', 
        'type'    => 'radio', 
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),   
    ));
}

add_action('customize_register', 'ali_customizar_reister');
