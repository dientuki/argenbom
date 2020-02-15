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
            <div class="our-company__item our-company__item-<?php echo $tmp['name']; ?>">
              <div class="our-company__acf-title uppercase bold"><?php echo $tmp['label']; ?></div>
              <div class="our-company__acf-value"><?php echo $tmp['value']; ?></div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <?php $contact = get_field_object( 'contact' ); ?>
      <?php if ($contact): ?>
        <div class="our-company-location">
          <div class="our-company-location__deco"></div>

          <div class="our-company-location-place">
            <div class="our-company__acf-title bold uppercase">Donde estamos</div>
            <div class="our-company__acf-value"><?php echo $contact['value']; ?></div>
          </div>

          <?php $map = get_field_object( 'gmaps' ); ?>
          <?php if ($map): ?>
            <div class="our-company-location-iframe">
              <?php echo $map['value']; ?>
            </div>
          <?php endif; ?>
          </div>
      <?php endif; ?>
    <div>
  </main>

  <?php get_footer();