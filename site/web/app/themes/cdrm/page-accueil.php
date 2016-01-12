<?php
/**
 * Template Name: Page accueil
 */

$agenda = array(
  'post_type' => 'event',
  'posts_per_page' => 3,
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  'meta_type' => 'DATE',
  'meta_key'=> 'event_start_date',
  'tax_query' => array(
    array(
      'taxonomy' => 'event-type',
      'field'    => 'slug',
      'terms'    => 'residences',
    ),
  ),
  'meta_query'  => array(         // restrict posts based on meta values
    'key'     => 'event_end_date',  // which meta to query
    'value'   => date("y-m-d"),  // value for comparison
    'compare' => '>=',          // method of comparison
    'type'    => 'DATE'         // datatype, we don't want to compare the string values
  ) // end meta_query array

);

?>
<?php while (have_posts()) : the_post(); ?>
	<?php
        do_action('get_header');
        get_template_part('templates/header');
    ?>

     <main class="section" role="main">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-12">
               <div class="presentation">
	
  				<?php get_template_part('templates/content', 'page'); ?>

  				</div>
               <div class="cta">
                 <a href="<?php bloginfo('url') ?>/le-projet" class="btn btn-primary btn-lg"><i class="fa fa-search"></i> Découvrir le projet</a>
                 <?php 

                  $file = get_field('file');

                  if( $file ): ?>
                    
                    <a href="<?php echo $file['url']; ?>" class="btn btn-info-outline btn-lg"><i class="fa fa-pencil"></i> Faire une demande résidence</a>
                    
                  <?php endif; ?>
                 
               </div>
            </div>
          </div>
        </div>
      </main>

       <section class="agenda section">
        <div class="container">
          <h1>Les résidences en cours et à venir</h1>
          <div class="row">

            <?php 
              // the query
              $agenda_query = new WP_Query( $agenda ); ?>

              <?php if ( $agenda_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $agenda_query->have_posts() ) : $agenda_query->the_post(); ?>
                  <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
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
        
      </section> <!-- /.agenda -->

<?php endwhile; ?>

     
