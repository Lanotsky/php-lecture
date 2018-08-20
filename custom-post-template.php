<?php
/*
    Template name: <name>
*/

    get_header();
    
    $args = array('post_type' => 'portfolio', 'post_per_page' => 3 );
	$loop = new WP_Query( $args );
	
	if( $loop->have_posts() ):
		
		while( $loop->have_posts() ): $loop->the_post(); ?>
			
			<?php get_template_part('content', 'archive'); ?>
		
		<?php endwhile;
		
	endif;
		
    wp_reset_postdata();
    
    get_footer();
?>