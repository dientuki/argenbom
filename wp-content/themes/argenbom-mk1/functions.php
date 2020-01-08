<?php

function load_resource($resource, $url = true) {
  $manifest = file_get_contents(public_path('/dist/manifest.json'));

  if ($manifest == false) {
    return false;
  }

  $json = json_decode($manifest, TRUE);

  foreach ($json as $key => $value) {

    $tmp = explode('/', $key);
    $path = end($tmp);

    if ($path == $resource) {
      if ($url) {
        $file = url('/dist/'.$value);
      } else {
        $file = public_path('/dist/' . $value);
      }

      return $file;
    }
  }
}

function load_critical_css($file = false) {

  if ($file == false) {
    return false;
  }

  $styles = file_get_contents(load_resource($file, false));
  return $styles;
}

function load_svg($file) {
  $folder = '/dist/svg/';
  $filename = public_path($folder . $file . '.svg');

  if (file_exists($filename)) {
    return file_get_contents($filename, FILE_USE_INCLUDE_PATH);
  }

  return false;
}