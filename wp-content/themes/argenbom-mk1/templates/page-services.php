<?php
/*
Template Name: Listado Servicios
Template Post Type: servicios
*/
?>

<?php get_header(); ?>
      

<main class="background-green">

  <div class="wrapper">
    <section class="listview-services">
      <h1 class="uppercase bold listview-services__title"><?php echo get_the_title() ?></h1>

      <?php $services = new WP_Query( array('post_parent' => get_the_ID(),'post_type' => 'servicios') ) ;?>

      <?php if ( $services->have_posts() ):?>
        <div class="listview-services__wrapper">
          <?php while ( $services->have_posts() ): $services->the_post(); ?>
            <article class="article-service">
              <figure class="aspect-service-preview">
                <img data-original="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="lzl" />
              </figure>            
              <h1 class="article-service__listview-title"><?php the_title(); ?></h1>
              <a class="more-info more-info-green uppercase" href="<?php echo the_permalink(); ?>">info</a>
            </article>
          <?php endwhile;?>
        </div>
      <?php endif; ?>

    </section>
  </div>

</main>

<?php get_footer();