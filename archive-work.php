<?php
  get_header();
  echo '<div id="content">';
    if(have_posts()): while(have_posts()): the_post();
      get_template_part('modules/hero');
      get_template_part('modules/services');
    endwhile; endif;
  echo '</div>';
  get_footer();
?>
