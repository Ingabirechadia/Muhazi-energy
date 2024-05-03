<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'cFd!`!i*rsr]CuT9h*w9[Ok*)yE,N{zCeu+o+5JEm:_BGRY8EdHiLnjc(778aAYd' );
define( 'SECURE_AUTH_KEY',  'X5ZK(bc@*(d!{J,}&N(d8d]m^aZ6d1djrS<2_L%E3-<^pdZ?*:25n*R=6d:19hDl' );
define( 'LOGGED_IN_KEY',    'bPpnBh4spf/_<BxzG3<_94dle|N-by[w3{@x4zSG9w2s<Lp2~givPp/?$9QZ+H]p' );
define( 'NONCE_KEY',        'Eo&sn7(;I0F)??`no_y;t6)Y6b}{27r]1:y6^$ n*OX}@ND7zUJ#VmzX~_[D:.*s' );
define( 'AUTH_SALT',        'l-fh+/P--S#6-IQE*}]{KyHdLQ+>~g}AbVTaYvB]Qh||APiLXkcLp3~1q/xL]@4k' );
define( 'SECURE_AUTH_SALT', '>bpQl:HO.*u3F|PPC--UT0DNfQ}N=NAgvyKMw0|JN!;4B[i2h` Xa;ow8+]|g0UQ' );
define( 'LOGGED_IN_SALT',   '#9$bkPf0r nR!wEz{QR-WGUtainc=lNg]=Zpu4Y1}SV 89ok)i)A=1RS7 A9ZWpG' );
define( 'NONCE_SALT',       '5VQOGmVQ#JKc[R:E/ g(sB/#jwr=8kya9xVkC``8O$~J[w,%]e@=mQq~{>fPlTKb' );

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
