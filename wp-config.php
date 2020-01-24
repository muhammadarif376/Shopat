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
define( 'DB_NAME', 'amal' );

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
define( 'AUTH_KEY',         'x=ur`vM8{~8qUp%7-iV7^.,OHb8 k=qcxcBVgMRL:U@_ZZ$Bs4<i<$4GA1>@#^8r' );
define( 'SECURE_AUTH_KEY',  'itb,UGWl]c/93 W$sZ7uE@15K@XHMo.c:G!+ibkQIlN.&7{;u4fr#8-]DEvtA=io' );
define( 'LOGGED_IN_KEY',    'L^tHG;uK~E!r]u$ ,9zwMb$Ul|Vf^$CzY}2$FIB>hK@0nDtEk5/3yCgp:vBu;~JR' );
define( 'NONCE_KEY',        '-.tn=O@?3pqyLCSqL^&s!1~AI-D$%oT%HZvD!8L@=[o2MTGM2VkrDQ9lO:&ZbR&e' );
define( 'AUTH_SALT',        'Exm0},LVw/l,7IH>@6~+vUgNqoxMM#rpi.?aN|HE{;lta*{Vam%~Ez|56v7!5&`z' );
define( 'SECURE_AUTH_SALT', 'NlOITPE9%/cd$a 4@+2=*rC>]G*qS;d.`VU6zS&{3Mc:qHmYcR7 efe%|aP6Mk-a' );
define( 'LOGGED_IN_SALT',   '9+5}u]B&!2Oo%i8~1+GeMo2PYDb3t%neKRKES7]No&+I>Wqh*z>T0E$ (#/0+S2u' );
define( 'NONCE_SALT',       '00jk55#_B]:myya&jAaQ+Vcxf|/ XNT2sFKV{e(Qd6rNGxaSrRAA+:1{q<mBpAC+' );

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


