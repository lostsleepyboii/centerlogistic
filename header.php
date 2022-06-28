<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
  <meta name="description" content="Center Logistic - is the best tranport logistic site in world">
  <meta name="keywords" content="centerlogistic, tranport logistic, tranport">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#0d53f2">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#033fc9">
  <?php 
    wp_head();
  ?>
</head>
<body>
  <?php
    if (is_front_page()) {
    ?>
      <header class="header">
        <div class="container">
          <div class="header__inner">
            <a href="<?php echo get_home_url(); ?>">
              <?php 
                $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); 
              ?>
              <img class="logo" src="<?php echo $custom_logo__url[0]; ?>" alt="Center Logistic">
            </a>
            <button class="burger" aria-label="Menu">
              <span></span>
              <span></span>
            </button>
            <nav class="nav">
              <a href="#services" class="nav__link">Services</a>
              <a href="#clients" class="nav__link">Clients</a>
              <a href="#advges" class="nav__link">Benefits</a>
              <a href="#team" class="nav__link">Team</a>
              <a href="#mission" class="nav__link">Mission</a>
              <a href="#pre-blog" class="nav__link">News</a>
              <a href="#" class="nav__link">Contact Us</a>
            </nav>
          </div>
        </div>
      </header>
    <?php  
    } else {
    ?>  
      <header class="header">
        <div class="container">
          <div class="header__inner">
            <a href="<?php echo get_home_url(); ?>">
              <?php 
                $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); 
              ?>
              <img class="logo" src="<?php echo $custom_logo__url[0]; ?>" alt="Center Logistic">
            </a>
            <button class="burger" aria-label="Menu">
              <span></span>
              <span></span>
            </button>
            <nav class="nav">
              <?php 
                  $headerMenu = array(
                      'menu' => 'Main', 
                      'container' => false,
                      'echo' => '',
                      'items_wrap' => '%3$s',
                      'depth' => 1
                  );
                  echo strip_tags( wp_nav_menu( $headerMenu ), '<a>' );
              ?>
            </nav>
          </div>
        </div>
      </header>
    <?php
    }
  ?>