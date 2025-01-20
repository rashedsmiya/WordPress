<?php

  // Theme Color   
  $wp_customize->add_section('ali_colors', array(
    'title' => __('Theme Color', 'alihossain'),
    'description' => 'if need you can change your theme color.',
  ));

  $wp_customize->add_setting('ali_bg_color', array(
    'dafault' => '#ffffff',
  ));

  $wp_customize->add_control(new Wp_Customize_color_control($wp_customize, 'ali_bg_color', array(
    'label' => 'Background Color',
    'section' => 'ali_colors',
    'settings' => 'ali_bg_color',
  ))); 

  $wp_customize->add_setting('ali_primary_color', array(
    'dafault' => '#ea1a70',
  ));
    
  $wp_customize->add_control(new Wp_Customize_color_control($wp_customize, 'ali_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'ali_colors',
    'settings' => 'ali_primary_color',
  )));

}  

add_action('customize_register', 'ali_customizar_register');

function ali_theme_color_cus(){
?>
   <style>
      body{background: <?php echo get_theme_mod('ali_bg_color');?>}
      :root{ --pink:#ea1a79; <?php echo get_theme_mod('ali_primary_color');?>}
   </style>
<?php 

}

add_action('wp_head', 'ali_theme_color_cus');  