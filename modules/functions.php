<?php

function exmod_wrap($pos, $meta = '') {
  $output = '';
  if($pos == 'start') {
    $metaVal = $meta . '_module_meta';
    $metaId = str_replace(' ', '-', strtolower(get_field($metaVal)['short_name']));
    $metaName = get_field($metaVal)['name'];
    $output = '<section id="' . $metaId . '" class="module" data-name="' . $metaName . '">';
  } elseif($pos == 'end') {
    $output = '</section>';
  }
  return $output;
}
