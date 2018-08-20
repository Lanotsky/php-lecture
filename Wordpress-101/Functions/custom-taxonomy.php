<?php 
/*
	==========================================
	 Custom Post Type
	==========================================
*/
function custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Types',
		'singular_name' => 'Type',
		'search_items' => 'Search Types',
		'all_items' => 'All Types',
		'parent_item' => 'Parent Type',
		'parent_item_colon' => 'Parent Type:',
		'edit_item' => 'Edit Type',
		'update_item' => 'Update Type',
		'add_new_item' => 'Add New Work Type',
		'new_item_name' => 'New Type Name',
		'menu_name' => 'Types'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'type' )
	);
	
	register_taxonomy('type', array('portfolio'), $args);
	
	//add new taxonomy NOT hierarchical
	
}
add_action( 'init' , 'custom_taxonomies' );

?>