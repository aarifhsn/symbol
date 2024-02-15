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

<?php if(have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>        
	 
	<div <?php post_class('single_post'); ?> id="post-<?php the_ID();  ?>">
		
		<div class="post_thumbnail">
			<?php if (has_post_thumbnail()) : ?>
				<div class="post-image">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
				</div>
				
			<?php endif; ?>
				<h3>
					<span class="date"><?php the_time( 'F j' ); ?></span>
					<span class="year"><?php the_time( 'Y' ); ?></span>
				</h3>
				
			
		</div>
		
		<h1 class="post_title"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>

		<div class="post_meta">
			<ul>
				<li class="post_author"><i class="fa fa-th-large"></i><?php the_author_posts_link(); ?></li>
				<li class="cat"><i class="fa fa-files-o"></i><?php the_category('&nbsp;&nbsp;/&nbsp&nbsp;'); ?></li>
				
				<?php
					// Used between list items, there is a space after the comma
					$tags_list = get_the_tag_list( '', __( ', ', 'symbol' ) );

					if ( $tags_list ) : ?>
					<li class="tags-links">
						<?php printf( __( '<i class="fa fa-tag"></i>%1$s', 'symbol' ) , $tags_list ); ?>
					</li>
				<?php endif; ?>
				
				<li class="post_comments">
					<?php if (comments_open() && !post_password_required()) { ?><i class="fa fa-comment-o"></i><?php comments_popup_link('0', '1', '%'); } ?>
				</li>
			</ul>
		</div>

		<div class="post_content">
			<?php the_excerpt();?>
		</div>
		

	</div>

<?php endwhile; else : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('no-posts'); ?>>

		<h1><?php _e('No posts were found.', 'symbol'); ?></h1>
		
	</article>
<?php endif; ?>
	
	<?php if (function_exists("symbol_pagination")) {
		symbol_pagination($wp_query->max_num_pages);
	} 


?>
								
								
								
								