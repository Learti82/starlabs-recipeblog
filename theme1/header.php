<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <style>
  /* Example CSS styles for header */
  .site-header {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
  }

  .site-title {
    font-size: 28px;
    margin-bottom: 10px;
  }

  .site-description {
    color: #888;
    font-size: 16px;
  }

  .main-navigation {
    margin-top: 20px;
    text-align: center;
  }

  .main-navigation ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .main-navigation li {
    display: inline-block;
    margin: 0 10px;
  }

  .main-navigation a {
    color: #333;
    text-decoration: none;
    font-size: 16px;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .main-navigation a:hover {
    background-color: #333;
    color: #fff;
  }

  @media (max-width: 768px) {
    .site-title {
      font-size: 24px;
    }

    .site-description {
      font-size: 14px;
    }
  }

  .menu-buttons {
    margin-top: 20px;
    text-align: center;
  }

  .menu-button {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .menu-button:hover {
    background-color: #555;
  }

  .clearfix::after {
    content: "";
    display: table;
    clear: both;
  }
  </style>
</head>

<body <?php body_class(); ?>>
  <header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
      <?php if (has_custom_logo()) : ?>
      <div class="site-logo"><?php the_custom_logo(); ?></div>
      <?php else : ?>
      <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
      <p class="site-description"><?php bloginfo('description'); ?></p>
      <?php endif; ?>
    </div>
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
    </nav>
  </header>