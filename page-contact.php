<?php

  get_header();

  while(have_posts()) {
    the_post();
    //pageBanner();
    the_title();
    echo "innn";
  }

  get_footer();

?>