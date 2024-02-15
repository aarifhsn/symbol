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
				<div class="woocommerce">
				
					<?php woocommerce_content(); ?>
					
				</div>
			</div>
		</div>
		
	</div>
	
<?php get_footer(); ?>