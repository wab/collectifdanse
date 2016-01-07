<?php dynamic_sidebar('sidebar-primary'); ?>
<?php 
	$terms = get_terms( 'event-type' );
	 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	     echo '<ul class="nav nav-stacked">';
	     foreach ( $terms as $term ) {
	       echo '<li><a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a></li>';
	        
	     }
	     echo '</ul>';
	 }
?>
