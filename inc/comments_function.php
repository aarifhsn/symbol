<?php
/**
 * @version    1.0.1
 * @package    symbol
 * @author     aarif hassan
 * @copyright  Copyright (C) 2015 hellothirteen.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://hellothirteen.com
 *
 * Custom Function for Displaying Comments 
 */
 
function symbol_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;

	if (get_comment_type() == 'pingback' || get_comment_type() == 'trackback') : ?>
	
		<li class="pingback" id="comment-<?php comment_ID(); ?>">

			<article <?php comment_class('clearfix'); ?>>
			
				<header>
				
					<h4><?php _e('Pingback:', 'symbol'); ?></h4>
					<p><?php edit_comment_link(); ?></p>
					
				</header>
	
				<?php comment_author_link(); ?>
								
			</article>
		
	<?php endif; ?>
	
	<?php if (get_comment_type() == 'comment') : ?>
		<li id="comment-<?php comment_ID(); ?>">
	
			<article <?php comment_class('clearfix'); ?>>
			
				<header>
				
					<h4><span><?php _e('AUTHOR', 'symbol'); ?></span><?php comment_author_link(); ?></h4>
					<p><span>on <?php comment_date(); ?> at <?php comment_time(); ?> - </span><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></p>
					
				</header>
	
				<figure class="comment-avatar">
					<?php 
						$avatar_size = 80;
						if ($comment->comment_parent != 0) {
							$avatar_size = 48;
						}
						
						echo get_avatar($comment, $avatar_size);
					?>
				</figure>
				
				<?php if ($comment->comment_approved == '0') : ?>
				
					<p class="awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'symbol'); ?></p>
					
				<?php endif; ?>

				<?php comment_text(); ?>
								
			</article>
			
	<?php endif;	
}

/**
* Custom Comment Form 
*/
function symbol_comments_custom_comment_form($defaults) {
	$comment_notes_after = '' .
		'<div class="allowed-tags">' .
		'<p><strong>' . __('Allowed Tags', 'symbol') . '</strong></p>' .
		'<code> ' . allowed_tags() . ' </code>' .
		'</div> <!-- end allowed-tags -->';
	
	$defaults['comment_notes_before'] = '';
	$defaults['comment_notes_after'] = $comment_notes_after;
	$defaults['id_form'] = 'comment-form';
	$defaults['comment_field'] = '<p><textarea name="comment" id="comment" cols="30" rows="10"></textarea></p>';

	return $defaults;
}

add_filter('comment_form_defaults', 'symbol_comments_custom_comment_form');

function symbol_custom_comment_fields() {
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = ($req ? " aria-required='true'" : '');
	
	$fields = array(
		'author' => '<p>' . 
						'<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' />' .
						'<label for="author">' . __('Name', 'symbol') . '' . ($req ? __(' (required)', 'symbol') : '') . '</label>' .
		            '</p>',
		'email' => '<p>' . 
						'<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . ' />' .
						'<label for="email">' . __('Email', 'symbol') . '' . ($req ? __(' (required) (will not be published)', 'symbol') : '') . '</label>' .
		            '</p>',
		'url' => '<p>' . 
						'<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" />' .
						'<label for="url">' . __('Website', 'symbol') . '</label>' .
		            '</p>'
	);

	return $fields;
}

add_filter('comment_form_default_fields', 'symbol_custom_comment_fields');


