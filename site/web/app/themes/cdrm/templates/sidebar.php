<?php 
    $eventype = array(
		'show_option_all'    => '',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 1,
		'use_desc_for_title' => 0,
		'include'            => '',
		'hierarchical'       => 1,
		'title_li'           => '',
		'taxonomy'           => 'event-type',
		'walker'             => 'Walker_Category'
	 );
    $compagnies = array(
		'show_option_all'    => '',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 0,
		'hide_empty'         => 1,
		'use_desc_for_title' => 0,
		'include'            => '',
		'hierarchical'       => 1,
		'title_li'           => '',
		'taxonomy'           => 'compagnie',
		'walker'             => 'Walker_Category'
	 );
    
?>

<?php get_template_part('templates/searchform'); ?>

<?php if(is_post_type_archive('event') || is_page_template('page-archives.php') || is_tax('event-type') || is_tax('compagnie') || is_singular('event') )   : ?>

	<p><a href="<?php bloginfo('url') ?>/archives" class="btn btn-block btn-primary-outline <?php if (is_page_template('page-archives.php')) { echo 'active disabled'; } ?>"><i class="fa fa-archive"></i> voir les archives</a></p>
	<h2 class="h4">Catégories :</h2>
	<ul class="nav nav-category">
		<?php wp_list_categories( $eventype ); ?>
	</ul>
	<hr>
	<h2 class="h4">Compagnies :</h2>
	<ul class="nav nav-category">
		<?php wp_list_categories( $compagnies ); ?>
	</ul>

	<?php dynamic_sidebar('sidebar-event'); ?>

<?php endif; ?>

<?php if(is_post_type_archive('post') || is_home() || is_singular('post') || is_archive()  )  : ?>

	<h2 class="h4">Catégories :</h2>
	<ul class="nav nav-category">
		<?php wp_list_categories('title_li=&walker=Walker_Category'); ?>
	</ul>

	<?php dynamic_sidebar('sidebar-post'); ?>

<?php endif; ?>




