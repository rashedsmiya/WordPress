<?php

    $wp_customize->add_section('all_footer_option', array(
        'title' => __('Footer Option', 'alihossain'),
        'description' => 'if you interest or change or update your footer setting you can do it',
    ));

  //  add_section(): Adds a new  অংশ to the WordPress Customizer.

  // 'all_footer_option': The unique ID for the section.

  // 'title': The visible name of the section in the Customizer.

  //   'description': A short explanation of the section's purpose.

  // __('Footer Option', 'alihossain'): Makes the section title translatable. 'alihossain' is the text domain.


  $wp_customize->add_setting('ali_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Procoder BD',
));

// add_setting(): Registers a new setting in the WordPress Customizer.

// 'ali_copyright_section': The unique ID for the setting.

// 'default': The default value for the setting (&copy; Copyright 2021 | Procoder BD).

$wp_customize->add_control('ali_copyright_section', array(
    'label' => 'copyright text', 
    'description' => 'if you need can you update copy right here',
    'setting' => 'ali_copyright_section',
    'section' => 'all_footer_option'
));


// add_control(): Adds a control (UI input field) for the setting.

// 'ali_copyright_section': The unique ID for the control.

// 'label': The label displayed above the input field.

// 'description': An optional description displayed below the label.

// 'setting': Links the control to the setting ('ali_copyright_section').

// 'section': Specifies the section ('all_footer_option') where this control will appear.

add_action('customize_register', 'ali_customizar_reister');

// add_action(): Hooks a custom function into a WordPress action.

// 'customize_register': This action is triggered when the WordPress Customizer is being initialized.

// 'ali_customizar_reister': The custom function that registers the section, setting, and control.