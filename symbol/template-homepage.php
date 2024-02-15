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
 *
 * Template Name: Homepage
*/


get_header(); ?>
		
<?php global $woocommerce, $post, $product, $woocommerce_loop; ;?>

<!--start slider-->
	<?php echo get_template_part('slider'); ?>
<!--end slider-->

		
<div class="wrapper">

	<?php if(isset($woocommerce)) : ?>
	
	<div class="container">
	
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="all_products">
					<div class="products_title_section">
					
						<div class="area_title">
							
							<?php if(get_theme_mod('latest_post_title')) : ?>
								<h3><?php echo esc_html( get_theme_mod('latest_post_title')); ?></h3>
							<?php else : ?>
								<h3>Newest Items</h3>
							<?php endif; ?>
							
							<div class="divider_n"></div>
						</div>
					</div>

					
				<?php
					$woo_posts_per_page	= get_theme_mod('latest_posts_per_page');
					
					$args = array('post_type' => 'product','posts_per_page' => $woo_posts_per_page );
					
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
							
									
				<div class="single_product col-lg-3 col-md-3 col-sm-6 col-xs-12">
				
					<div class="nd-wrap nd-style-5">
						<?php get_template_part( 'sale_stock' ); ?> <!-- start show sale price or out of stock text-->

						<?php $image_link = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-full-image'); ?>
						
						<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'post-thumb'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="350px" height="420px" />'; ?>

						<div class="nd-content">
							<div class="nd-content_inner">
								<div class="nd-content_inner1">
									<span class="nd-icon">
										<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
									</span>
									<span class="nd-icon">
										<a data-toggle="tooltip"  title="" data-rel="prettyPhoto" href="<?php echo $image_link[0]; ?>"><span class="fa fa-search"></span></a>
									</span>
									<span class="nd-icon">
										<a data-toggle="tooltip" title="View Product" href="<?php the_permalink(); ?>"><span class="fa fa-link fa-fw"></span></a>
									</span>
								</div>					
							</div>				
						</div>
					</div>
					<div class="name_rate">
						<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<h6><?php echo $product->get_price_html(); ?></h6>
					</div>
				</div>
					
					<?php endwhile; 
			
				} wp_reset_postdata(); ?>

				</div>
				
				<div class="show_all">
					<h5><a href="<?php echo site_url(); ?>/shop">View All Items</a></h5>
				</div>
				
			</div>
			
			
			
		</div>
		
	</div>
		
	<?php endif; // end products if statement ?>
	
		
	<!--start featured_area-->
	
	<?php if(isset($woocommerce)) : ?>
	
	<div class="featured_area">
	
		<div class="container">
			<div class="feature_arg">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="featured_area_title">
						
							<?php if(get_theme_mod('featured_post_title')) : ?>
								<h1><?php echo esc_html( get_theme_mod('featured_post_title')); ?></h1>
							<?php else : ?>
								<h1>Featured Products</h1>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
				
				<?php
					$args = array( 'post_type' => 'product', 'meta_key' => '_featured','posts_per_page' => 15,'columns' => '3', 'meta_value' => 'yes' );
					$loop = new WP_Query( $args );
				?>
			
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="featured_slider">
						
						<?php  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						
							<div class="item">
							
								<?php get_template_part( 'sale_stock' ); ?> <!-- start show sale price or out of stock text-->
								
								<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?></a>
								<h4 class="add_cart_featured"><?php do_action( 'woocommerce_after_shop_loop_item' ); ?></h4>
								
								<div class="featured_post_content">
									
									<h3 class="featured_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									
									
									<h4><?php echo $product->get_price_html(); ?></h4>
									
	
								</div>
							</div>
							
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--end featured_area-->
	
	<?php endif; //end featured area if statement ?>
	
	
	<!-- if woocommerce not installed and want to show custom homepage with slider more other effects-->
	
	<?php if (!isset($woocommerce)) : ?>
		
		<div class="container">
			<div class="row">
			
			<?php if(get_theme_mod('sidebar_visibility') === true) : ?>
			
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				
					<?php get_sidebar(); ?>
					
				</div>
				
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				
					<?php get_template_part('homepage_blog_query'); ?>
						
				</div>
				
			<?php else : ?>
				
				<div class="col-lg-12">
				
					<?php get_template_part('homepage_blog_query'); ?>
						
				</div>
				
			<?php endif; ?>
				
			</div>
		</div>
	
	<?php endif; ?>
	
	
	<!--start subscribe_area-->
		
	<?php if(get_theme_mod('contact_info_area_visibility') === true) : ?>
		
		<div class="subscribe_area">
			<div class="container">
				<div class="row">
					<div class="address_n_signup">
						<div class="address_area">
							<h2><?php echo esc_html( get_theme_mod('shop_title')); ?></h2>
							<p class="store_add"><?php echo get_theme_mod('shop_address1'); ?></p>
							<div class="divider"></div>
							<h4><?php echo get_theme_mod('shop_address2'); ?></h4>
							<p class="store_time"><?php echo esc_html( get_theme_mod('shop_address3')); ?></p>
						</div>
						
						<!-- MAILCHIMP SUBSCRIBE FORM -->
						<div class="newsletter_signup_title" >
							
							
							<div class="newsletter_signup">
							
								<h4>Get In Touch</h4>
								<h6>If you wanna get updated of our all news and blogs, Please get in touch with us.</h6>
								
								<div class="signup_form">
								
									<form class="subscription-form validate mailchimp form-inline" action="<?php echo esc_url( get_theme_mod('mailchimp_action_url')); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
										<input type="email" name="EMAIL" id="subscriber-email" class="form-control input-box" placeholder="Your Email" required>
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;"><input type="text" name="b_7c7908e8369f47e51d3596b4c_3ca443aaf7" tabindex="-1" value=""></div>
										<input type="submit" value="Subscribe" name="subscribe" id="subscribe-button" class="btn standard-button">
									</form>
									
								</div>
							</div>
							
							
							<?php if (get_theme_mod('social_visibility') === true) : ?>
							<div class="follow_us">
								<ul>
								
									<?php if ( '' !== get_theme_mod( 'fb_link' ) ) { ?>
										<li><a target="_blank" href="<?php echo esc_url( get_theme_mod( 'fb_link' )); ?>"><i class="fa fa-facebook"></i></a></li>
									<?php } ?>
									<?php if ( '' !== get_theme_mod( 'twitter_link' ) ) { ?>
										<li><a target="_blank" href="<?php echo esc_url( get_theme_mod( 'twitter_link' )); ?>"><i class="fa fa-twitter"></i></a></li>
									<?php } ?>
									<?php if ( '' !== get_theme_mod( 'pinterest_link' ) ) { ?>
										<li><a target="_blank" href="<?php echo esc_url( get_theme_mod( 'pinterest_link' )); ?>"><i class="fa fa-pinterest"></i></a></li>
									<?php } ?>
									<?php if ( '' !== get_theme_mod( 'linkedin_link' ) ) { ?>
										<li><a target="_blank" href="<?php echo esc_url( get_theme_mod( 'linkedin_link' )); ?>"><i class="fa fa-linkedin"></i></a></li>
									<?php } ?>
									<?php if ( '' !== get_theme_mod( 'dribbble_link' ) ) { ?>
										<li><a target="_blank" href="<?php echo esc_url( get_theme_mod( 'dribbble_link' )); ?>"><i class="fa fa-dribbble"></i></a></li>
									<?php } ?>
									
								</ul>
							</div>
							<?php endif;?>
							
						</div>
						
						<!--END SUBSCRIPTION FORM -->
						
					</div>
				</div>
			</div>
		</div>
		
	<?php endif; ?>
	<!--end subscribe_area-->
	
</div> <!--end wrapper-->
				
				
				
<?php get_footer(); ?>