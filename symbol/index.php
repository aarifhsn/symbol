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

<?php get_header(); ?>
	
	<div class="wrapper">
		<div class="container">
			<div class="row">
				
				<?php if(get_theme_mod('sidebar_visibility') === true ) : ?>
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					
						<?php get_sidebar(); ?>
						
					</div>
					
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					
						<div class="blog_content">
							
							<?php 
								get_template_part('post-loop');
							?>
							
						</div>
						
					</div>
				
				<?php else : ?>
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
						<div class="blog_content">
							
							<?php 
								get_template_part('post-loop');
							?>
							
						</div>
						
					</div>
				<?php endif; ?>
				
				
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>