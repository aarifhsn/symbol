<?php
/**
 * @version    1.0.3
 * @package    symbol
 * @author     aarif hassan
 * @copyright  Copyright (C) 2015 devswave.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://devswave.com
 *
 * Template Name: Full Width (No wrap content)
 */
?>

<?php get_header(); ?>
	
	<div class="wrapper">
		
		
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
			
					<div class="page_content">
					
						<h1 class="post_title"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
						
						 <?php the_content(); ?>
						 
						<?php endwhile; ?>
		
					</div>
					
				<?php else : ?>
				
					<h3><?php _e('404 Error&#58; Not Found', 'symbol'); ?></h3>
					
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>
	
<?php get_footer(); ?>