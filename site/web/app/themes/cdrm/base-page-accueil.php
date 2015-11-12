<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

$agenda = array(
  'post_type' => 'event',
  'posts_per_page' => 3,
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  'meta_type' => 'DATE',
  'meta_key'=> 'event_start_date'

);

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

      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <main class="p-t-lg p-b-lg" role="main">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <div class="presentation">
                <?php include Wrapper\template_path(); ?>
               </div>
               <div class="text-center">
                 <a href="#" class="btn btn-primary"><i class="fa fa-coffee"></i> Découvrir le projet</a>
                 <a href="#" class="btn btn-info"><i class="fa fa-edit"></i> Faire une demande résidence</a>
               </div>
            </div>
          </div>
        </div>
      </main>

      <section class="agenda p-t-lg p-b-lg">
        <div class="container">
          <div class="row">

            <?php 
              // the query
              $agenda_query = new WP_Query( $agenda ); ?>

              <?php if ( $agenda_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $agenda_query->have_posts() ) : $agenda_query->the_post(); ?>
                  <div class="col-md-4">
                    <div class="card">
                      <?php get_template_part('templates/excerpt', 'event'); ?>
                    </div>
                  </div>
                  
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

              <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
              <?php endif; ?>
            
          </div>
          <p class="text-right"><i class="fa fa-plus"></i> <a href="<?php bloginfo('url');?>/event">consulter l'agenda</a></p>
        </div>
        
      </section>

      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
     ?>
    </div>
    <?php wp_footer(); ?>

  </body>
</html>
