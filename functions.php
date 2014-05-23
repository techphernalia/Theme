<?php
function front_page_scripts() {
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( '' ) );
}
add_action( 'wp_enqueue_scripts', 'front_page_scripts' );
?>