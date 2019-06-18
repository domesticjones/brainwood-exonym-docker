<?php echo exmod_wrap('start', 'services'); ?>
<div class="module-inner">
  <?php echo exmod_heading('list'); ?>
  <p class="services-description"><?php the_field('list_description'); ?></p>
  <?php $columns = get_field('list_columns'); ?>
  <ul class="services-columns">
    <li><h3><?php echo $columns['left_heading']; ?></h3><?php echo $columns['left_content']; ?></li>
    <li class="line"></li>
    <li><h3><?php echo $columns['center_heading']; ?></h3><?php echo $columns['center_content']; ?></li>
    <li class="line"></li>
    <li><h3><?php echo $columns['right_heading']; ?></h3><?php echo $columns['right_content']; ?></li>
  </ul>
</div>
<?php echo exmod_wrap('end'); ?>
