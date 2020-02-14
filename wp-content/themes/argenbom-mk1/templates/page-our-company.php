<?php
/*
Template Name: Nuestra empresa
Template Post Type: page
*/
?>

  <?php get_header(); ?>
  <?php the_post() ?>
  
  <main class="background-white our-company">
    <div class="wrapper">
      <?php $fields = array('company', 'customers', 'experience', 'distributor'); ?>
      <div class="our-company-wrapper">
        <?php foreach($fields as $field): ?>
          <?php $tmp = get_field_object( $field ); ?>
          <?php if ($tmp): ?>
            <div class="our-company__item">
              <div class="listview-products__acf-title"><?php echo $tmp['label']; ?></div>
              <div class="listview-products__acf-value"><?php echo nl2br($tmp['value']); ?></div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <?php $contact = get_field_object( 'contact' ); ?>
      <?php if ($contact): ?>
        <div class="listview-products__acf-title"><?php echo $contact['label']; ?></div>
        <div class="listview-products__acf-value"><?php echo $contact['value']; ?></div>

        <?php $map = get_field_object( 'gmaps' ); ?>
        <?php if ($map): ?>
          <div class="listview-products__acf-value"><?php echo $map['value']; ?></div>
        <?php endif; ?>
      <?php endif; ?>
    <div>
  </main>

  <?php get_footer();