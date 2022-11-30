<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 

<?php single_cat_title(); ?>


<div class="card-wrap">
    <?php
        while(have_posts()) {
        the_post();
        get_template_part('template-parts/home-card');
        }
    ?>
</div>


</section>
 
 
<?php get_footer(); ?>