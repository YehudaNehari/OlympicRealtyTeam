<div class="card">
    <a href="<?php the_permalink(); ?>" target="_blank">

        <div class="card-img">

        <?php if( have_rows('images') ): ?>

        <?php while( have_rows('images') ): the_row(); 

        // vars
        $image = get_sub_field('image');

        ?>

        <img src="<?php echo $image['url']; ?>" alt="Home_image" />

        <?php endwhile; ?>

        <?php endif; ?>

        </div>

        <div class="card-text">
            <div class="card-title">
                <p>$<?php the_field('price'); ?></p>
            </div>
            <div class="card-span">
                <span><?php the_field('bedrooms'); ?></span>
                <span><?php the_field('bath'); ?></span>
                <span><?php the_field('sqft'); ?></span>
            </div>
            <p><?php the_field('address'); ?></p>
        </div>
    </a>
</div>