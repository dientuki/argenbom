<section class="widget-column">

  <div class="wrapper">
    
    <?php foreach ($posts as $post): ?>

      <article class="widget-column__article">
        <figure></figure>
        <h1><?php echo $post->post_title ?></h1>
        <div>
          <?php echo apply_filters( 'the_excerpt', $post->post_content ); ?>
        </div>
        <a href="" class="more-info">info</a>
      </article>

    <?php endforeach; ?>

  </div>

</section>