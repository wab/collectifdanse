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


<h2 class="h4">Catégories :</h2>
<ul class="nav nav-category">
	<?php wp_list_categories( $eventype ); ?>
</ul>
<hr>
<h2 class="h4">Compagnies :</h2>
<ul class="nav nav-category">
	<?php wp_list_categories( $compagnies ); ?>
</ul>

<?php dynamic_sidebar('sidebar-primary'); ?>
