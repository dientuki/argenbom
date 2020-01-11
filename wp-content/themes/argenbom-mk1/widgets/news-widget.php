<section class="widget-news">

  <div class="wrapper">
    <div>
      deco
    </div>
    <div>
      <div><?php echo $news['title']; ?></div>
      <div><?php echo $news['text']; ?></div>
    </div>
    <div>
      <a class="more-info" href="<?php echo get_permalink($news['news']); ?>">info</a>
    </div>
  </div>

</section>