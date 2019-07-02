<?php
$workQuery = new WP_Query($workQueryArgs);
if($workQuery->have_posts()) {
  echo '<div class="work-gallery">';
    while($workQuery->have_posts()) {
      $workQuery->the_post();
      $quote = get_field('client_quote');
      $photos = get_field('photos');
      echo '<div><div class="work-slide">';
        if($photos) {
          echo '<div class="work-slide-photos">';
            foreach($photos as $img) {
              echo '<div><div style="background-image: url(' . $img['sizes']['large'] . ');">' . wp_get_attachment_image($img['id'], 'large') . '</div></div>';
            }
          echo '</div>';
        }
        echo '<div class="work-slide-data">';
          echo '<h3>' . get_the_title() . '</h3>';
          if($quote) {
            echo '<blockquote><q>' . $quote . '</q></blockquote>';
          }
          if(have_rows('tasks')) {
            echo '<ul class="work-tasks">';
              while(have_rows('tasks')) {
                the_row();
                echo '<li>' . get_sub_field('task') . '</li>';
              }
            echo '</ul>';
          }
        echo '</div>';
      echo '</div></div>';
    }
  echo '</div>';
  echo '<nav class="work-nav"></nav>';
}
wp_reset_postdata();
?>
