<?php
/*
Template Name: Listado de productos
Template Post Type: page
*/
?>

<?php get_header(); ?>
      

<main>

  <?php $products = new WP_Query( array('post_type' => 'productos') ) ;?>
  <?php if ( $products->have_posts() ):?>
    <div class="carrousel background-blue">
      <div class="wrapper">
        carrousel
        <?php while ( $products->have_posts() ): $products->the_post(); ?>
          <article>
            producto en carrusel
          </article>

        <?php endwhile;?>

      </div>

    </div>

    <div class="listview-products__wrapper">
      <?php while ( $products->have_posts() ): $products->the_post(); ?>
        <article>
          producto fuera
        </article>

      <?php endwhile;?>
    </div>
  <?php endif; ?>


</main>

<?php get_footer();