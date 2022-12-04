<?php get_header(); ?>

  <div class="main-page container-fluid	">

    <video width="100%" autoplay muted loop>
      <source src="http://127.0.0.1/wp-content/uploads/2022/12/frontpagevideo.mp4" type="video/mp4">
    </video>

    <div class="text-video">
      <p style="font-size:20px;">The www Fibest luxury  view our lexury homes</p>
      <div class="wrap-text">
      <?php if( have_rows('slider_text_rep', 'option') ): ?>
      <?php while( have_rows('slider_text_rep', 'option') ): the_row(); 
      $text = get_sub_field('slide_text', 'option');?>
           
      <h2 class="vd-h1"><?php echo $text; ?> </h2>   
       
   
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <div class="video-btn">view www our lexury homes</div>
    </div>

  </div>



<?php get_footer(); ?>
