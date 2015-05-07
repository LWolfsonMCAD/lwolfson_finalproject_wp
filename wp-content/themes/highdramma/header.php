<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package highdramma
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel='stylesheet' media='screen and (min-width: 480px) and (max-width: 568px)' href='css/mobile.css' />
<!-- <link id="size-stylesheet" rel="stylesheet" type="text/css" href="mobile.css" /> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'highdramma' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'highdramma' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<a href="<?php echo get_option('home'); ?>"><img id="site-logo" src="<?php  echo get_stylesheet_directory_uri().'/images/hd-logo-200x208.png' ; ?>" alt="<?php bloginfo( 'name' );?> "></a>

			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

			<h1 id="site-title"><a href="<?php echo get_option('home'); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

		</div><!-- .site-branding -->	

  		<?php highdramma_social_menu(); ?>
	

	</header><!-- #masthead -->

	<div id="content" class="site-content">

