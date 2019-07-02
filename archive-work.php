<?php
  get_header();
  $parent = 97;
  echo '<div id="content">';
    get_template_part('modules/hero');
    $workTerms = get_terms(array('taxonomy' => 'work-cats', 'parent' => 0 ));
    foreach($workTerms as $term) {
      echo exmod_wrap('start', $term->slug);
        echo '<div class="module-inner">';
          echo exmod_heading(false, '', '', $term->name, $term->description);
          $workQueryArgs = array(
            'post_type'       => array('work'),
            'nopaging'        => true,
            'posts_per_page'  => '5',
            'orderby'         => 'modified',
            'tax_query'       => array(
              array(
                'taxonomy'  => 'work-cats',
                'field'     => 'term_id',
                'terms'     => $term->term_id,
              ),
            ),
          );
          include(locate_template('modules/part-work.php', false, false));
        echo '</div>';
      echo exmod_wrap('end');
    }
  echo '</div>';
  get_footer();
?>
