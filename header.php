<!DOCTYPE html>
<html class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta property="og:url" content="https://sycamorelandtrust.org/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sycamore Land Trust" />
    <meta property="og:description" content="Protecting land and connecting people to nature in southern Indiana" />
    <meta property="og:image" content="https://sycamorelandtrust.org/wp-content/themes/sycamore/images/slt-logo-vertical-new.svg" />

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slt-logo-horizontal-new.svg"></a>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
  </header>
<main>