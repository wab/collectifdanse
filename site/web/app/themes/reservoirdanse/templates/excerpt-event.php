<article <?php post_class('excerpt'); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <p>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('event', array('class' => 'img-fluid')); ?>
      </a>
    </p>
  <?php endif; ?>

  <?php get_template_part('templates/event-header'); ?>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <a href="<?php the_permalink(); ?>" class="btn btn-block btn-primary-outline">Lire la suite</a>

</article>
