<!-- <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" 
	tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-1" 
	style="position: absolute; height: auto; width: 300px; top: 18px; left: 23.5px; display: block;">
	<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
		<span id="ui-id-1" class="ui-dialog-title">Basic dialog</span>
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" 
		aria-disabled="false" title="close">
		<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
		<span class="ui-button-text">close</span></button>
	</div>
	<div id="dialog" class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 107px; max-height: none; height: auto;">
		<p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
	</div>
	<div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
	<div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
</div>

-->
<?php
	get_header(); 
	while ( have_posts() ) : the_post();
		?>
		<div class="dialog ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" id="post-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-describedby="dialog" aria-labelledby="ui-id-1" 
	style="position: absolute; height: auto; width: auto; top: 18px; left: 23.5px; display: block;">
			<?php
				get_template_part( 'content', get_post_format() );
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			?>
			<div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
			<div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
			<div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
			<div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
			<div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
			<div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
			<div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
			<div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
		</div>
		<?php
	endwhile;
	get_footer();
?>