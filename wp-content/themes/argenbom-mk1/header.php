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
          <nav class="header-menu__wrapper"><ul id="menu-primary" class="header-menu"><li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-46 header-menu__item"><a href="http://argenbom.mateclass.com/" class="header-menu__link">Inicio</a></li>
<li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93 header-menu__item"><a class="header-menu__link">Servicios</a>
<ul class="sub-menu">
	<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-servicios menu-item-53 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/servicios/reparacion-de-bombas-de-desagote/" class="header-menu__link">Reparacion de bombas de desagote</a></li>
	<li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-servicios menu-item-55 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/servicios/reparacion-de-bombas-de-sumergibles/" class="header-menu__link">Reparacion de bombas de sumergibles</a></li>
	<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-servicios menu-item-52 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/servicios/reparacion-de-bombas-de-centrifugas/" class="header-menu__link">Reparacion de bombas de centrifugas</a></li>
	<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-servicios menu-item-54 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/servicios/reparacion-de-bombas-de-por-marca/" class="header-menu__link">Reparacion de bombas de por marca</a></li>
	<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-servicios menu-item-51 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/servicios/reparacion-de-aireadores-y-agitadores/" class="header-menu__link">Reparacion de aireadores y agitadores</a></li>
	<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-servicios menu-item-56 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/servicios/reparacion-de-sellos-mecanicos/" class="header-menu__link">Reparacion de sellos mecanicos</a></li>
</ul>
</li>
<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/productos/" class="header-menu__link">Productos</a></li>
<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/novedades/" class="header-menu__link">Novedades</a></li>
<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-68 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/nuestra-empresa/" aria-current="page" class="header-menu__link">Nuestra empresa</a></li>
<li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82 header-menu__item"><a href="http://argenbom.mateclass.com/index.php/contacto/" class="header-menu__link">Contacto</a></li>
</ul></nav>       
            <div class="header-menu-action" id="header-menu-action"><svg viewBox="0 0 30 30" version="1.1" id="svg3336" class="icon-menu"><path d="M1.435 8.742A1.445 1.445 0 0 1 0 7.29c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-top" fill="#32a89b"/><path d="M1.435 16.484A1.445 1.445 0 0 1 0 15.032c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-middle" fill="#32a89b"/><path d="M1.435 24.226A1.445 1.445 0 0 1 0 22.774c0-.8.644-1.452 1.435-1.452h27.13c.791 0 1.435.652 1.435 1.452 0 .8-.644 1.452-1.435 1.452H1.435z" class="ico-menu-bottom" fill="#32a89b"/></svg></div>
        </div>
        
      </header>

    <?php endif; ?>  
