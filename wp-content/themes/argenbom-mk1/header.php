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
          <a href="<?php echo get_home_url(); ?>" class="header__logo"></a>
          <?php wp_nav_menu( array(
              'container' => 'nav',
              'container_class' => 'header-menu__wrapper',
              'depth' => 0,
              'menu_class' => 'header-menu',
              'theme_location'=>'primary'
            )); ?>      
            <div class="header-menu-action" id="header-menu-action"><svg viewBox="0 0 30 30" version="1.1" id="svg3336" class="icon-menu"><path d="M1.435 8.742A1.445 1.445 0 0 1 0 7.29c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-top" fill="#32a89b"/><path d="M1.435 16.484A1.445 1.445 0 0 1 0 15.032c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-middle" fill="#32a89b"/><path d="M1.435 24.226A1.445 1.445 0 0 1 0 22.774c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-bottom" fill="#32a89b"/></svg></div>
        </div>
        
      </header>

    <?php endif; ?>  
