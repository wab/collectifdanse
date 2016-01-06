<article <?php post_class('excerpt'); ?>>
  <header>
  	<?php if ( has_post_thumbnail() ) : ?>
		<p>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('event', array('class' => 'img-fluid')); ?>
			</a>
		</p>
	<?php endif; ?>
    <h2 class="entry-title h4"><?php the_title(); ?></h2>
    <?php get_template_part('templates/event-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <a href="<?php the_permalink(); ?>" class="btn btn-block btn-primary-outline">Lire la suite</a>
</article>
