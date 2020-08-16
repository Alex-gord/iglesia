<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iglesia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'czBG[`p*XVHAEg@aDD&<flfx@}QZ?K/WPW>+`BxsUlSes6CnadTD&PsswI)dG@qO' );
define( 'SECURE_AUTH_KEY',  'x{|lC-6Un-TSmj[y2<Z*.tGu}S>]KI>CumGTlXX=3$fI.q4(0})r)(i&J;qjaoq,' );
define( 'LOGGED_IN_KEY',    '=@}m y[1kyw^>@u@TnZUoMa!ou31N0!<gkG+C.i2^USUiIJhH&G_A}QF,:e$-c@#' );
define( 'NONCE_KEY',        'DJ$T:_n);CyZm?wSg)vD-3n_x`3<-Q9rGo}~W%l1Y1D,hQld`;Y&K&E^l9$%WIc3' );
define( 'AUTH_SALT',        'K32OTbXgWc8_W#pXBY>g0%2uwmrIN@-/D[}XnVcHOO[S$TBU_*h@LKZot?@HSxB>' );
define( 'SECURE_AUTH_SALT', 'xg$=gb522NtUV=-m=8*{krr,Ij/D(6f*x}Sz{~(X?Bum@)~PS%.;m]wHnX)v!%9[' );
define( 'LOGGED_IN_SALT',   'R.`kHl}J@nW<O;o*~mpT-.xNk.SRMA(0S(52tA0XG@;*Fbc!6G~[9sT:)lKpZT;B' );
define( 'NONCE_SALT',       'BV?*H.uqr&d3(P)4TlHT}0 3GBQLdS#t}zH=XnCCv),7k7k8u9HB<pgq:.DuA~/V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
