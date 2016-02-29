<aside class="lieu section">
	<div class="container">
		<row>
			<div class="col-md-4">
				<address>
					<h1>Le garage</h1>
					<p><i class="fa fa-map-marker"></i> 8 Rue André et Yvonne Meynier,<br> 35000 Rennes</p>
					<p><i class="fa fa-phone"></i> 02 23 46 79 41</p>
					<p><a href="<?php bloginfo('url');?>/contact" class="btn btn-primary"><i class="fa fa-envelope"></i> Nous contacter</a></p>
				</address>
			</div>

			<div class="col-md-8 map-wrap">
				<div class="map-overlay" onClick="style.pointerEvents='none'"></div><!-- wrap map iframe to turn off mouse scroll and turn it back on on click -->

				<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.0377499265114!2d-1.7103286843269674!3d48.1287953792227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ee0a2b28410d7%3A0x6218ea6d9ae2b82a!2s8+Rue+Andr%C3%A9+et+Yvonne+Meynier%2C+35000+Rennes!5e0!3m2!1sfr!2sfr!4v1452862953432" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</row>
	</div>
	
</aside>
<footer class="ours section" role="contentinfo">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-4 col-md-8 col-sm-12">
	      <h2 class="h4"><span class="fa fa-sitemap"></span> Plan du site</h2>
	      <hr>
 			<?php
		      if (has_nav_menu('primary_navigation')) :
		        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled']);
		      endif;
		      ?>
	    </div>
	    <div class="col-lg-4 col-md-8 col-sm-12">
	      
	      <?php
		      if (has_nav_menu('link')) : ?>

		  <h2 class="h4"><span class="fa fa-link"></span> Quelques liens utiles ...</h2>
	      <hr>

		  <?php 
		  	wp_nav_menu(['theme_location' => 'link', 'menu_class' => 'list-unstyled']);
		    endif; ?>
	    </div>
	    <div class="col-lg-4 col-md-8 col-sm-12">
	      <h2 class="h4"><span class="fa fa-send"></span> La newsletter</h2>
	      <hr>
	      <p><a href="http://eepurl.com/bSghGz" class="btn btn-info">Inscrivez-vous à notre newsletter mensuelle</a></p>

	        <!--
	        <div class="input-group">
	          <input type="text" class="form-control" placeholder="entrez votre email">
	          <span class="input-group-btn">
	            <button class="btn btn-info" type="button">S'inscrire</button>
	          </span>
	        </div> /input-group -->
	    </div>
	  </div>
	  <hr>
	  <p class="text-right">&copy; Collectif Danse Rennes Métropole / <a href="<?php bloginfo('url');?>/contact">contact</a> / <a href="<?php bloginfo('url');?>/sitemap_index.xml">plan du site</a> / <i class="fa fa-sign-in"></i> <a href="<?php echo wp_login_url(); ?> ">se connecter</a></p>
	</div>
</footer>