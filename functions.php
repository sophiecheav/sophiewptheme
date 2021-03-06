<?php

// fonction déclaration menus personnalisés
function sophiewptheme_setup() {
  register_nav_menus(
    array(
      'primary' => 'Menu principal',
      'secondary' => 'Menu secondaire'
    )
  );

  // active fonctionnalité WP qui prend en charge le logo personnalisé
  add_theme_support('custom-logo');
  add_theme_support('post_thumbnails');
}

add_action('after_setup_theme', 'sophiewptheme_setup');

// fonction enregistrement zones de widgets
function sophiewptheme_init_widgets() {
  register_sidebar(
    array(
      'id'  => 'widgets-section-1',
      'name'  => 'Zone de widgets 1',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-2',
      'name'  => 'Zone de widgets 2',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-3',
      'name'  => 'Zone de widgets 3',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-4',
      'name'  => 'Zone de widgets 4',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-sidebar',
      'name'  => 'Zone de widgets latérale',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
}

add_action('widgets_init', 'sophiewptheme_init_widgets');

require get_template_directory() . '/inc/customizer.php';

// récupère le fichier script JS
function find_js() {
  wp_enqueue_script( 'main',
  get_template_directory_uri() . '/assets/js/main.js',
  array() );
}

add_action( 'wp_enqueue_scripts', 'find_js' );

// récupère le fichier style CSS
function find_css() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_styles', 'find_css');

?>
