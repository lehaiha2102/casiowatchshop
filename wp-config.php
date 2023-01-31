<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'casio_wacth_shop' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '!*&YHLO_<V:B[K3o~Z>pISsZqj[+4Cl) 5l!EvZ85EL4jG{}-@A!&]F5LDN`Ku;+' );
define( 'SECURE_AUTH_KEY',  'e} s~uF||{7aFJ#K Fwntt:Q>(PlOe9V02XcS}]uH|9b1(r/^Y%9A$|9Jk2`AmIR' );
define( 'LOGGED_IN_KEY',    'Ii7s6FeF+e{y_W%_)osh|ElP=91je0JQL+R1V}akk[yOZoRfy=xw{vWiKyQii5Pr' );
define( 'NONCE_KEY',        'J!E|3sBk!>3Ku:h*>w|a>Yab{T]z:J*2mgz6kcbw[enwo-lpUzj:y,}y!;[rZzY<' );
define( 'AUTH_SALT',        'D|{Du]|qni&qCfM-J.eryQAO&6FD&8C_OoaI}gc|.#G>q)?!B?F0y3Zx*fp0,Y,B' );
define( 'SECURE_AUTH_SALT', 'x-:286c.a,0SDr9^/=j2K,%)gHtTf)RuA;xF-5AY^NSY.MoMXJL8]L9&+.VGv%bs' );
define( 'LOGGED_IN_SALT',   'p<o_#(Odg^7qcc)h~KfjXeS0bGF8>$sqw]Q``g8zg:H/P}m [EyCS1fQy^>G)ojr' );
define( 'NONCE_SALT',       '7^-;O`S{uT-5pb2vNiO=e/X6?ZNXbw5ZFzV8Bj-O%t`q9wa09?c:CO]r:{SS>jQM' );

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
