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
      <div class="bigwrapper">
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div class="wrap container p-t-3 p-b-3" role="document">
        
       <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p class="breadcrumb">','</p>');
      } ?>
        
        <div class="content row">
          <main class="main" role="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar" role="complementary">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
     ?>
     </div><!-- content -->
    </div><!-- content-wrap -->
    <?php wp_footer(); ?>

  </body>
</html>
