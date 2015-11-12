<footer class="ours" role="contentinfo">
	<div class="container">
	  <div class="row">
	    <div class="col-md-4">
	      <h2 class="h4"><span class="fa fa-sitemap"></span> Plan du site</h2>
	      <hr>
 			<?php
		      if (has_nav_menu('primary_navigation')) :
		        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled']);
		      endif;
		      ?>
	    </div>
	    <div class="col-md-4">
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
	    <div class="col-md-4">
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