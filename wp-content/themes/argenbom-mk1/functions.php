<?php
//lets define a constant for the URL to your theme folder
define('ARGENBOMMK1_THEME_FOLDER_PATH', trailingslashit(get_template_directory(__FILE__)));

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

function argenbom_mk1_theme_support() {
  
}

add_action( 'after_setup_theme', 'argenbom_mk1_theme_support' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function argenbom_mk1_menus() {

	$locations = array(
		'primary'  => 'Header Menu',
		'footer'   => 'Footer Menu',
		'social'   => 'Social Menu'
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'argenbom_mk1_menus' );

function argenbom_mk1_widget_area_registration() {
	// Front page
	register_sidebar(
    array(
      'name'        => "Front Page",
      'id'          => 'front-page',
      'description' => "desc",
      'before_title'  => '',
      'after_title'   => '',
      'before_widget' => '',
      'after_widget'  => '',      
    )
  );
}

add_action( 'widgets_init', 'argenbom_mk1_widget_area_registration' );

//lets load the custom widget
require_once (ARGENBOMMK1_THEME_FOLDER_PATH . 'widgets/class.service-widget.php');

/**
 * Filter the CSS class for a nav menu based on a condition.
 *
 * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
 * @param object $item    The current menu item.
 * @return array (maybe) modified nav menu class.
 */
function argenbom_mk1_nav_class( $classes, $item, $args ) {
  //die($item->url);
  //die(print_r($args));
  $classes = array();

  if ($args->theme_location === 'social') {
    $classes[] = $item->title;
  }

  $classes[] = $args->menu_class . '__item';

  return $classes;
}

add_filter( 'nav_menu_css_class' , 'argenbom_mk1_nav_class' , 10, 3 );

function argenbom_mk1_menu_link_class( $atts, $item, $args ) {
  $atts['class'] = $args->menu_class . '__link';

  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'argenbom_mk1_menu_link_class', 1, 3 );