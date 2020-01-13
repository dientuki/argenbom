<?php $pages = new WP_Query( array('post_parent' => 2, 'post_type' => 'page')) ;?>

<section class="widget-service">

  <div class="wrapper">
    <div class="widget-service__container">
      <article class="widget-service__article">
        <h1 class="widget-service__title uppercase bold"><?php echo $parent_page->post_title ?></h1>
        <div class="widget-service__content">
          <?php echo apply_filters( 'the_content', $parent_page->post_content ); ?>
        </div>
      </article>

      <ul class="widget-service__list">
        <?php while ( $pages->have_posts() ): $pages->the_post(); ?>
          <li class="widget-service__list-item">
            <a class="widget-service__list-link uppercase" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            <a class="more-info more-info-green uppercase" href="<?php echo the_permalink(); ?>">info</a>
          </li>
          <li class="widget-service__list-item">
            <a class="widget-service__list-link uppercase" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            <a class="more-info more-info-green uppercase" href="<?php echo the_permalink(); ?>">info</a>
          </li>
          <li class="widget-service__list-item">
            <a class="widget-service__list-link uppercase" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            <a class="more-info more-info-green uppercase" href="<?php echo the_permalink(); ?>">info</a>
          </li>
          <li class="widget-service__list-item">
            <a class="widget-service__list-link uppercase" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            <a class="more-info more-info-green uppercase" href="<?php echo the_permalink(); ?>">info</a>
          </li>
          <li class="widget-service__list-item">
            <a class="widget-service__list-link uppercase" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            <a class="more-info more-info-green uppercase" href="<?php echo the_permalink(); ?>">info</a>
          </li>
          <li class="widget-service__list-item">
            <a class="widget-service__list-link uppercase" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
            <a class="more-info more-info-green uppercase" href="<?php echo the_permalink(); ?>">info</a>
          </li>                                                  
        <?php endwhile; ?>
      </ul>
    </div>
  </div>

</section>