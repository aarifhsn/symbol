<?php 

function symbol_customizer($wpdevs_custom) {
	
	global $woocommerce;

	/***** Header section *****/
	
	$wpdevs_custom->	add_section('header_section', array(
		'title'		=>	__('Header', 'symbol'),
		'priority'	=>	'25'
	));
	
	$wpdevs_custom->	add_setting('upload_logo', array(
		'transport'	=>	'refresh',
		'default'	=>	''
	));
	
	$wpdevs_custom->	add_control(
		new WP_Customize_Image_Control($wpdevs_custom, 'upload_logo', array(
			'section'	=>	'header_section',
			'label'		=>	__('Logo - Title text will be hidden', 'symbol'),
			'desc'		=>	'Upload 350 * 50 px image to view better',
			'settings'	=>	'upload_logo'
		))
	);
	
	$wpdevs_custom->	add_setting('header_text_color', array(
		'transport'	=>	'postMessage',
		'default'	=>	'#00594b'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'header_text_color', array(
			'section'	=>	'header_section',
			'label'		=> 	__('Text Color', 'symbol'),
			'settings'	=>	'header_text_color'
		))
	);
	
	$wpdevs_custom->	add_setting('logo_n_top_menu_color', array(
		'transport'	=>	'postMessage',
		'default'	=>	'#4a8ab5'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'logo_n_top_menu_color', array(
			'section'	=>	'header_section',
			'label'		=>	__('Logo and Top menu Color', 'symbol'),
			'settings'	=>	'logo_n_top_menu_color'
		))
	);
	
	$wpdevs_custom->	add_setting('main_menu_color', array(
		'transport'	=>	'postMessage',
		'default'	=>	'#FFFFFF'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'main_menu_color', array(
			'section'	=>	'header_section',
			'label'		=>	__('Main Menu color', 'symbol'),
			'settings'	=>	'main_menu_color'
		))
	);
	
	
	$wpdevs_custom->	add_setting('header_bg_color', array(
		'transport'	=>	'postMessage',
		'default'	=>	'#fff'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'header_bg_color', array(
			'section'	=>	'header_section',
			'label'		=>	__('Header Background color <h5 style="margin: 0">if header background image is hidden.</h5>', 'symbol'),
			'settings'	=>	'header_bg_color'
		))
	);
	
	
		
	/***** Color scheme *****/
	
	$wpdevs_custom-> add_section ('color_section', array(
		'title'		=> __('Color Scheme', 'symbol'),
		'priority'	=>	91
	));
	
	$wpdevs_custom-> add_setting('theme_color', array(
		'transport'	=> 'refresh',
		'default'	=>	'#4a8ab5'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'theme_color', array(
			'section'	=>	'color_section',
			'label'		=>	__('Theme Color', 'symbol'),
			'settings'	=>	'theme_color'
		))
	);
	
	$wpdevs_custom-> add_setting('bg_color', array(
		'transport'	=> 'postMessage',
		'default'	=>	'#f5f5f5'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'bg_color', array(
			'section'	=>	'color_section',
			'label'		=>	__('Background Color', 'symbol'),
			'settings'	=>	'bg_color'
		))
	);
	
	
	/***** typography *****/
	
	$wpdevs_custom-> add_section('typography_section', array(
		'title'		=>	__('Typography', 'symbol'),
		'priority'	=> 92
	));
	$wpdevs_custom-> add_setting('body_font_size', array(
		'transport'		=>	'postMessage',
		'default'		=> 	'14px'
	));
	$wpdevs_custom-> add_control('body_font_size', array(
		'section'	=> 'typography_section',
		'label'		=>	__('body font size (px)', 'symbol'),
		'type'		=> 'text'
	));
	$wpdevs_custom-> add_setting('mainmenu_font_size', array(
		'transport'		=>	'postMessage',
		'default'		=> 	'14px'
	));
	$wpdevs_custom-> add_control('mainmenu_font_size', array(
		'section'	=> 'typography_section',
		'label'		=>	__('Main menufont size (px)', 'symbol'),
		'type'		=> 'text'
	));
	$wpdevs_custom-> add_setting('topmenu_font_size', array(
		'transport'		=>	'postMessage',
		'default'		=> 	'13px'
	));
	$wpdevs_custom-> add_control('topmenu_font_size', array(
		'section'	=> 'typography_section',
		'label'		=>	__('top menu font size (px)', 'symbol'),
		'type'		=> 'text'
	));
	
	/***** sidebar section *****/
	
	$wpdevs_custom->	add_section('sidebar_section', array(
		'title'		=>	__('Sidebar', 'symbol'),
		'priority'	=>	93
	));
	
	$wpdevs_custom->add_setting('sidebar_visibility', array(
		'default'	=> true
	));
	
	$wpdevs_custom-> add_control('sidebar_visibility', array(
			
			'section'	=>	'sidebar_section',
			'label'		=>	__('Show/Hide Left sidebar', 'symbol'),
			'type'	=>	'checkbox'
	));
	
	$wpdevs_custom->add_setting('sidebar_bg', array(
		'transport'		=>	'refresh',
		'default'	=> '#f0f0f0'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'sidebar_bg', array(
			
			'section'	=>	'sidebar_section',
			'label'		=>	__('Background color', 'symbol'),
			'settings'	=>	'sidebar_bg'
		))
	);
	
	$wpdevs_custom->add_setting('sidebar_title_color', array(
		'transport'	=>	'refresh',
		'default'	=> 	'#337ab7'
	));
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'sidebar_title_color', array(
			
			'section'	=>	'sidebar_section',
			'label'		=>	__('Title Color', 'symbol'),
			'settings'	=>	'sidebar_title_color'
		))
	);
	
	$wpdevs_custom->add_setting('sidebar_link_color', array(
		'transport'	=>	'refresh',
		'default'	=> 	'#333'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'sidebar_link_color', array(
			
			'section'	=>	'sidebar_section',
			'label'		=>	__('Link Color', 'symbol'),
			'settings'	=>	'sidebar_link_color'
		))
	);
	
	$wpdevs_custom->add_setting('sidebar_text_color', array(
		'transport'	=>	'refresh',
		'default'	=> 	'#333'
	));
	
	$wpdevs_custom-> add_control(
		new WP_Customize_Color_Control($wpdevs_custom,'sidebar_text_color', array(
			
			'section'	=>	'sidebar_section',
			'label'		=>	__('Text Color', 'symbol'),
			'settings'	=>	'sidebar_text_color'
		))
	);
	
	
	/***** Footer section *****/
	
	$wpdevs_custom->	add_section('footer_section', array(
		'title'		=>	__('Footer', 'symbol'),
		'priority'	=>	94
	));
	
	$wpdevs_custom->add_setting('shop_description_visibility');
	
	$wpdevs_custom->add_control('shop_description_visibility', array(
		'section'	=>	'footer_section',
		'label'		=>	__('Show Shop Description', 'symbol'),
		'type'		=>	'checkbox'
	));
	
	$wpdevs_custom->add_setting('shop_description_title', array(
		'default'	=>	'Symbol Dress Collection',
		'transport'	=>	'postMessage'
		
	));
	
	$wpdevs_custom->add_control('shop_description_title', array(
		'section'	=>	'footer_section',
		'label'		=>	__('Shop Title', 'symbol'),
		'type'		=>	'text'
	));
	
	$wpdevs_custom->add_setting('shop_description_detail', array(
		'default'	=>	'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
						tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. ',
		'transport'	=>	'postMessage'
		
	));
	
	$wpdevs_custom->add_control('shop_description_detail', array(
		'section'	=>	'footer_section',
		'label'		=>	__('Shop Description', 'symbol'),
		'type'		=>	'textarea'
	));
	
	
	$wpdevs_custom->add_setting('footer_text_color', array(
		'default'	=>	'#f5f5f5',
		'transport'	=>	'postMessage'
		
	));
	
	$wpdevs_custom-> add_control(
		
		new WP_Customize_Color_Control($wpdevs_custom,'footer_text_color', array(
			
			'section'	=>	'footer_section',
			'label'		=>	__('Text color', 'symbol'),
			'settings'	=>	'footer_text_color'
		))
	);
	
	$wpdevs_custom->add_setting('footer_heading_color', array(
		'default'	=>	'#FFFFFF',
		'transport'	=>	'postMessage'
		
	));
	
	$wpdevs_custom-> add_control(
		
		new WP_Customize_Color_Control($wpdevs_custom,'footer_heading_color', array(
			
			'section'	=>	'footer_section',
			'label'		=>	__('Heading color', 'symbol'),
			'settings'	=>	'footer_heading_color'
		))
	);
	
	$wpdevs_custom->add_setting('footer_link_color', array(
		'default'	=>	'#337ab7',
		'transport'	=>	'postMessage'
		
	));
	
	$wpdevs_custom-> add_control(	
		new WP_Customize_Color_Control($wpdevs_custom,'footer_link_color', array(
			
			'section'	=>	'footer_section',
			'label'		=>	__('Link color', 'symbol'),
			'settings'	=>	'footer_link_color'
		))
	);
	
	$wpdevs_custom->add_setting('copyright_text', array(
		'transport'	=>	'postMessage'
	));
	
	$wpdevs_custom->add_control('copyright_text', array(
		'section'	=>	'footer_section',
		'label'		=>	__('Copyright Text', 'symbol'),
		'type'		=>	'text'
	));
	
	
	
	
	/***** Home section *****/
	
	$wpdevs_custom->	add_section('home_template_section', array(
		'title'		=>	__('Home template', 'symbol'),
		'priority'	=>	95
	));
	
	
	$wpdevs_custom-> add_setting('slider_text_color', array(
		'transport'	=>	'postMessage',
		'default'	=>	'#333'
	));
	$wpdevs_custom-> add_control(
			new WP_Customize_Color_Control($wpdevs_custom,'slider_text_color', array(
			'section'	=>	'home_template_section',
			'label'		=>	__('Slider Text Color', 'symbol'),
			'settings'	=>	'slider_text_color',
		))
	);
	
	
	if (!isset($woocommerce)) {
		
		$wpdevs_custom-> add_setting('post_per_page_non_woo', array(
			'transport'	=>	'refresh',
			'default'	=>	'4'
		));
		
		$wpdevs_custom-> add_control('post_per_page_non_woo', array(
			'section'	=>	'home_template_section',
			'label'		=>	__('Posts Per Page', 'symbol'),
			'type'		=>	'text',
		));
		
		$wpdevs_custom-> add_setting('post_bg_color', array(
			'transport'	=>	'refresh',
			'default'	=>	'#fff'
		));
		
		$wpdevs_custom->add_control(
			new WP_Customize_Color_Control($wpdevs_custom,'post_bg_color', array(
			'section'	=>	'home_template_section',
			'label'		=>	__('Posts Background Color', 'symbol'),
			'settings'	=>	'post_bg_color',
			))
		);
	}
	
	$wpdevs_custom->add_setting('contact_info_area_visibility', array(
		'default'	=> true
	));
	
	$wpdevs_custom->add_control('contact_info_area_visibility', array(
		'section'	=>	'home_template_section',
		'label'		=>	__('Show Contact info Area', 'symbol'),
		'type'		=>	'checkbox'
	));
	
	$wpdevs_custom->add_setting('contact_info_area_background', array(
		'transport'	=>	'refresh'
	));
	
	$wpdevs_custom->	add_control(
		new WP_Customize_Image_Control($wpdevs_custom, 'contact_info_area_background', array(
			'section'	=>	'home_template_section',
			'label'		=>	__('Contact info background image', 'symbol'),
			'settings'	=>	'contact_info_area_background'
		))
	);

	$wpdevs_custom-> add_setting('shop_title',array(
		'default'	=>	'Shop Name',
		'transport'	=> 'postMessage'
	));
	$wpdevs_custom-> add_control('shop_title',array(
		
		'section'	=>	'home_template_section',
		'label'		=>	__('Shop Title or your title', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('shop_address1',array(
		'default'	=>	'Sarak Bajar',
		'transport'	=> 'postMessage'
	));
	$wpdevs_custom-> add_control('shop_address1',array(
		'section'	=>	'home_template_section',
		'label'		=>	__('Shop Address 1 /your detail 1', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('shop_address2',array(
		'default'	=> 'Opening Time',
		'transport'	=> 'postMessage'
	));
	$wpdevs_custom-> add_control('shop_address2',array(
		'section'	=>	'home_template_section',
		'label'		=>	__('Shop address 2 / your detail 2', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('shop_address3',array(
		'default'	=>	'Sunday-Friday : 9am-9pm',
		'transport'	=> 'postMessage'
	));
	$wpdevs_custom-> add_control('shop_address3',array(
		'section'	=>	'home_template_section',
		'label'		=>	__('Shop address 3 / your detail 3', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('mailchimp_action_url',array(
		'default'	=>	'',
		'transport'	=> 'refresh'
	));
	$wpdevs_custom-> add_control('mailchimp_action_url',array(
		'section'	=>	'home_template_section',
		'label'		=>	__('Your Mailchimp Subscription Link', 'symbol'),
		'type'		=>	'text'
	));
	
	
	/***** SOCIAL FOLLOW SECTION *****/
	
	$wpdevs_custom-> add_section('social_follow',array(
		'title'		=> __('Social Follow link', 'symbol'),
		'priority'	=>	'96'
	));
	
	$wpdevs_custom-> add_setting('social_visibility');
	
	$wpdevs_custom-> add_control('social_visibility', array(
		'section'	=>	'social_follow',
		'label'		=>	__('Show Social Icons', 'symbol'),
		'type'		=>	'checkbox'
	));
	
	$wpdevs_custom-> add_setting('fb_link', array(
		'default'	=>	'http://www.fb.com',
		'transport'	=>	'refresh'
	));
	$wpdevs_custom-> add_control('fb_link', array(
		'section'	=>	'social_follow',
		'label'		=>	 __('Facebook Link', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('twitter_link', array(
		'default'	=>	'http://www.twitter.com',
		'transport'	=>	'refresh'
	));
	$wpdevs_custom-> add_control('twitter_link', array(
		'section'	=>	'social_follow',
		'label'		=>	 __('Twitter Link', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('pinterest_link', array(
		'default'	=>	'http://www.pinterest.com',
		'transport'	=>	'refresh'
	));
	$wpdevs_custom-> add_control('pinterest_link', array(
		'section'	=>	'social_follow',
		'label'		=>	 __('Pinterest Link', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('linkedin_link', array(
		'default'	=>	'http://www.linkedin.com',
		'transport'	=>	'refresh'
	));
	$wpdevs_custom-> add_control('linkedin_link', array(
		'section'	=>	'social_follow',
		'label'		=>	 __('Linkedin Link', 'symbol'),
		'type'		=>	'text'
	));
	$wpdevs_custom-> add_setting('dribbble_link');
	$wpdevs_custom-> add_control('dribbble_link', array(
		'section'	=>	'social_follow',
		'label'		=>	 __('Dribbble Link', 'symbol'),
		'type'		=>	'text'
	));
	
	
	/***** woocommerce section *****/
	
	if (isset($woocommerce)) {
	
		$wpdevs_custom->	add_section('woo_section', array(
			'title'		=>	__('Woo Settings', 'symbol'),
			'priority'	=>	97
		));
		
		
		$wpdevs_custom->add_setting('top_menu_visibility');
		
		
		$wpdevs_custom->add_control('top_menu_visibility', array(
			'section'	=>	'woo_section',
			'label'		=>	__('Enable WooCommerce Top Menu', 'symbol'),
			'type'		=>	'checkbox'
		));
		
		$wpdevs_custom->add_setting('latest_post_title', array(
			'transport'	=>	'postMessage',
			'default'	=> 	'Newest Items'
		));
		
		$wpdevs_custom->add_control('latest_post_title', array(
			'section'	=>	'woo_section',
			'label'		=>	__('Change Newest items Title', 'symbol'),
			'type'		=>	'text'
		));
		
		
		$wpdevs_custom-> add_setting('latest_posts_per_page', array(
			'transport'	=> 'refresh',
			'default'	=>	'8'
		));
		$wpdevs_custom-> add_control('latest_posts_per_page', array(
			'section'	=>	'woo_section',
			'label'		=>	__('Posts Per page', 'symbol'),
			'type'		=>	'text'
		));
			
		$wpdevs_custom->add_setting('featured_post_title', array(
			'transport'	=>	'postMessage',
			'default'	=> 'Featured Products'
		));
		
		$wpdevs_custom->add_control('featured_post_title', array(
			'section'	=>	'woo_section',
			'label'		=>	__('Change Featured Posts Title', 'symbol'),
			'type'		=>	'text'
		));
	}
	
}

add_action('customize_register','symbol_customizer');




?>