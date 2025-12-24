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
define( 'AUTH_KEY',          'z/slN~^x((|ED)0F<P<qLq0HA]nU`NU0-_|P62gj0g87R4|uS,P0mX#P<)?6tC@F' );
define( 'SECURE_AUTH_KEY',   'k;5-7S7:B&u0wae/88YI!T:;jqBHlt0t(ck&{ENc b@:-=0te}5ddp+^?g2Ah3IJ' );
define( 'LOGGED_IN_KEY',     'v!pEfEMX7u&]N=o&h!vjSdCSO7XT9{z;wUD8gI9bFzy[@SUz%:J|[&Or<2Ju>`b9' );
define( 'NONCE_KEY',         'dXRMJ,Y=x+UYGEO7!DN k-J$;mK|]JG!N/Xrp~ySrxO4pOVv/_yc{5nV!V~ZKY^)' );
define( 'AUTH_SALT',         'IR-Y0CP^$8w+~6Lvj-)7FMMo)itUiX7ZFB0Btm6E:DltcmPfNid=IOJ95yoV=2.B' );
define( 'SECURE_AUTH_SALT',  'tusrNj(haR51AoUE4oop@!e8EzL<(Sk#QY{:)V.hq?rtl9~esNa<@9*_I{4d%yhg' );
define( 'LOGGED_IN_SALT',    'E{5)J|kz4E<0uI6Jn<s;;x6L}N7,:0l{X42-TQ#6SBV}nmR3%=5nbJR:BjS~LBu[' );
define( 'NONCE_SALT',        '>SD$>#0mDnk{>}w|WanF<NqhxNZ2/Bp6xm8+hE_#i{S[ a0o<r!;h=dHwf{+P~Sy' );
define( 'WP_CACHE_KEY_SALT', 'qg@$qrYkCUx2qn_v;}4z+%opR3Wqhw6^2[|bRk?!IE7i}>Z3REtVj/qUlU+IiH [' );


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
