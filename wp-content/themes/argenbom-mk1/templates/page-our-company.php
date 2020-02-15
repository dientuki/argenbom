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

          <div class="our-company-location-place">
            <div class="our-company__acf-title bold uppercase">Donde estamos</div>
            <div class="our-company__acf-value"><?php echo $contact['value']; ?></div>
          </div>

          <?php $map = get_field_object( 'gmaps' ); ?>
          <?php if ($map): ?>
            <div class="our-company-location-iframe">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.099810072505!2d-58.41259972174545!3d-34.67700611126456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccc88bd4f94f5%3A0xc4849c33e70c4322!2sFormosa%202835%2C%20B1824QSJ%20Valent%C3%ADn%20Alsina%2C%20Buenos%20Aires!5e0!3m2!1sen!2sar!4v1581721865160!5m2!1sen!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              <?php echo $map['value']; ?>
            </div>
          <?php endif; ?>
          </div>
      <?php endif; ?>
    <div>
  </main>

  <?php get_footer();