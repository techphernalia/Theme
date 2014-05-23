<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
		<span id="ui-id-1" class="ui-dialog-title"><?php the_title( '<h1 class="entry-title" style="margin:0px;padding:0px;">', '</h1>' ); ?></span>
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" 
		aria-disabled="false" title="close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<span class="ui-button-text">close</span></button>
	</div>
<?php
/*
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;
*/	?>
		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
				{ ?>Jul 27, 2012<?php }
					//twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'desktop' ), __( '1 Comment', 'desktop' ), __( '% Comments', 'desktop' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'desktop' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header>
	<?php if ( is_search() ) : ?>
	<div id="dialog" class="entry-content ui-dialog-content ui-widget-content" style="width: auto; min-height: 107px; max-height: none; height: auto;">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div id="dialog" class="entry-content ui-dialog-content ui-widget-content" style="width: auto; min-height: 107px; max-height: none; height: auto;">
		<div>
			<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'desktop' ) );
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'desktop' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div>
	</div>

	<?php endif; ?>

<!--	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?> -->
</article><!-- #post-## -->
