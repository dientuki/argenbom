<?php
//lets define a constant for the URL to your theme folder
define('ARGENBOMMK1_THEME_FOLDER_PATH', trailingslashit(get_template_directory(__FILE__)));

function load_resource($resource, $url = true) {
  $manifest = file_get_contents(ARGENBOMMK1_THEME_FOLDER_PATH . 'dist/manifest.json');

  if ($manifest == false) {
    return false;
  }

  $json = json_decode($manifest, TRUE);

  foreach ($json as $key => $value) {

    $tmp = explode('/', $key);
    $path = end($tmp);

    if ($path == $resource) {
      if ($url) {
        $file = get_template_directory_uri() . '/dist/' .$value;
      } else {
        $file = ARGENBOMMK1_THEME_FOLDER_PATH . 'dist/' . $value;
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
  $filename = ARGENBOMMK1_THEME_FOLDER_PATH . $folder . $file . '.svg';

  if (file_exists($filename)) {
    return file_get_contents($filename, FILE_USE_INCLUDE_PATH);
  }

  return false;
}

function argenbom_mk1_theme_support() {
  add_theme_support( 'post-thumbnails', array( 'page', 'servicios' ) );
}

add_action( 'after_setup_theme', 'argenbom_mk1_theme_support' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function argenbom_mk1_init() {

	$locations = array(
		'primary'  => 'Header Menu',
		'footer'   => 'Footer Menu',
		'social'   => 'Social Menu'
	);

  register_nav_menus( $locations );

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Servicios',
        'singular_name'       => 'Servicio',
        'menu_name'           => 'Servicios',
        'parent_item_colon'   => 'Servicio superior',
        'all_items'           => 'Todos los servicios',
        'view_item'           => 'Ver servicio',
        'add_new_item'        => 'Añadir nuevo servicio',
        'add_new'             => 'Añadir Servicio',
        'edit_item'           => 'Editar Servicio',
        'update_item'         => 'Actualizar Servicio',
        'search_items'        => 'Buscar Servicio',
        'not_found'           => 'Servicio no encontrado',
        'not_found_in_trash'  => 'Servicio no encontrado en papelera',
    );

    $rewrite = array(
      'slug'                => 'servicios'
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => 'servicios',
        'description'         => 'Servicios',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        //'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'servicios' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite' => $rewrite,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt','page-attributes'),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'servicios', $args );
}

add_action( 'init', 'argenbom_mk1_init' );

function argenbom_mk1_widget_area_registration() {
	// Front page
	register_sidebar(
    array(
      'name'        => "Front Page",
      'id'          => 'front-page',
      'description' => "Widgets de la home",
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
require_once (ARGENBOMMK1_THEME_FOLDER_PATH . 'widgets/class.column-widget.php');
require_once (ARGENBOMMK1_THEME_FOLDER_PATH . 'widgets/class.news-widget.php');
require_once (ARGENBOMMK1_THEME_FOLDER_PATH . 'widgets/class.tactic-widget.php');

/**
 * Filter the CSS class for a nav menu based on a condition.
 *
 * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
 * @param object $item    The current menu item.
 * @return array (maybe) modified nav menu class.
 */
function argenbom_mk1_nav_class( $classes, $item, $args ) {
  //$classes = array();

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