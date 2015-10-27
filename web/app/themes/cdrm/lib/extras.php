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
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Ajout des start date & end date sur l'écran d'admin pour les évènements
 */

//add_filter( 'manage_event_posts_columns', 'set_custom_edit_event_columns' );
//add_action( 'manage_event_posts_custom_column' , 'custom_event_column', 10, 2 );

function set_custom_edit_event_columns($columns) {
    unset( $columns['date'] );
    $columns['event_start_date'] = __( 'Start', 'cdrm' );
    $columns['event_end_date'] = __( 'End', 'cdrm' );

    return $columns;
}

function custom_event_column( $column, $post_id ) {
    switch ( $column ) {

         case 'event_start_date' :
            echo get_post_meta( $post_id , 'event_start_date' , true ); 
            break;


        case 'event_end_date' :
            echo get_post_meta( $post_id , 'event_end_date' , true ); 
            break;

    }
}
