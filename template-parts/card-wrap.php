
<?php

$homes = new WP_Query(array(
    'posts_per_page' => 3,
    'post_type' => 'homes',
  ));
  
?>


<div class="card-wrap">
    <?php
        while($homes->have_posts()) {
        $homes->the_post();
        get_template_part('template-parts/home-card');
        }
    ?>
</div>