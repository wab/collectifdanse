<article <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="pull-right m-l-1">
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail')); ?>
      </a>
  	<?php endif; ?>

  	<?php get_template_part('templates/event-header'); ?>
  	
	  <div class="entry-summary">
	  	
	    <?php the_excerpt(); ?>
		
		<p class="text-md-right"><i class="fa fa-hand-o-right"></i> <a href="<?php the_permalink(); ?>" class="">Lire la suite</a></p>

	  </div>
</article>
