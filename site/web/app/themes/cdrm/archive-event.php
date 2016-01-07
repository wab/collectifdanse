<?php
global $query_string;
query_posts( $query_string . '&order=ASC&orderby=meta_value_num&meta_type=DATE&meta_key=event_start_date' );
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
