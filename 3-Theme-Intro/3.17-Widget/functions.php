<?php
function alpha_bootstrapping() {
  // wordpress er theme k bolbo file gula ready kro to be TRANSLATABLE
  load_theme_textdomain('alpha');
  // thumbnail * title_tag er support enable kro
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'alpha_bootstrapping');

function alpha_assets() {
  // load "style.css" <- get_stylesheet_uri() will automatically LOAD style.css
  wp_enqueue_style('alpha_css', get_stylesheet_uri());
  // load "bootstrap" without the protocol (amra janina http hbe na https, tai)
  wp_enqueue_style('alpha_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'alpha_assets');

// 3.17.2 describe function for that widget
function alpha_sidebar() {
  register_sidebar(
    [
      'name' => __('Single Post Sidebar', 'alpha'),
      'id' => 'sidebar-1',    // V.V.I. theme file a ei ID diye check kra lage
      'description' => 'Right Sidebar',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
      ]
    );
  }
  
  // 3.17.1 Register a widget for Sidebar
add_action('widgets_init', 'alpha_sidebar');