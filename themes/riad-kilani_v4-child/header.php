<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Riad_Kilani
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php wp_head(); ?>
<meta name="p:domain_verify" content="d2c643a9dcc44b08855c0a18108ccda7"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body <?php body_class(); ?>>
<?php if ( is_front_page() ) : ?>
  <!-- Uncomment for Live Site
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="inner">
    <div class="info">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Hey everyone, thought you might enjoy watching the dev of riad.design. For my old portfolio visit <a href="http://riadkilani.com" target="_blank">riadkilani.com</a>
    </div>
  </div>
-->
<?php endif; ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'riad-kilani_v4' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    <div class="inner">
      <div class="header-left">
          <hgroup class="branding">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

            <h1 class="logo"><?php bloginfo( 'name' ); ?></h1>

            <h2 class="tagline"><?php echo $description; /* WPCS: xss ok. */ ?></h2></a>
          </hgroup>
          <!-- .site-branding -->
      </div>
      <nav id="main-navigation" class="site-nav" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'items_wrap' ) ); ?>
      </nav><!-- #site-navigation -->
    </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
    <header id="mobile-header">
    <a class="mobile-logo" href="http://riad.design">
      <span class="rk-icon"></span>
      <h1>Riad Kilani</h1>
      </a>
    <a href="#" class="mobile-button"><i class="fa fa-bars"></i></a>
  </header>
