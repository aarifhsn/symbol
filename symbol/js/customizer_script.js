(function($) {
	
	$(document).ready(function() {
		
		//store area text change section
		wp.customize('shop_title', function(value) {
			value.bind(function(to) {
				$('.address_area h2').text(to);
			});
		});
		
		wp.customize('shop_address1', function(value) {
			value.bind(function(to) {
				$('.address_area p.store_add').text(to);
			});
		});
		
		wp.customize('shop_address2', function(value) {
			value.bind(function(to) {
				$('.address_area h4').text(to);
			});
		});
		
		wp.customize('shop_address3', function(value) {
			value.bind(function(to) {
				$('.address_area p.store_time').text(to);
			});
		});
		
		
		// store area color settings
		wp.customize('shop_area_color', function(value) {
			value.bind(function(to) {
				$('.address_area').css('color', to);
			});
		});
		
		wp.customize('slider_text_color', function(value) {
			value.bind(function(to) {
				$('.owl-carousel .carousel_content h1, .carousel_content p').css('color', to);
			});
		});
		
		// color settings
		wp.customize('bg_color', function(value) {	
			value.bind(function(to) {
				$('body').css('background', to);
			});
		});
		
		wp.customize('post_bg_color', function(value) {	
			value.bind(function(to) {
				$('.single_post').css('background', to);
			});
		});
		
		//typography section
		
		wp.customize('body_font_size', function(value) {	
			value.bind(function(to) {
				$('body').css('font-size', to);
			});
		});
		
		wp.customize('mainmenu_font_size', function(value) {	
			value.bind(function(to) {
				$('.mainmenu ul li a').css('font-size', to);
			});
		});
		
		wp.customize('topmenu_font_size', function(value) {	
			value.bind(function(to) {
				$('.header .login_section ul li a').css('font-size', to);
			});
		});
		
		
		// header color settings
		wp.customize('header_text_color', function(value) {
			value.bind(function(to) {
				$('.header .logo h4').css('color', to);
			});
		});
		
		wp.customize('logo_n_top_menu_color', function(value) {
			value.bind(function(to) {
				$('.header .logo h1 a, .header .login_section ul li a').css('color', to);
			});
		});
		
		wp.customize('main_menu_color', function(value) {
			value.bind(function(to) {
				$('.mainmenu ul li a').css('color', to);
			});
		});
		
		wp.customize('header_bg_color', function(value) {
			value.bind(function(to) {
				$('.header').css('background', to);
			});
		});
		
		wp.customize('shop_description_visibility', function(value) {
			value.bind(function(to) {
				false === to ? $('.footer .shop_desc').hide() :	$('.footer .shop_desc').show();
			});
		});
		
		wp.customize('contact_info_area_background', function(value) {
			value.bind(function(to) {
				$('.address_n_signup').css('background', to);
			});
		});

		wp.customize('shop_description_title', function(value) {
			value.bind(function(to) {
				$('.footer .shop_desc h2').text(to);
			});
		});
		
		wp.customize('shop_description_detail', function(value) {
			value.bind(function(to) {
				$('.footer .shop_desc p').text(to);
			});
		});
		
		wp.customize('footer_text_color', function(value) {
			value.bind(function(to) {
				$('.footer .single_footer p').css('color', to);
			});
		});
		
		wp.customize('footer_heading_color', function(value) {
			value.bind(function(to) {
				$('.footer h1, .footer h2, .footer h3, .footer h4, .footer h5, .footer h6, .footer .copyright h3').css('color', to);
			});
		});
		
		wp.customize('footer_link_color', function(value) {
			value.bind(function(to) {
				$('.footer a, .footer .single_footer ul li a').css('color', to);
			});
		});
		wp.customize('copyright_text', function(value) {
			value.bind(function(to) {
				$('.copyright h3').text(to);
			});
		});
		
		// extra section
		wp.customize('latest_post_title', function(value) {
			value.bind(function(to) {
				$('.products_title_section .area_title h3').text(to);
			});
		});
		
		wp.customize('featured_post_title', function(value) {
			value.bind(function(to) {
				$('.featured_area_title h1').text(to);
			});
		});
	})
	
}) (jQuery)