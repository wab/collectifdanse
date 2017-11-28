<article @php(post_class())>
	<header>
		<h1 class="entry-title">{{ get_the_title() }}</h1>
	</header>
	<div class="entry-content">
		@if(has_post_thumbnail())
      @php(the_post_thumbnail('large')
    @endif
    @php(the_content())
	</div>
	<footer>
		{!! wp_link_pages(['echo' => 0, 'before' => '
		<nav class="page-nav">
			<p>' . __('Pages:', 'sage'), 'after' => '</p>
		</nav>']) !!}
	</footer>
</article>