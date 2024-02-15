<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package symbol
 */

if ( ! is_active_sidebar( 'left_sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'left_sidebar' ); ?>
</div><!-- #secondary -->