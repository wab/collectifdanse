<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
     <?php get_template_part('templates/event-header'); ?>
    <div class="entry-content">
      <?php if ( has_post_thumbnail() ) : ?>
          <p><?php the_post_thumbnail('large', array('class' => 'img-fluid img-rounded')); ?></p>
          <?php if ( get_field('copyright') ) : ?>
            <p class="text-muted">&copy; <?php the_field('copyright'); ?></p>
          <?php endif; ?>
      <?php endif; ?>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
