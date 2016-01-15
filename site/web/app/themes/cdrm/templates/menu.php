<div class="menu-wrap">
  <nav class="menu">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled']);
      endif;
      ?>
    <div class="reseaux">
      <a href=""><i class="fa fa-facebook-square"></i></a>
      <a href="#"><i class="fa fa-rss-square"></i></a>
    </div>
    <?php get_template_part('templates/searchform'); ?>
  </nav>
  <button class="close-button" id="close-button">Close Menu</button>
  <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
      <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
    </svg>
  </div>
</div>
