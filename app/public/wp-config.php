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
define( 'AUTH_KEY',          'Zaec=$]pQ<$ItwRAKa,cNk&5LT,PZRUAAm{IM4ewm8s8CUjTw}$0(?h+WR_k~f{1' );
define( 'SECURE_AUTH_KEY',   'J^q1t<$j-oWJ<V0}Cb NO[ZYKGW!K:l;JTb|-sAb|8gD8m0g]R:4uUw$t[].>Jj;' );
define( 'LOGGED_IN_KEY',     '%`gQMpW:x7(~aL+RD8jr<QT|p!G}}9>U;A}@_T6Y35[a$:_RMGOLrGT]WcHfowQ7' );
define( 'NONCE_KEY',         '!pnCamb+1|5ruC`kHy8bUj_-;c-Ag<Nvl1y(A!Q|EY&F`xNOA@EFe7XLa&DqYI#Z' );
define( 'AUTH_SALT',         '2?6cNbNPej^zEL<d3<PlJciq+uKXlF,h^yBDb_+8(lQTU?g|1?CrvwbSAlt|e |6' );
define( 'SECURE_AUTH_SALT',  'g-h<D{&@8]t|Qcd&&A#bWOWaVh& dQ,@Z<hU}I,%xO-APK]FEp2wk`%*oBUkZyEO' );
define( 'LOGGED_IN_SALT',    'gU>oEgd6 T1D%M7E~u?z(b:04mZ4}-dr{SC5@-rK.3f;Wssks# Y50U_~@zP($Xn' );
define( 'NONCE_SALT',        '_FAm5mV^I&|r.@E1#3.p+)~^;QHD}<$b;2dhXFY.M7TxyBqjb@!`/!p[;6E3S_cL' );
define( 'WP_CACHE_KEY_SALT', ')-|zjg@%;oufE:[M#ju,VekPZ4M0mq!,)roZuOh0+!b7H0*1}j<`U6]l7t&XSpP-' );


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
