

<div id="page_nav">
<?php if('ali_pagenav') {ali_pagenav(); } else{ ?>
    <?php next_posts_link();?>
    <?php previous_posts_link();?>
<?php } ?>
</div>

<?php

function ali_pagenav(){
      global $wp_query, $wp_rewrite;
      $pages = '';
      $max = $wp_query->max_num_pages;
      if(!$current = get_query_var('paged')) $current = 1;
      $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
      $args['total'] = $max;
      $args['current'] = $current;
      $total = 1;
      $args['prev_text'] = 'Prev';
      $args['next_text'] = 'Next';
      if($max > 1) echo '</pre>
      <div class="wp_pagenav">';
        if($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span>of</span>'
        . $max . '</p>';
        echo $pages . paginate_links($args);
        if($max > 1) echo'</div> <pre>';
    }
     