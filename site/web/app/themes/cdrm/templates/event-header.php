<?php
	$sd = get_field('event_start_date');
	$ed = get_field('event_end_date');
	$dateformatstring = "l d F Y";
	$timeformatstring = "y-m-d";
	$start_dateformatstring = "d";
	$end_dateformatstring = "d F Y";

	$start_date = strtotime($sd);
	$end_date = strtotime($ed);

	$eventtime = date_i18n($timeformatstring, $start_date);

	$compagnie = get_field('compagnie');


	if ($sd == $ed) {
		$eventdate = date_i18n($dateformatstring, $start_date);
	}
	else {
		$eventdate = 'du '.date_i18n($start_dateformatstring, $start_date).' au '.date_i18n($end_dateformatstring, $end_date);
	}


?>
<header class="event-header">

	<?php if(has_term('residences', 'event-type')): ?>
	
	    <?php if( $compagnie ): ?>

	    	<?php if(is_single()): ?>

	    		<h1 class="entry-title"><small>Cie</small> <?php echo $compagnie->name; ?></h1>

	    	<?php else: ?>

				<h2 class="entry-title h3"><small>Cie</small> <?php echo $compagnie->name; ?></h2>

	    	<?php endif; ?>

	    <?php endif; ?>

	    <?php if(is_single()): ?>

	    	<h2 class="entry-title text-muted"><?php the_title(); ?></h2>

	    <?php else: ?>

	    	<h3 class="entry-title h5 text-muted"><?php the_title(); ?></h3>

	    <?php endif; ?>

	<?php else: ?>

		<?php if(is_single()): ?>

			<h1 class="entry-title"><?php the_title(); ?></h2>

		<?php else: ?>

			<h2 class="entry-title h3"><?php the_title(); ?></h2>

		<?php endif; ?>

		<?php if( $compagnie ): ?>

			<?php if(is_single()): ?>

	    		<h2 class="entry-title text-muted"><small>Cie</small> <?php echo $compagnie->name; ?></h3>

	    	<?php else: ?>

	    		<h3 class="entry-title h5 text-muted"><small>Cie</small> <?php echo $compagnie->name; ?></h3>

	    	<?php endif; ?>

	    <?php endif; ?>

	    

    <?php endif; ?>
    
    <p><i class="fa fa-calendar"></i> <time datetime="<?php echo $eventtime; ?>" class="text-info"><?php echo $eventdate; ?></time></p>
	<?php if(!is_front_page() && !is_page_template( 'page-archives.php' )): ?>
		<?php if(get_the_terms($post->ID, 'event-type') ): ?>
			<p><?php echo get_the_term_list( $post->ID, 'event-type',  '<i class="fa fa-folder"></i> ', '.', '' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>
</header>



