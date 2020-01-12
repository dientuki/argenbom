<section class="widget-column">

  <div class="wrapper">
    
    <?php foreach ($columns as $column): ?>

      <article class="widget-column__article">
        <figure></figure>
        <h1><?php echo $column->post_title ?></h1>
        <div>
          <?php echo apply_filters( 'the_content', $column->post_content ); ?>
        </div>
        <a href="" class="more-info">info</a>
      </article>

    <?php endforeach; ?>

  </div>

</section>