<?php
/*
Template Name: Listado Servicios
Template Post Type: servicios
*/
// Page code here...
?>

<?php get_header(); ?>

<?php the_post(); ?>

<main class="background-green">

<?php $pages = new WP_Query(
  array(
    'order' => 'ASC',
    'orderby' => 'menu_order', 
    'post_parent' => $parent_page,
    'post_type' => 'page'
  )
) ;?>

</main>

<?php get_footer();