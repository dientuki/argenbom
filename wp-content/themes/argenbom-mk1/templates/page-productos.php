<?php
/*
Template Name: Listado de productos
Template Post Type: page
*/
$active = true;
?>

<?php get_header(); ?>

<main>

  <?php $products = new WP_Query( array('post_type' => 'productos', 'orderby' => 'title', 'order'   => 'DESC', 'posts_per_page' => -1) ) ;?>

  <?php if ( $products->have_posts() ):?>
    <div class="carrousel background-blue">
      <div class="wrapper">
        <div class="carrousel-wrapper">
          <div id="carrousel">
            <?php while ( $products->have_posts() ): $products->the_post(); ?>
              <article class="carrousel__item <?php if ($active == true) { echo 'active'; } ?>" data-id="<?php echo get_the_ID(); ?>">
                <?php $active = false; ?>
                <div class="aspect-1-1 carrousel__image" href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
                    <img class="tns-lazy-img" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                </div>

                <h1 class="carrousel__title" ><?php the_title(); ?></h1>
              </article>
            <?php endwhile;?>
          </div>
          <div class="carrousel-controls-prev disabled">

          </div>
          <div class="carrousel-controls-next">
            
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="listview-products">
        <?php $active = true; ?>
        <div id="product-list">
          <?php while ( $products->have_posts() ): $products->the_post(); ?>
              <article class="listview-products__item <?php if ($active == true) { echo 'active'; } ?>" data-id="<?php echo get_the_ID(); ?>">
                <?php $active = false; ?>
                <h1 class="hidden"><?php the_title(); ?></h1>

                <div class="content">
                  <?php $fields = array('typeWater', 'installation', 'use'); ?>
                  <?php foreach($fields as $field): ?>
                    <?php $tmp = get_field_object( $field ); ?>
                    <?php if ($tmp): ?>
                      <div class="listview-products__acf-title"><?php echo $tmp['label']; ?></div>
                      <div class="listview-products__acf-value"><?php echo nl2br($tmp['value']); ?></div>
                    <?php endif; ?>
                  <?php endforeach; ?>

                  <?php the_content(); ?>
                  <a href="mailto:test@example.com?subject=<?php the_title() ?>" class="more-info-email uppercase">Solicitar presupuesto o asesoramiento <strong>via email</strong></a>
                </div>
                

              </article>
          <?php endwhile;?>
        </div>
      </div>
    </div>
  <?php endif; ?>


</main>

<?php get_footer();