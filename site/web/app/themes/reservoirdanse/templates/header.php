<header class="mainheader" role="banner">
	<div class="container">
		<div class="header-wrapper">
	    	<h1 class="site-title"><span class="text-info">Reservoir Danse</span></h1>
        <h2 class="site-subtitle text-primary">anciennement Collectif Danse</h2>
		</div>
	</div>
	<button class="menu-button" id="open-button"><span class="fa fa-bars"></span><br>menu</button>

	<?php

	if (is_page_template('page-accueil.php')) :

		$carousel = get_field('carousel');

		if( $carousel ): ?>

		<div class="carousel">
			<?php foreach( $carousel as $img ): ?>
				<div class="carousel-item" style="background-image: url(<?php echo $img['url']; ?>);"></div>
	        <?php endforeach; ?>
		</div>

		<?php endif; ?>

	<?php endif; ?>
</header>
