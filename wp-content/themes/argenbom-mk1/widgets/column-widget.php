<section class="widget-column">

  <div class="wrapper">
    
    <?php foreach ($columns as $column): ?>
      
      <article class="widget-column__article">
        
        <div class="widget-column__image widget-column__<?php echo sanitize_title($column->post_title); ?>">
          <figure class="aspect-column background-black">
            <?php $images = get_attached_media('image', $column->ID); ?>
            <?php if (count($images) > 0): ?>
              <?php
                $imageObejct = array_values($images)[0];
                $image = wp_get_attachment_image_src($imageObejct->ID, 'full'); ?>
              <img data-original="<?php echo $image[0]; ?>" class="lzl" src="" />
            <?php endif; ?>  
            
          </figure>
        </div>

        <div class="widget-column__content">
          <div class="widget-column__content-wrapper">
            <h1 class="widget-column__title uppercase bold"><?php echo $column->post_title ?></h1>
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