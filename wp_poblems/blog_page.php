<?php 

  // The main template file

  get_header();

?>

<section id="body_area">
    <div class="container">
      <div class="row"> 
        <div class="col-md-9">

        <?php 
          if(have_posts()) : 
            while (have_posts()) : the_post();
        ?>
         <div class="blog_area">
              <div class="post_thumb">
               <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail('post-thumbnails');?></a>
              </div>
              <div class="post_details">
                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <?php the_excerpt(); ?>
              </div>
        </div>
          <?php 
            endwhile; 
            else:
              _e('No Post Found');
            endif;
          ?>
        </div>
        <div class="col-md-3">
          <h2>This is sidebar area</h2>
        </div>
      </div> 
    </div>  
</section> 

<?php 
  // the footer menu
  get_footer();
?>


<?php 


// Theme Title
add_theme_support('title-tag');

// Thumbnail Image Area
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size('post-thumbnails', 970, 350, true);

