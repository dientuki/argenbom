<?php echo $parent_page->ID; ?>
<?php $pages = new WP_Query( array('post_parent' => 2, 'post_type' => 'page')) ;?>
<section>
  <div class="wrapper">
    <div>
      <h1><?php echo $parent_page->post_title ?></h1>
      <?php echo apply_filters( 'the_content', $parent_page->post_content ); ?>
    </div>

    <?php while ( $pages->have_posts() ): $pages->the_post(); ?>
      <?php echo the_title(); ?>
    <?php endwhile; ?>

  </div>

</section>