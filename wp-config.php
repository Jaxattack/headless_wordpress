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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'headless_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7X/=C#.L=#a`{-/2{-Mwl56yUI~!dLO8f}Bk3Z8eO2caPt0tOpUw{ld+??d}u~tr' );
define( 'SECURE_AUTH_KEY',  ';6P(f4QcfBdXu5UHv}P*_y+q7WN:KR%AvL-8#{,k=P=_Atx:O_)+4*6toCJLAc-@' );
define( 'LOGGED_IN_KEY',    ':whxj;RpG],-r_z{Ek-F}C}O0sz(-~t@bDM<YFYx>@b 4w$F^%KdfaQ87@-E1h|A' );
define( 'NONCE_KEY',        '~}9uy;4=^N,?UcgMV6Fq.LiZ)]O(>S^Sb_b+?_&ygJ-B]o}#YhbZ?UqA(*A>[Oml' );
define( 'AUTH_SALT',        ';;wODk|Z7<%HC]N7PGPUp?V1=%F<06SXQ|o$}1nzxRNnId#RVzG|*ao+lbyPb8w!' );
define( 'SECURE_AUTH_SALT', 'v8t;E3;6v|bMqqD{w<_?LBmU%a`o!e@zWO5h}j4$:7E^lDwcM?21mEIm!-2>&y3!' );
define( 'LOGGED_IN_SALT',   'dZ~W)Ho%zQYn`%+))g13<+.i!o;E[R3coi3Va$I@16ID(A%iJph9DF?&2ZDwY7 b' );
define( 'NONCE_SALT',       'E<:S*{6I@f3FxK~wYE[G#T$!;,Ki`%*!?U4h:r!apQ|]isG^5 c<zf3K|(kw=H,w' );

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


// SHORTINIT reduces response time dramatically
if ( filter_input( INPUT_GET, 'dbi-ajax' ) ) {
 define( 'SHORTINIT', true );
}

if ( !defined('ABSPATH') )
 define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');