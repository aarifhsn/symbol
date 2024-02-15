<?php


/* Customizer postMessage control script */

	function symbol_customize_script() {
		wp_enqueue_script('customizer_postMessage_script', get_template_directory_uri().'/js/customizer_script.js', array('jquery', 'customize-preview'));
	}
	add_action('customize_preview_init','symbol_customize_script');

/* theme options inline colors */


function symbol_inline_color() { ?>
	
	<style type="text/css">
		<?php if(get_theme_mod('bg_color')) : ?>
			body {background: <?php echo get_theme_mod('bg_color'); ?> none repeat scroll 0 0}
		<?php endif; ?>
		
		<?php if(get_theme_mod('body_font_size')) : ?>
			body {font-size: <?php echo get_theme_mod('body_font_size'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('mainmenu_font_size')) : ?>
			.mainmenu ul li a {font-size: <?php echo get_theme_mod('mainmenu_font_size'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('header_bg_color')) : ?>
			.header {background: <?php echo get_theme_mod('header_bg_color'); ?> none repeat scroll 0 0 }
		<?php endif; ?>
		
		<?php if(get_theme_mod('topmenu_font_size')) : ?>
			.header .login_section ul li a {font-size: <?php echo get_theme_mod('topmenu_font_size'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('store_area_color')) : ?>
			.address_area {color: <?php echo get_theme_mod('store_area_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('theme_color')) : ?>
			.menu_section, 
			.owl-theme .owl-controls .owl-buttons div,
			.footer, .signup_form .subscription-form #subscribe-button,
			.follow_us ul li a, 
			#respond input#submit,
			.woocommerce #respond input#submit, 
			.woocommerce a.button, 
			.woocommerce button.button, 
			.woocommerce input.button, 
			.addresses .address header a, 
			.post_thumbnail h3 span.year, 
			.pagination span,
			.pagination a.inactive,
			.archive_short_category,
			.post_content p a.moretag,
			.woocommerce legend	{background: <?php echo get_theme_mod('theme_color'); ?> none repeat scroll 0 0 !important}
		<?php endif; ?>
		
		<?php if(get_theme_mod('contact_info_area_background')) : ?>	
			.address_n_signup {background: url('<?php echo get_theme_mod('contact_info_area_background'); ?>') no-repeat fixed center center / cover rgba(0,0,0,0)}
		<?php endif; ?>
		
		<?php if(get_theme_mod('header_text_color')) : ?>
			.header .logo h4 {color: <?php echo get_theme_mod('header_text_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('logo_n_top_menu_color')) : ?>
			.header .logo h1 a, 
			.header .login_section ul li a, 
			.header .login_section a {color: <?php echo get_theme_mod('logo_n_top_menu_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('slider_text_color')) : ?>
			.owl-carousel .carousel_content h1, .carousel_content p {color: <?php echo get_theme_mod('slider_text_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('main_menu_color')) : ?>
			.mainmenu ul li a {color: <?php echo get_theme_mod('main_menu_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('post_bg_color')) : ?>
			.single_post {background: <?php echo get_theme_mod('post_bg_color'); ?> none repeat scroll 0 0}
		<?php endif; ?>
		
		<?php if(get_theme_mod('sidebar_bg')) : ?>
			.widget-area {background: <?php echo get_theme_mod('sidebar_bg'); ?> }
		<?php endif; ?>
		
		<?php if(get_theme_mod('theme_color')) : ?>
			.single_sidebar h3 {color: <?php echo get_theme_mod('sidebar_title_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('sidebar_title_color')) : ?>
			.single_sidebar ul li a {color: <?php echo get_theme_mod('sidebar_link_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('sidebar_text_color')) : ?>
			.single_sidebar li span {color: <?php echo get_theme_mod('sidebar_text_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('footer_heading_color')) : ?>
			.footer .single_footer h2,
			.footer .single_footer h3,
			.footer .copyright h3 {color: <?php echo get_theme_mod('footer_heading_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('footer_text_color')) : ?>
			.footer .single_footer p {color: <?php echo get_theme_mod('footer_text_color'); ?>}
		<?php endif; ?>
		
		<?php if(get_theme_mod('footer_link_color')) : ?>
			.footer .single_footer ul li a {color: <?php echo get_theme_mod('footer_link_color'); ?>}
		<?php endif; ?>
		
	</style>
	
<?php }

add_action('wp_footer', 'symbol_inline_color');



?>