<?php
/*
Template Name: Listado de productos
Template Post Type: page
*/
?>

<?php get_header(); ?>
      

<main>
  <div>
    carrousel
  </div>

  <?php $products = new WP_Query( array('post_type' => 'productos') ) ;?>
  
  <?php if ( $services->have_posts() ):?>
    <div class="listview-services__wrapper">
      <?php while ( $services->have_posts() ): $services->the_post(); ?>
        <article>
          producto
        </article>

      <?php endwhile;?>
    </div>
  <?php endif; ?>


</main>

<?php get_footer();