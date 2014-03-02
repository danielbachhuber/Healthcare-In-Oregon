<?php

$load_mu_plugins = array(
	'co-authors-plus/co-authors-plus.php',
	'easy-mode-auto-deploy/easy-mode-auto-deploy.php',
	);

foreach( $load_mu_plugins as $mu_plugin ) {
	require_once dirname( __FILE__ ) . '/' . $mu_plugin;
}
