<?php
/**
 * @version    1.0.3
 * @package    symbol
 * @author     aarif hassan
 * @copyright  Copyright (C) 2015 devswave.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://devswave.com
 */
?>

<?php	$paged = 1;
		if ( get_query_var('paged') ) $paged = get_query_var('paged');
		if ( get_query_var('page') ) $paged = get_query_var('page');
		
		$post_per_page_non_woo = get_theme_mod('post_per_page_non_woo'); 
		
		$i = 0;
		$loop = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged, 'posts_per_page' => $post_per_page_non_woo ) );
		
		while ( $loop->have_posts() ) : $loop->the_post();
		
		get_template_part('custom-loop'); 
		
		$i++; endwhile;
		
		if ( function_exists( 'wp_pagenavi' ) ) {
			wp_pagenavi( array( 'query' => $loop ) );
			wp_reset_postdata();
			
		} else { symbol_pagination($loop->max_num_pages); }	
?>