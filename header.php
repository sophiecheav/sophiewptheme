<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="<?php bloginfo('author'); ?>">

  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php find_css(); ?>">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <!-- <script src="./assets/js/main.js" type="text/javascript"></script> -->

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header class="site-header">

    <!-- inclut le logo personnalisé (si existe) -->
    <div class="site-branding">
      <?php if(has_custom_logo()) :
        the_custom_logo();
        else:
      ?>
      <a href="<?php bloginfo('url'); ?>">
        <?php bloginfo('name'); ?>
      </a>
      <?php endif; ?>
    </div>

    <!-- Menu central principal -->
    <nav class="navigation navigation-top desktop-navigation">
      <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container' => false // évite que WP englobe le <ul> d'une balise <div>
          )
        );
      ?>
    </nav>

    <!-- Menu pour mobile -->
    <nav class="navigation navigation-top mobile-navigation">
      <ul class="sub-navigation">
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'primary',
                'menu_class'      => 'sub-navigation',
                'container'       => false
              )
            );
          ?>
        </li>
      </ul>
    </nav>

    <!-- menu droite : search bar + picto panier + popup recherche : à dynamiser -->
    <nav class="navigation navigation-aside">
      <ul>
        <li class="search-toggle">
          <a href="#"><i class="fas fa-search"></i>
          </a>
        </li>
        <?php if(!is_woocommerce()) : ?>
        <li>
          <a href="<?php echo wc_get_cart_url() ?>">
            <i class="fas fa-shopping-cart"></i>
            <span class="count cart-counter"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
          </a>
        </li>
      <?php endif; ?>
      </ul>
    </nav>
    <section class="search-popup">
      <form class="search-form" action="index.html" method="post">
        <input type="text" name="search" value="" placeholder="Tapez quelque chose...">
        <input type="submit" name="submit" value="Rechercher">
      </form>
    </section>
  </header>
