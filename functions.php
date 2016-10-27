<?php

function enqueue_files() {
  $dirCSS = new DirectoryIterator(get_stylesheet_directory() . '/css');
  $dirJS  = new DirectoryIterator(get_stylesheet_directory() . '/js');

  // CSS
  foreach ($dirCSS as $file) {

    if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
      $fullName = basename($file);
      $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

      switch($name) {

          default:
              $deps = null;
              break;

      }

      wp_enqueue_script( $name, get_template_directory_uri() . '/css/' . $fullName, $deps, null, true );

    }

  }

  // JS
  foreach ($dirJS as $file) {

    if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
      $fullName = basename($file);
      $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

      switch($name) {

          case 'main':
              $deps = array('vendor');
              break;

          default:
              $deps = null;
              break;

      }

      wp_enqueue_script( $name, get_template_directory_uri() . '/js/' . $fullName, $deps, null, true );

    }

  }


}
