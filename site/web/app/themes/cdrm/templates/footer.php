<aside class="lieu section">
	<div class="container">
		<row>
			<div class="col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.0773971461977!2d-1.7103105488711865!3d48.12803077912069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ee0a2d2b7e41b%3A0x62e57d421a19f427!2sLe+Garage!5e0!3m2!1sfr!2sfr!4v1447403799350" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			<div class="col-md-4">
				<address>
					<h1>Le garage</h1>
					<p><i class="fa fa-map-marker"></i> 18 Rue André et Yvonne Meynier,<br> 35000 Rennes</p>
					<p><i class="fa fa-phone"></i> 02 23 46 79 41</p>
					<p><a href="#" class="btn btn-primary"><i class="fa fa-envelope"></i> Nous contacter</a></p>
				</address>
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
	      <h2 class="h4"><span class="fa fa-link"></span> Quelques liens utiles ...</h2>
	      <hr>
	      <ul class="list-unstyled">
	        <li><a href="index.html">Lorem ipsum dolor adipisicing elit.</a></li>
	        <li><a href="index.html">Lorem ipsum, consectetur adipisicing elit.</a></li>
	        <li><a href="index.html">Lorem ipsum dolor sit amet,</a></li>
	        <li><a href="index.html">Lorem ipsum amet,  elit.</a></li>
	        <li><a href="index.html">Lorem  adipisicing elit.</a></li>
	      </ul>
	    </div>
	    <div class="col-lg-4 col-md-8 col-sm-12">
	      <h2 class="h4"><span class="fa fa-send"></span> La newsletter</h2>
	      <hr>
	      <p>Inscrivez-vous à notre newsletter mensuelle</p>
	        
	        <div class="input-group">
	          <input type="text" class="form-control" placeholder="entrez votre email">
	          <span class="input-group-btn">
	            <button class="btn btn-info" type="button">S'inscrire</button>
	          </span>
	        </div><!-- /input-group -->
	    </div>
	  </div>
	  <hr>
	  <p class="text-right"><span class="fa fa-copyright"></span> Collectif Danse Rennes Métropole / <a href="#">contact</a> / <a href="#">plan du site</a> / <a href="#">mentions légales</a></p>
	</div>
</footer>