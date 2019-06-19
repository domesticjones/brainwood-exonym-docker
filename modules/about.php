<?php
  $photo = get_field('about_photo');
  echo exmod_wrap('start', 'about');
?>
  <div class="module-inner module-about">
    <?php echo exmod_heading('about'); ?>
    <div class="about-data">
      <div class="about-photo" style="background-image: url(<?php echo $photo['sizes']['large']; ?>);">
        <?php echo wp_get_attachment_image($photo['id'], 'large'); ?>
      </div>
      <div class="about-content">
        <?php the_field('about_bio'); ?>
        <blockquote>
          <q><?php the_field('about_quote'); ?></q>
          <cite><?php the_field('about_quote_author'); ?></cite>
        </blockquote>
      </div>
    </div>
  </div>
<?php echo exmod_wrap('end'); ?>
