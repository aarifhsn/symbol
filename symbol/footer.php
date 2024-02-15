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
		<div class="footer">
		
			<div class="footer_top">
			
				<div class="row">
					<div class="container">
						
						
						<?php if(get_theme_mod('shop_description_visibility') === true ) : ?>
						
						<div class="shop_desc single_footer">
						
							<?php if(get_theme_mod('shop_description_title')) : ?>
							
							<h2><?php echo esc_html( get_theme_mod('shop_description_title') ); ?></h2>
							
							<?php else : ?> 
							
							<h2>Symbol Dress Collection</h2>
							
							<?php endif; ?>
							
							<div class="divider"></div>
							
							<?php if(get_theme_mod('shop_description_detail')) : ?>
							
								<p class="org_comments"><?php echo esc_html( get_theme_mod('shop_description_detail')); ?></p>
							
							<?php else : ?>
								<p class="org_comments">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut l
									aoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
									quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
							<?php endif; ?>
						</div>
						
						<?php endif; ?>
						
						<?php dynamic_sidebar('footer_sidebar'); ?>
						
					</div>
				</div>
				
			</div>
				
			<div class="copyright">
				<?php if(get_theme_mod('copyright_text')) : ?>
					<h3><?php echo esc_html( get_theme_mod('copyright_text')); ?></h3>
				<?php else : ?>
					<h3>Symbol theme. &copy; symbol</h3>
				<?php endif; ?>
			</div>
		</div>
		
		<!--start scroll to top-->
			<div class="scrollUp fix"><a href=""><i class="fa fa-chevron-up"></i></a></div>
		<!--end scroll to top-->
		
		
		<?php wp_footer(); ?>
    </body>
</html>
