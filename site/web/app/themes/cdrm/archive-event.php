<?php               
$args = array(

  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  'meta_type' => 'DATE',
  'meta_key'=> 'event_start_date',
  'meta_query'  => array(         // restrict posts based on meta values
    'key'     => 'event_end_date',  // which meta to query
    'value'   => date("y-m-d"),  // value for comparison
    'compare' => '>=',          // method of comparison
    'type'    => 'DATE'         // datatype, we don't want to compare the string values
  ) // end meta_query array

);

$args = array_merge( $args , $wp_query->query );

query_posts( $args );
?>

<h1>L'agenda</h1>
<hr>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
