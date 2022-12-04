<?php

get_header();

?>


<div class="main-home">


    <div class="main-home-st">
        <div class="home-st">
            <h3>104 Route 306, Monsey</h3>
        </div>
        <a class="hs-contact-link" href="/contact">contact</a>
    </div>

    <section>

    <div class="section2">

        <div class="hs-details">
            <div class="hs-det-wrap">
                <div class="hs-det-text">
                    <div class="h25w6"><h3>104 Route 306, Monsey</h3></div>
                    <div class="h18w1"><h3>104 Route 306, Monsey</h3></div>
                    <div class=""><h3>Description</h3></div>
                </div>
                    <div class="des-p">
                        <p>104 Route 306, Monsey 104 Route 306, Monsey 104 Route 306, Monsey 104 Route 306, Monsey 104 Route 306, Monsey104 Route 306, Monsey 104 Route 306, Monsey 104 Route 306, Monsey104 Route 306, Monsey 104 Route 306, Monsey104 Route 306, Monsey 104 Route 306, Monsey104 Route 306, Monsey 104 Route 306, Monsey</p>
                    </div>
                    <div class="hs-info">
                        <h3>Details</h3>
                        <div class="hs-info-det">
                            <div> <i class="fa-solid fa-bath"></i>bath</div>
                            <div> <i class="fa-solid fa-house-chimney-user"></i>home</div>
                            <div> <i class="fa-solid fa-bed"></i>bed</div>
                            <div> <i class="fa-solid fa-car"></i>car</div>
                            <div> <i class="fa-solid fa-bath"></i> bath</div>
                            <div> <i class="fa-solid fa-house-chimney-user"></i>home</div>
                            <div> <i class="fa-solid fa-bed"></i>bed</div>
                            <div> <i class="fa-solid fa-car"></i>car</div>
                        </div>
                    </div>
            </div>
        </div>





        <div class="hs-image"> <?php
            if( have_rows('images') ): ?>
                <?php while( have_rows('images') ): the_row(); 
                    $image = get_sub_field('image');  ?>
                        <img class="img-slider-hs"  src="<?php echo $image['url']; ?>" alt="Home_image" />
                <?php endwhile;
            endif; ?>
        </div>

    </div>

    <div class="section2">
        <div class="hs-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24046.017240988625!2d-74.08406905046121!3d41.11810362452819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2c9caf11a7127%3A0xbdd352cb7aa1e754!2sMonsey%2C%20NY%2C%20USA!5e0!3m2!1sen!2sil!4v1669905609441!5m2!1sen!2sil" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="hs-contact"></div>
    </div>
        
    </section>



</div>







<?php

get_footer();

?>