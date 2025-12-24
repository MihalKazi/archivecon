<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'g7+;>;Gs;(Ugeue)LQ8WSGEEse/oi~$d-Xf`nIQt>QpvQEcOFPb`@@sS0#FLSWd[' );
define( 'SECURE_AUTH_KEY',   'ktFh$x6_=e<c77nHtD)/M<^tfu+Q!#~~dt2f[6$Dsai$A124X+e3a5%AT]+k@(JJ' );
define( 'LOGGED_IN_KEY',     'pP{yNtT[q&uR.bx+r>de]D3Wq)@+pz/[zQ@4{E:QP#<Hessy*@C+*k4s54<AL_=/' );
define( 'NONCE_KEY',         'xlXzJO8XsW]sG=fd,:=N3:=SmJAI)9~}>$?H`Sou<:f}q(0 Kk3D*/`cm_gLv$;-' );
define( 'AUTH_SALT',         'K4F/pID ?0PrjV9gghk7@_z<GvS$wvWBL{q^_#Ex]G~6]qqot5zvkfr8I36?Z{VS' );
define( 'SECURE_AUTH_SALT',  'qwrL! K>2.?~;AvA$QvH/NtVEUe5&Y$>EtHZDP)E$si%[}0xQY3EIA?!m#sSYSB.' );
define( 'LOGGED_IN_SALT',    '$cYmEBF.|vH?wQKTJ|,7m2 j5*8x.:F_khF:_!7NZ4xD>^e*BMEZWdE$u8@{[n]>' );
define( 'NONCE_SALT',        'W 24@E,_I8t3%I#.n)3VgZ+1t1%{R)JKQR[,/.A4U8rW,%1X/NB;VK%IvMqP[{2K' );
define( 'WP_CACHE_KEY_SALT', '}(NI-t<h;L%DxKL))NE)|[M/-5%JX0%@e/vq|U5mmh/qpE+KG7&D1u&BLBhxOuzv' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
