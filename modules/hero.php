<?php
if(is_post_type_archive('work')) {
  $id = 97;
} else {
  $id = get_the_id();
}
$imagesDesktop = get_field('hero_images_desktop', $id);
$imagesMobile = get_field('hero_images_mobile', $id);
$tagline = get_field('hero_image_tagline', $id);
$button = get_field('hero_down_button_text', $id);
echo exmod_wrap('start', 'hero');
  if($imagesDesktop) {
    echo '<div id="hero-desktop">';
      foreach($imagesDesktop as $img) {
        echo '<div>';
          echo '<div class="hero-image" style="background-image: url(' . $img['sizes']['large'] . ');">';
            echo wp_get_attachment_image($img['ID'], 'large');
          echo '</div>';
        echo '</div>';
      }
    echo '</div>';
    echo '<h1 class="work-header">' . get_the_title($id) . '</h1>';
    echo '<div class="work-hero-content">';
      echo '<h2>' . $tagline . '</h2>';
    echo '</div>';
    echo '<a href="#down" id="link-down">' . $button . '</a>';
  }
  if($imagesMobile) {
    echo '<div id="hero-mobile">';
    foreach($imagesMobile as $img) {
      echo '<div>';
        echo '<div class="hero-image-mobile" style="background-image: url(' . $img['sizes']['large'] . ');">';
          echo wp_get_attachment_image($img['ID'], 'large');
        echo '</div>';
      echo '</div>';
    }
    echo '</div>';
    ?>
      <div class="hero-mobile-logo">
        <img src="<?php ex_logo('primary', 'light'); ?>" alt="Logo for Brainwood Creative" />
      </div>
    <?php
  }
echo exmod_wrap('end');
?>
