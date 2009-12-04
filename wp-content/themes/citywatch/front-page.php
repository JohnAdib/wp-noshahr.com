<?php get_header(); ?>
 <div class="video-bg">
   <i class="fa fa-chevron-down" aria-hidden="true"></i>
 </div>
  <video playsinline autoplay loop poster="polina.jpg" id="bgvid" class="videos">
  <source src="<?php bloginfo('template_url'); ?>\images\video.mp4" type="video/mp4">
 </video>


<?php require_once 'category-background.php'; ?>




 <div class="span12 property">
   <p><?php bloginfo('description'); ?></p>
 </div>

 <div class="span12 detail">
  <div class="row">
   <div class="span6 populate">
    <p>جمعیت</p>
    <p><i class="fa fa-user" aria-hidden="true"></i> ۱۲۸,۶۴۷ نفر</p>
   </div>
   <div class="span6 height">
    <p>ارتفاع از سطح دریا</p>
    <p><i class="fa fa-arrows-v" aria-hidden="true"></i> ۲۰/۹- متر</p>
   </div>
  </div>
 </div>

 <div class="span12 port">
  <div class="text-box">
    <?php dynamic_sidebar( 'widget-port' ); ?>
  </div>
 </div>

 <div class="hotel">
    <div class="container">
      <div class="property">
        <?php dynamic_sidebar( 'widget-eghamat' ); ?>
      </div>
    </div>
  </div>

<div class="images-box">
  <div class="container">
    <div class="row">
      <div class="span4 hotel_img">
        <div class="cover"><h3><strong>هتل</strong></h3><img src="<?php bloginfo('template_url'); ?>\images\hotel.png"></div>
      </div>

      <div class="span4 vila">
        <div class="cover"><h3><strong>ویلا</strong></h3><img src="<?php bloginfo('template_url'); ?>\images\vila.png"></div>
      </div>

      <div class="span4 suit">
        <div class="cover"><h3><strong>سوئیت</strong></h3><img src="<?php bloginfo('template_url'); ?>\images\Home.svg.png"></div>
      </div>
    </div>
  </div>
</div>



 <div class="span12 airport">
    <div class="text-box">
    <?php dynamic_sidebar( 'widget-airport' ); ?>
    </div>
 </div>





 <div class="span12 map" >
    <div class="overlay">
      <p>برای دیدن نقشه کلیلک کنید <span class="fa-stack fa-lg">
        <i class="fa fa-circle-thin fa-stack-2x"></i>
        <i class="fa fa-hand-o-up fa-stack-1x"></i></span>
      </p>
    </div>
      <?php dynamic_sidebar( 'widget-map' ); ?>
    </div>

<?php get_footer(); ?>



