<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo load_resource('appCss.css'); ?>" >

	</head>

  <body <?php body_class(); ?>>
  
    <?php if (is_front_page() == false): ?>

      <header>
        header!!
      </header>

    <?php endif; ?>  
