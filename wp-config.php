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
define( 'DB_NAME', 'oto_shipment_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SHL@@123321p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'Q({;jx]E;UFf4v!CMkNBR$^n])BP^VBzjpb.DfCV2-H,:Wp!l,}2j8}PH @CxbDR' );
define( 'SECURE_AUTH_KEY',  '}I&@aX=tA5ma=8,gsPiH>HP}PzlahdihL[agQ1MDCq.M4F)5MW+xx`?spj9)tMv)' );
define( 'LOGGED_IN_KEY',    '*9|=u:?P}d;Y@?#V=^n-|5()SaWOrOG?#34= #eRU$@.SWw>$GEGPTwpLdD]4j@K' );
define( 'NONCE_KEY',        '5OEvwLc@ThqIJE;!uHc.q><1>5)S+1b5)p9qOz6&Y<WBUV.,ka6~<@xXXEucdTAt' );
define( 'AUTH_SALT',        '&wc6miT0d^3n4$QVw>79_Swg^7;<)rlibL39kkVV],ilaU,v#62)KZv2T<_uY]53' );
define( 'SECURE_AUTH_SALT', '-^1<[3xL->LU]bcB3-w|Wy,evHrl?6r}e_) MEfC-KHlep9|?4i+q-A{uL#7Ghzf' );
define( 'LOGGED_IN_SALT',   '{?/t&dyPivd]l)Wo[-fI{n0?PO-ii|$HL[YYzxL-Ytj{;IDG^5s5ml:^]7h/2tM,' );
define( 'NONCE_SALT',       '17,?w`%`;wz&xXq?`v*TQF,1<;H%c!SKfK>S:>11Xqme!C{`U$ky[?;RXe>`1nV&' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
