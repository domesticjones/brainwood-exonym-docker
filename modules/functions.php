<?php

function exmod_esc($val) {
  $output = str_replace(' ', '-', strtolower($val));
  return $output;
}

function exmod_wrap($pos, $meta = '') {
  $output = '';
  if($pos == 'start') {
    $metaVal = $meta . '_module_meta';
    $metaId = exmod_esc(get_field($metaVal)['short_name']);
    $metaName = get_field($metaVal)['name'];
    $output = '<section id="' . $metaId . '" class="module" data-name="' . $metaName . '" data-hash="' . $metaId . '">';
  } elseif($pos == 'end') {
    $output = '</section>';
  }
  return $output;
}
