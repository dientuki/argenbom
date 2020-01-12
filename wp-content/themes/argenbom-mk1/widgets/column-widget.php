<section class="widget-column">

  <div class="wrapper">
    
    <?php foreach ($columns as $column): ?>

      <article class="widget-column__article">
        
        <div class="widget-column__image">       
          <figure class="aspect-column">
            <img />
          </figure>
        </div>

        <div class="widget-column__content">
          <div class="widget-column__content-wrapper">
            <h1 class="widget-column__title uppercase"><?php echo $column->post_title ?></h1>
            <div class="widget-column__text">
              <?php echo apply_filters( 'the_content', $column->post_content ); ?>
            </div>
            <a href="<?php echo get_permalink($column->ID); ?>" class="more-info more-info-blue uppercase">info</a>
          </div>
        </div>
      </article>

    <?php endforeach; ?>

  </div>

</section>