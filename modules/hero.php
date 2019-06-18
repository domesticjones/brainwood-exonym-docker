<?php
$imagesDesktop = get_field('hero_images_desktop');
$imagesMobile = get_field('hero_images_mobile');
echo exmod_wrap('start', 'hero');
  if($imagesDesktop) {
    echo '<div id="hero-desktop">';
      foreach($imagesDesktop as $img) {
        echo '<div>';
          echo '<div class="hero-image" style="background-image: url(' . $img['sizes']['large'] . ');">' . wp_get_attachment_image($img['ID'], 'large') . '</div>';
        echo '</div>';
      }
    echo '</div>';
  }
  echo '<a href="#" id="link-down"></a>';
echo exmod_wrap('end');
?>
