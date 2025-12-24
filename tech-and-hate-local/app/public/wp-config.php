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
define( 'AUTH_KEY',          ')g|q6%mExoFa#20Z/S<[>SOc-?Q:B]j5ZP[l1r7&C`N){(U$XeB-CxRrCV-:d]</' );
define( 'SECURE_AUTH_KEY',   'o]PeIPvT}1wn[2A6/a?S/<l^(M]^V_ xCX$Gz,aF*&8{8kwI^e[*w{n]X<oB)d#A' );
define( 'LOGGED_IN_KEY',     'bZw.c5J8+b>oN3Tarof{#IrYxYZi^]omn*/P%vy)ZY~AM+TtSM<8aR&>R|]TtvC<' );
define( 'NONCE_KEY',         '$`tY|MX.CA<Q603-2];wrJ`43}{-2|ErYXJHPO;K19Q%ARw&2)8.]ycyP(37 z=g' );
define( 'AUTH_SALT',         ':Ye>{N%rO9Gr{{vN2k[D+xMyq!Fuif.sDc_Dem=A(;G#KC>,W,V]1T/QhB]{J8h|' );
define( 'SECURE_AUTH_SALT',  'kuX<KCzKQE-SYQ~P?5|>CTH<1o&&i6VbKo6P<yTJ3N,4bK|LvN8(^Z(jJH eH~$)' );
define( 'LOGGED_IN_SALT',    'm]Tg@H#EKGOo$Q&GHK(8nMdmRj@:b/;?P0PiG%#keU.rd-+:*nY$!8)*t!=M[Dy9' );
define( 'NONCE_SALT',        '.S}u~7=6~&=`TEVXpZ+j>Cgh$o$sv5P:(m7Hj,nh[#}]@FP4a;s2q{orYc/EbR>u' );
define( 'WP_CACHE_KEY_SALT', '<F*og>-MIl2tKwg3E3$]/s<F0wv;ek#$o0/&HoX$zzje;j7~m|imR}UVHydNi6Eh' );


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
