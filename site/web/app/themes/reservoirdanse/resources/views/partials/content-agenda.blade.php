<?php
	setlocale(LC_TIME, 'fra', 'fr_FR');
	$startdate = new DateTime( get_field('event_start_date') );
	$enddate = new DateTime( get_field('event_end_date') );
	$format_out = 'd F Y';
?>

<article @php(post_class())>
	<header>
		<h2 class="entry-title">
			<a href="{{ get_permalink() }}">{{ get_the_title() }}</a>
		</h2>
		@if(!empty($enddate))
			<p>Du {{$startdate->format( $format_out )}} au {{$enddate->format( $format_out )}}</p>
		@else
			<p>Le {{$startdate->format( $format_out )}}</p>
		@endif
	</header>
	<div class="entry-summary">
		@if(has_post_thumbnail())
			{!! the_post_thumbnail() !!}
    @endif
		@php(the_excerpt())
	</div>
</article>