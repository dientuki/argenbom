<section class="widget-news">

  <div class="wrapper">
    <div class="widget-news__deco">
      
    </div>
    <div class="widget-news__text">
      <div class="widget-news__title"><?php echo $news['title']; ?></div>
      <div class="widget-news__desc"><?php echo $news['text']; ?></div>
    </div>
    <div class="widget-news__more">
      <a class="more-info" href="<?php echo get_permalink($news['news']); ?>">info</a>
    </div>
  </div>

</section>