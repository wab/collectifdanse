<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; ';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

// Custom logo on login page
function custom_login_logo() { ?>
    <style type="text/css">
      .login h1 a {
          text-indent: 0;
          font-size: 2rem;
          width: 100%;
          height: auto;
          background-image: none;
          background-size: 100%;
      }
    </style>
<?php }
add_action( 'login_enqueue_scripts',  __NAMESPACE__ . '\\custom_login_logo' );

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Actualités';
    $submenu['edit.php'][5][0] = 'Actualités';
    $submenu['edit.php'][10][0] = 'Ajouter une actualité';
    echo '';
}
add_action( 'admin_menu', __NAMESPACE__ . '\\change_post_menu_label' );

