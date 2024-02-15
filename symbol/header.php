<?php
/**
 * @version    2.0.0
 * @package    symbol
 * @author     Arif Hassan
 * @copyright  Copyright (C) 2015 mountaviary.com All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: https://mountaviary.com/
 */
?>

<!DOCTYPE html>
<?php global $woocommerce; ?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- Pingbacks -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php wp_head();?>
    </head>
	
    <body <?php body_class(); ?>>
	
	<div id="loader" class="se-pre-con"></div>
		
	<div class="header ">
	
		<div class="container">
			<div class="row">
				<div class="log_section d-flex">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="logo">
							<?php if ( function_exists( 'the_custom_logo' ) ) { 
								the_custom_logo();
							} ?>
						<div class="logo_content">
							<?php if ( display_header_text() ) : // If user chooses to display header text. ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						
								<?php
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
								<h4><?php echo $description; ?></h4>
								<?php endif; ?>
							<?php endif; ?>
						</div> 
							
						</div>
					</div>
					
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<div class="login_section">
							<?php if(isset($woocommerce)) : ?>
							
								<?php if(get_theme_mod('top_menu_visibility') === true) : ?>
								
								<ul>
									<?php if(!is_user_logged_in()) { ?>
										
									<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('Login / Registration','symbol'); ?></a></li>
									
									<?php }	else { ?>
									
									<li><a href="<?php echo site_url(); ?>/wp-login.php?action=logout" >LOG OUT </a></li>
									 
									<?php } ?>
									
									<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('My Account','symbol'); ?></a></li>
									<li><a href="<?php echo $woocommerce->cart->get_checkout_url()?>">CHECK OUT</a></li>
									<li><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
										<i class="fa fa-cart-arrow-down"></i> 
										<?php echo $woocommerce->cart->get_cart_total();  ?>-
										<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'symbol'), $woocommerce->cart->cart_contents_count);?>
										</a>
									</li>
								</ul>
								
								<?php endif; // end top_menu_visibility if statement ?>
							
							<?php else : ?>
							
								<?php wp_nav_menu( array( 'theme_location' => 'top-menu') ); ?>
								
							<?php endif; // end isset $woocommerce if statement ?>
							
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="menu_section">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-6">
						<div class="mainmenu">
							<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'menu') ); ?>
						</div>
						<a class="small_device_menu" href="#"><i class="fa fa-bars"></i><?php _e('Navigation', 'symbol'); ?></a>
						<div class="small_menu_area"></div> <!--end small_menu_area-->
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
						<div class="search_area">
							<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchform" id="searchform" method="get">
								<div>
									<input type="text" id="s" name="s" value="<?php echo get_search_query(); ?>" placeholder="Type and Hit Enter">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!--end header-->
		