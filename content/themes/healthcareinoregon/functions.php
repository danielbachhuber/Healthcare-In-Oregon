<?php


add_action( 'wp_footer', function() {

	if ( defined( 'LOCAL_DEV' ) && LOCAL_DEV ) {
		return;
	}

	if ( current_user_can( 'edit_posts' ) ) {
		return;
	}

	get_template_part( 'parts/analytics/google-analytics' );

});