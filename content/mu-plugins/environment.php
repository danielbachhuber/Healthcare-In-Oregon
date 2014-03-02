<?php

/**
 * Require the theme
 */
add_filter( 'pre_option_template', function() {
	return 'twentytwelve';
});
add_filter( 'pre_option_stylesheet', function(){
	return 'healthcareinoregon';
});
