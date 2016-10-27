<?php

function enqueue_files() {
  $dirJS = new DirectoryIterator(get_stylesheet_directory() . '/js');

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
