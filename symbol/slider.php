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

<?php 
	$args = array( 'posts_per_page' => 5, 'post_type'=> 'symbol_main_slider');
	// the query
	$the_query = new WP_Query( $args );
?>
	
<?php if ( $the_query->have_posts() ) : ?>

<div class="container-fluid">
	<div class="row">
		<div class="themelamp_slider">
			<div id="owl-carousel" class="owl-carousel">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="item">
					<?php the_post_thumbnail('slider-item'); ?>

						<?php $slider_title = get_the_title(); ?>
						<?php $slider_content = get_the_content(); ?>

						<?php if($slider_title || $slider_content) : ?>
							<div class="carousel_content">
								<h1><?php echo $slider_title; ?></h1>
								<p><?php echo $slider_content; ?></p>
							</div>
						<?php endif; ?>
					
				</div>
				
				<?php endwhile; ?><!-- end of the loop -->
				
				<!-- put pagination functions here -->
				<?php wp_reset_postdata(); ?>
				
			</div>
		</div>
	</div>
</div>

<?php endif; ?>

