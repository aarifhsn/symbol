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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
						<?php if(have_posts()) : ?>
						
							<?php get_template_part('post-loop');
								  get_template_part( 'pagenav' ); 
							?>
							
							<?php else : ?>
							<div class="search_error">
								<h3><i class="fa fa-exclamation-circle"></i><?php _e('Sorry, content not found', 'symbol'); ?></h3>
							</div>
							
						<?php endif; ?>
					
				</div>
			</div>
		</div>


	</div>

<?php get_footer(); ?>