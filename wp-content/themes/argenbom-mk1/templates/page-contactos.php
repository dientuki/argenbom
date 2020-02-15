<?php
/*
Template Name: Contacto
Template Post Type: page
*/
?>

  <?php get_header(); ?>
  <?php the_post() ?>
  
  <main class="background-green">
    <div class="wrapper">
      <div class="page-contact">
        <?php the_content(); ?>
      </div>
    <div>
  </main>

  <?php get_footer();