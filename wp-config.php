<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/**
 * Don't edit this file directly, instead, create a local-config.php file and add your database
 * settings and defines in there. This file contains the production settings
 */
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) 
	include( dirname( __FILE__ ) . '/wp-config-local.php' );

/**
 *	Production settings.
 */

/** The name of the database for WordPress */
if ( ! defined( 'DB_NAME' ) )
	define( 'DB_NAME', 'orhealthcare' );

	/** MySQL database username */
if ( ! defined( 'DB_USER' ) )
	define( 'DB_USER', 'orhealthcare' );

	/** MySQL database password */
if ( ! defined( 'DB_PASSWORD' ) )
	define( 'DB_PASSWORD', 'NFUe6g[$EjhL4%Z.' );

	/** MySQL hostname */
if ( ! defined( 'DB_HOST' ) )
	define( 'DB_HOST', 'localhost' );

	/** Database Charset to use in creating database tables. */
if ( ! defined( 'DB_CHARSET' ) )
	define( 'DB_CHARSET', 'utf8' );

	/** The Database Collate type. Don't change this if in doubt. */
if ( ! defined( 'DB_COLLATE' ) )
	define( 'DB_COLLATE', '' );


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jHTF$b/uQx9/Cg&]>mjjrWPGlYunz}MB-B*vxd*W%%+G2>|`GJ$h7I6F-l@D[+HB');
define('SECURE_AUTH_KEY',  'GKDv^P#~-21wu2tw&aHegn JYe<!{&^bgCGP!YE`bI+Eokbn(s+QFXYzk@7cI5>-');
define('LOGGED_IN_KEY',    ':&!=9nx%BbTYp6a$qN-#E|_3ZM?}{&/IR_(**%V]%%T<);W{W-u4|](:KR!Nqq-j');
define('NONCE_KEY',        'czn>A&5a1>&f/>PuGBSe1WmlY<mp{*ueBq=y>S(B}@]uz*v2u`90p=vY${*_C< .');
define('AUTH_SALT',        'lA2Fz*!8%.a1/lO*KH+ZYz4^-OmnO||Ni+4ato6]p.<<X}|*{T2<%g$Nc-=*HZ7O');
define('SECURE_AUTH_SALT', 'zS%+:.L8N1xNuvquPpug:W<NP|nf&I|[QoJ$E#aGq+g&UfniKkMd|-Fh=]9)PG|G');
define('LOGGED_IN_SALT',   '^Xu5W@u[s`v)#gWOxCCO#-]Wc3TAU+).,>7#r:>p~mj.mK]2K-*8&mDiea1Pn+ |');
define('NONCE_SALT',       '-J`L?dr;dBMj5+[085b_Vdr (Axz|Gq`G<dH$#BjRX`>D{EW4^y(y%#Ej`E]a9PW');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', '' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if ( defined( 'HM_DEV' ) && HM_DEV ) {
	
	if ( ! defined( 'WP_DEBUG' ) )
		define( 'WP_DEBUG', true );

	if ( ! defined( 'SAVEQUERIES' ) )
		define( 'SAVEQUERIES', true );

} else {

	define( 'WP_DEBUG', false );

}

// Define Site URL: WordPress in a subdirectory.
if ( ! defined( 'WP_SITEURL' ) )
	define( 'WP_SITEURL', 'http://healthcareinoregon.org/wp' );

// Define Home URL
if ( ! defined( 'WP_HOME' ) )
	define( 'WP_HOME', 'http://healthcareinoregon.org' );

// Define path & url for Content
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME . '/content' );

// Set path to MU Plugins.
define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/content/mu-plugins' );
define( 'WPMU_PLUGIN_URL', WP_HOME . '/content/mu-plugins' );

// Set default theme.
define( 'WP_DEFAULT_THEME', 'twentytwelve' );

// Prevent editing of files through the admin.
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname(__FILE__) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );