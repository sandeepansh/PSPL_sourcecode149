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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'RaPE7TCb' );

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

/* define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
*/
define('AUTH_KEY',         'eM-x`|z fI55OWzila0!YFNx{g`:<:mJ#?_n$;rnc}~+37,oFbW:~K0az2Eb>!?P');
define('SECURE_AUTH_KEY',  'Fg|&+7u/)u4qu1d|K=s|hX9;bF=1-T{5e(x fP9.B[joh*>^7uh@|nq;bnjFbfO+');
define('LOGGED_IN_KEY',    'YF_z7sV>rLsY2|k+5{-a(2W:%657n[nfc!ignx#rMOw<k-P!A9/^k_DzBc((F@ :');
define('NONCE_KEY',        '+30Dl8,E|Fd3bH@#QLCRFT|rxJ^+{ff4k&v`aqCP]bD,EFa$hk0=;cprZG,Pr<bR');
define('AUTH_SALT',        '[,,bF6}7g.oUc&..yjD|u]@-gX=/X0MU2<qOGKa6DHm^^-.][VwaBNm)3Lwa.T^|');
define('SECURE_AUTH_SALT', 'gHklSCh<.[83jj[#|dQ&w&.$IfuHzw,/c]5xbGSs/^w`Q+9wzj~g#ER4]>f-`UnO');
define('LOGGED_IN_SALT',   '|_tE<LQ=~|x]nVnsyz|Fdc^eRgXrW=?a)Je]G$M/g;h!lt9}eq+;-H-Mf&llOUnO');
define('NONCE_SALT',       'I%w=]^kp6-R<q-KskOgMu+,,uX}&?RZ; j|IXAY+oX?=~R];zXoVq7P+3?iIeEI ');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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