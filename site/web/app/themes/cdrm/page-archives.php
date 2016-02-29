<?php
/*
Template Name: Page d'archives
*/
$archives = array(
  'post_type' => 'agenda',
  'posts_per_page' => -1,
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  'meta_type' => 'DATE',
  'meta_key'=> 'event_start_date',
  'tax_query' => array(
    array(
      'taxonomy' => 'event-type',
      'field'    => 'slug',
      'terms'    => 'residences',
    ),
  ),
  'meta_query'  => array(         // restrict posts based on meta values
    'key'     => 'event_end_date',  // which meta to query
    'value'   => date("y-m-d"),  // value for comparison
    'compare' => '<=',          // method of comparison
    'type'    => 'DATE'         // datatype, we don't want to compare the string values
  ) // end meta_query array

);

?>

<?php while (have_posts()) : the_post(); ?>

	
    <?php get_template_part('templates/page', 'header'); ?>
  	<?php get_template_part('templates/content', 'page'); ?>

	<?php 
	  // the query
	  $archives_query = new WP_Query( $archives ); ?>

	  <?php if ( $archives_query->have_posts() ) : ?>

	    <!-- pagination here -->

	    <ul class="list-unstyled list-archives">

	    <!-- the loop -->
	    <?php while ( $archives_query->have_posts() ) : $archives_query->the_post(); ?>
	      <li>
	      	<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	      </li>
	      
	    <?php endwhile; ?>
	    <!-- end of the loop -->

	    <!-- pagination here -->

	    </ul>

	    <?php wp_reset_postdata(); ?>

	  <?php else : ?>
	    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	  <?php endif; ?>
            

<?php endwhile; ?>
