<?php

    // Walker Menu Properties
    function ali_nav_description($item_output, $item, $args){
        if( !empty($item->description) && is_object($args) && property_exists($args, 'link_after')){
            $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);  
        }
        return $item_output;
    }

    add_filter('walker_nav_menu_start_el', 'ali_nav_description', 10, 3);
 

    