<?php

function exmod_esc($val) {
  $output = str_replace(' ', '-', strtolower($val));
  return $output;
}

function exmod_wrap($pos, $meta = '', $name = true) {
  $output = '';
  if($pos == 'start') {
    if($name == true) {
      $metaVal = $meta . '_module_meta';
      $metaId = exmod_esc(get_field($metaVal)['short_name']);
      $metaName = get_field($metaVal)['name'];
    } else {
      $metaId = exmod_esc($meta);
      $metaName = $meta;
    }
    $output = '<section class="module" data-name="' . $metaName . '" data-hash="' . $metaId . '">';
  } elseif($pos == 'end') {
    $output = '</section>';
  }
  return $output;
}

function exmod_heading($meta, $dyn = true, $metaSec = '') {
  if($dyn == true) {
    $headPrimary = get_field($meta . '_module_heading')['primary'];
    $headSecond = get_field($meta . '_module_heading')['secondary'];
  } else {
    $headPrimary = $meta;
    $headSecond = $metaSec;
  }
  $output = '<h2 class="module-heading"><span>' . $headPrimary . '</span><i>' . $headSecond . '</i></h2>';
  return $output;
}
