 <div class="row auto">

<?php
$the_query = new WP_Query( ['category_name' => 'background', 'orderby' => 'rand', 'posts_per_page' => 1] );

if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query-> the_post();
  if ( has_post_thumbnail() )
  {
?>
  <div class='row auto'>
   <div class='back-img row'>
    <img src="<?php the_post_thumbnail_url('full'); ?>" class='full-img' />
    <div class='text-box <?php echo($post->post_name) ?>'>
     <h1><?php the_title(); echo " ؛ نوشهر \n";?></h1> <?php the_excerpt(); ?>
    </div>
    <a href='category/gallery' data-hint='مشاهده همه جاهای دیدنی نوشهر' class='hint--left hint--info gallery-ink'><img src='<?php
    bloginfo('template_url'); ?>\images\idea.png'></a>

   </div>
  </div>

<?php } endwhile; else: ?><p><?php _e(''); ?></p><?php endif; ?>
 </div>