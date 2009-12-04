  <div class="aside">
  <div class="row auto">
        <?php $i = 0; ?>

   <?php if (have_posts()) : while (have_posts()) : the_post();
        if (($i%4) === 0)
         {
          echo "</div> <div class='row auto'>";
         }
         ?>
   <div class="span3 images">
   <?php
  if ( has_post_thumbnail() )
  {
    echo "<div class='thumbnail_img'><a href='".get_permalink()."'>";
    the_post_thumbnail( 'cover');
    echo "<div class=hover-thumbnail><p>";
    the_title();
    echo "</p></div><i class='fa fa-arrow-left' aria-hidden='true'></i><span class='mosallas'></span></a></div>";
  }?>

   <?php

      $i=$i+1;
  ?>
   </div>
    <?php  endwhile; else: ?>
   <p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
  </div>
</div>


