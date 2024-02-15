<?php
/**
 * @version   	1.0.3
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
				<div class="col-lg-12">
					<div class="error_content">
						
						<div class="search_error">
								<h3><i class="fa fa-exclamation-circle"><?php _e('404, ERROR', 'symbol'); ?></i></h3>
									
								<p><?php _e('Sorry, but the page you are trying to reach is unavailable or does not exist.', 'symbol'); ?></p>
								
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
	
<?php get_footer(); ?>