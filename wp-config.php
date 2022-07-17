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
define( 'DB_NAME', 'tesla' );

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
define( 'AUTH_KEY',         'hYG:vyhNn&Y%DblC:P6/nW%x_p?tl8a-C]!A[g1>=x.ahR!zN2$E&8=K<oP]0#CT' );
define( 'SECURE_AUTH_KEY',  ',([<foim,v7DELl5=i$/nO7OR@@Un+]p>|a{4G[MJ{tOe1 W).,#l)Dc [QR7Qdu' );
define( 'LOGGED_IN_KEY',    'rMkPESZ<E~Iu<I75C.7H]o6+YvpTAZs?.+N8%l`#co6DI6?sp{(7>aS:9!Ffp8p2' );
define( 'NONCE_KEY',        'Gckj!eUhpQ.<?S.zRk}SNDmz+8nIAla5qoY@prp$+-pdij| W~m@>4:5}0rC}#0E' );
define( 'AUTH_SALT',        'cXJD,bL_d>W3oq=/,i1KlO3Qbth~y<aY,ZD~ZSnABNCl5Aw`YbVJRnG*[iS5f(]M' );
define( 'SECURE_AUTH_SALT', 'e,4)w)fwF<tBo)~kB|T7:{8>Mb7b`3J`{&1Y<@[K/HGu/$P0(HLd9?Cf-2`3TyzZ' );
define( 'LOGGED_IN_SALT',   '`ZKXuy8$~d,w&b7dw; Wg%_7dt5_+x&2J?n4f&y|GQl8tw,Me]9A]=@/ @[R/UO6' );
define( 'NONCE_SALT',       'E^8](A|SnH{Bgr*]h 1IS;pTz4b696_AWAN3+F+51N-2e{bW~N[pZ4l`}:lxltk>' );

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
