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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'martins_movies' );

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
define( 'AUTH_KEY',         ':DlG8/CAXCh9JjL.0-aVDtS5pd,&vfMKb;%X)s,DT:UCEdpdOTF+ey.6&Q6xt5VO' );
define( 'SECURE_AUTH_KEY',  'F 8wtn9]<nBg+ajY8}BIBk6``F0a# ieS2Vc}LzzG[{Atu.ezxRnO9y1Ar8}kYlc' );
define( 'LOGGED_IN_KEY',    ']+dH1dfXO:dv>M$qx1jmju2amVJwR?c[jgxn|hS<wq)(YI4)PFL.?GeTM+4|EsJ&' );
define( 'NONCE_KEY',        'Lp9:K</*PK6S}F}8)m*[`@VjG%k1_+^&nq/53x:]wJG~_q:K:jE0.xq%hEk^*ZCj' );
define( 'AUTH_SALT',        's&Yx!!ffA2x1jX0b4O]_0G]G%d6CL/@=uKFuFch.8ER4>}f n+Cj[Nu{PMKf/<LG' );
define( 'SECURE_AUTH_SALT', '^uXbre5OZ|%U^u $7D**$+kb rLs]ZPj#E>1opj@saaZt]a~TiOi4.n09u6Z0>E|' );
define( 'LOGGED_IN_SALT',   'zj-yS!y]`#B|EI;7oBF&UiUOXHo#m;JO[dA(54C[UP$svZLHpy4$hyd;!ovQT7#o' );
define( 'NONCE_SALT',       'm(H42<rMm^fyUq50|mh;vC9_r@exDadAE1H68R$,9hI1h7Kay x d+8 =7]?}pXs' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
