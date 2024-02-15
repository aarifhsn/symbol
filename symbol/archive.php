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
				
						<div class="">
							<h1 class="archive">
								<?php if (have_posts()) : ?>
								
									<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
										<?php /* If this is a category archive */ if (is_category()) { ?>
										
										<div class="archive_short_category">
											<?php _e('Category', 'symbol'); ?>
										</div>
										
										<div class="archive_title_category">
											<?php echo single_cat_title(); ?>
										</div>
										
										
										<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
											<div class="archive_short_category">
												<?php _e('Tag', 'symbol'); ?>
											</div>
											
											<div class="archive_title_category">
												<?php single_tag_title(); ?>
											</div>
											
										<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
											<div class="archive_short_category">
												<?php _e('Archive For', 'symbol'); ?>
											</div>
											
											<div class="archive_title_category">
												<?php the_time(get_option('F jS, Y')); ?>
											</div>
										<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
											<div class="archive_short_category">
												<?php _e('Archive For', 'symbol'); ?>
											</div>
											
											<div class="archive_title_category">
												<?php the_time(get_option('m')); ?>
											</div>
										<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
											<div class="archive_short_category">
												<?php _e('Archive For', 'symbol'); ?>
											</div>
											
											<div class="archive_title_category">
												<?php the_time(get_option('Y')); ?>
											</div>
											
										<?php /* If this is a search */ } elseif (is_search()) { ?>
											<div class="archive_short_category">
												<?php _e('Search results', 'symbol'); ?>
											</div>
										<?php /* If this is an author archive */ } elseif (is_author()) { ?>
											<div class="archive_short_category">
												<?php _e('Author Archive', 'symbol'); ?>
											</div>
										<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
											<div class="archive_short_category">
												<?php _e('Blog Archive', 'symbol'); ?>
											</div>    
								<?php } ?>
							</h1>


							<?php get_template_part('post-loop'); ?>
							
							<?php else : ?>
							
							<div class="search_error">
								<h3><i class="fa fa-exclamation-circle"></i><?php _e('Sorry, content not found', 'symbol'); ?></h3>
							</div>
							
							<?php endif; ?>
						</div>
						
				</div>
			</div>
		</div>


		
		
	</div>

<?php get_footer(); ?>
