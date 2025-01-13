<?php

<div class="col-md-9">
         <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
</div>

// Menu Register
register_nav_menu('main_menu', __('Main Menu', 'alihossain'));


// Single Menu

function my_theme_register_menus() {
    register_nav_menu('primary', __('Primary Menu', 'my-text-domain'));
}
add_action('after_setup_theme', 'my_theme_register_menus');

// Multiple Menu
function my_theme_register_menus() {
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'my-text-domain'),
        'footer'    => __('Footer Menu', 'my-text-domain'),
    ));
}
add_action('after_setup_theme', 'my_theme_register_menus');


// Html Css Added

wp_nav_menu(array(
    'theme_location' => 'primary', // The menu location slug
    'container'      => 'nav',    // HTML container tag (e.g., <nav>)
    'menu_class'     => 'primary-menu', // CSS class for the menu
));
