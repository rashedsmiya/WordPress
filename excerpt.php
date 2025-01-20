<?php

// Except to 40 Word
    function new_excerpt_more($more) {
      global $post;
      return '<br> <br> <a class="redmore" href="'. get_permalink($post->ID) . '">Read More</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more'); 

    function ali_excerpt_lenght($length){
        return 50; 
    } 
    add_filter('excerpt_length', 'ali_excerpt_lenght', 999); 

    