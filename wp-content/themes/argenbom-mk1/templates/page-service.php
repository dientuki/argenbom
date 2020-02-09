<?php
/*
Template Name: Servicio
Template Post Type: servicios
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>

<main class="background-green">
  <div class="wrapper">
    <article class="article-service">
      <div class="article-service__wrapper">
        <div class="article-service__title-section uppercase bold"><?php the_title(); ?></div>
        <div class="article-service__content-wrapper">
          <?php
            $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()) );
            $pb = ($src[2]/ $src[1] * 100);
          ?>
          <div class="article-service__imagen">
            <figure class="aspect-generic" style="padding-bottom: <?php echo $pb; ?>%">
              <img data-original="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="lzl" />
            </figure>            
          </div>
          <div class="article-service__content content">
            <div class="article-service__title uppercase bold"><?php the_title(); ?></div>
            <?php the_content(); ?>
            <a href="mailto:test@example.com?subject=<?php the_title() ?>" class="more-info-email uppercase">Solicitar presupuesto o asesoramiento <strong>via email</strong></a>
          </div>  
        </div>

      </div>
    </article>
  </div>
</main>

<?php get_footer();