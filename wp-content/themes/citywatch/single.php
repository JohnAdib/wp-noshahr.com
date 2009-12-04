<?php get_header(); ?>

 <div class="row">
  <div class="main">
  <div class="container pages">
  <div class="row">
  <div class="span8 offset2">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <article>
       <h2><?php the_title(); ?></h2>
       <?php
    if(is_home())
    {
      if ( has_post_thumbnail() )
      {
        echo "<a href='".get_permalink()."'>";
        the_post_thumbnail( 'medium');
        echo "</a>";
      }
      the_excerpt();
          }
          else
          {
            the_content();
          }

// $a     = array("sisangan","sahel","jangal", "lake");
// var_dump($a);
// $class_name = array_rand($a,1);
// echo $class_name;
          ?>

       </article>
       <?php endwhile; else: ?>
        <p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
   </div>
   </div>



<!-- <?php get_sidebar(); ?> -->
  </div>
</div>
</div>

<?php get_footer(); ?>
