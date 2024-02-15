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


/*****************************************/
/***	shortcode support on widget    ***/
/*****************************************/

add_filter('widget_text', 'do_shortcode');


/*****************************************/
/***	woocommerce support            ***/
/*****************************************/

add_action('woocommerce_before_main_content', 'symbol_my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'symbol_my_theme_wrapper_end', 10);

function symbol_my_theme_wrapper_start() {
  echo '<section id="main">';
}

function symbol_my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'symbol_woocommerce_support' );
function symbol_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


require get_template_directory() . '/inc/init.php';

require get_template_directory() . '/inc/woo_snippets.php';

require get_template_directory() . '/inc/settings_panel.php';
require get_template_directory() . '/inc/customizer_panel.php';
require get_template_directory() . '/inc/comments_function.php';



if (class_exists('Woocommerce')) {

// LOAD PRETTY PHOTO for the whole site

add_action( 'wp_enqueue_scripts', 'symbol_frontend_scripts_include_lightbox' );

	function symbol_frontend_scripts_include_lightbox() {
	  global $woocommerce;
	  $suffix      = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	  $lightbox_en = get_option( 'woocommerce_enable_lightbox' ) == 'yes' ? true : false;

	  if ( $lightbox_en ) {
		wp_enqueue_script( 'prettyPhoto', $woocommerce->plugin_url() . '/assets/js/prettyPhoto/jquery.prettyPhoto' . $suffix . '.js', array( 'jquery' ), $woocommerce->version, true );
		wp_enqueue_script( 'prettyPhoto-init', $woocommerce->plugin_url() . '/assets/js/prettyPhoto/jquery.prettyPhoto.init' . $suffix . '.js', array( 'jquery' ), $woocommerce->version, true );
		wp_enqueue_style( 'woocommerce_prettyPhoto_css', $woocommerce->plugin_url() . '/assets/css/prettyPhoto.css' );
	  }
	}
}
