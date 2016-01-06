<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php get_template_part('templates/menu');?>

    <div class="content-wrap">

      <?php include Wrapper\template_path(); ?>

      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
     ?>
    </div> <!-- /.content-wrap -->
    
    <?php wp_footer(); ?>

  </body>
</html>
