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


	if ($sd == $ed) {
		$eventdate = date_i18n($dateformatstring, $start_date);
	}
	else {
		$eventdate = 'du '.date_i18n($start_dateformatstring, $start_date).' au '.date_i18n($end_dateformatstring, $end_date);
	}


?>
<p><i class="fa fa-calendar"></i> <time datetime="<?php echo $eventtime; ?>" class="text-info"><?php echo $eventdate; ?></time></p>
<?php if(get_the_terms($post->ID, 'event-type') ): ?>
	<p><?php echo get_the_term_list( $post->ID, 'event-type',  '<i class="fa fa-folder"></i> ', '.', '' ); ?></p>
<?php endif; ?>