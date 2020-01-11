<?php echo $parent_page->ID; ?>
<?php $pages = new WP_Query( array('post_parent' => 2, 'post_type' => 'page')) ;?>

<section class="widget-service">

  <div class="wrapper">
    <article class="widget-service__article">
      <h1><?php echo $parent_page->post_title ?></h1>
      <?php echo apply_filters( 'the_content', $parent_page->post_content ); ?>
    </article>

    <ul class="widget-service__list">
      <?php while ( $pages->have_posts() ): $pages->the_post(); ?>
        <li class="widget-service__list-item">
          <a class="widget-service__list-link"><?php echo the_title(); ?></a>
          <a class="more-info">info</a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>

</section>