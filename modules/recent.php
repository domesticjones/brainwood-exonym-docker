<?php
echo exmod_wrap('start', 'Recent', false);
echo '<div class="module-inner">';
echo '<h2 class="module-heading recent-heading"><span>Recent Work</span><a href="' . get_post_type_archive_link('work') . '">View More Work</a></h2>';
  $workQueryArgs = array(
    'post_type'       => array('work'),
    'nopaging'        => true,
    'posts_per_page'  => '5',
    'orderby'         => 'modified',
  );
  include(locate_template('modules/part-work.php', false, false));
  echo '</div>';
echo exmod_wrap('end');
?>
