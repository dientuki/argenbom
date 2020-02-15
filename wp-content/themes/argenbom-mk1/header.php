<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

    <?php wp_head(); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo load_resource('appCss.css'); ?>" />
    <link rel="preload" href="<?php echo load_resource('myriadpro-regular.woff2'); ?>" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="<?php echo load_resource('myriadpro-light.woff2'); ?>" as="font" type="font/woff2" crossorigin />
    <script defer src="<?php echo load_resource('appJs.js'); ?>"></script>

	</head>

  <body <?php body_class(); ?>>
  
    <?php if (is_front_page() == false): ?>

      <header class="header">
        <div class="wrapper">
          <a href="" class="header__logo"></a>
          <?php wp_nav_menu( array(
              'container' => 'nav',
              'container_class' => 'header-menu__wrapper',
              'depth' => 0,
              'menu_class' => 'header-menu',
              'theme_location'=>'primary'
            )); ?>        
        </div>
      </header>

    <?php endif; ?>  
