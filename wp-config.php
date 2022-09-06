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
define( 'DB_NAME', 'freedb_database_wp' );


define( 'DB_PORT', '3306' );
/** Database username */
define( 'DB_USER', 'freedb_root' );

/** Database password */
define( 'DB_PASSWORD', 'd&h&!AeMY9zu$ZP' );

/** Database hostname */
define( 'DB_HOST', 'sql.freedb.tech' );

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
define( 'AUTH_KEY',         '{N`!`8g*R8GlFyG}NB{.G01NOIqw=CZ%+=i[O0k+BDb]8k}.S-1&$[]z$zQ|nv6+' );
define( 'SECURE_AUTH_KEY',  '`vO9MmYlZD<0mt[o!fX{L.#1hi#F_]*-!LA8%Z@s]|kZ&|~Exa82vOCr2|QHpF&)' );
define( 'LOGGED_IN_KEY',    'Mfai9d?6<3DWlvyEgA9isw8H6S1Y^JRquOI-7sLfn5ilxs=nr:_V&OJ^MIIc>3-I' );
define( 'NONCE_KEY',        '.DGxg5+k*vNLUsq_CN^g(XMPJ4[SL-p2?iK ;g;HU^T!}0i>^&<U#MP+{U-m6UpZ' );
define( 'AUTH_SALT',        '|!VXh&l%: 6J@_3}XSN|w2T;|IvrvroKb=||xz1a}su3:sV!#Y0=T&3Ku8C1C<Hg' );
define( 'SECURE_AUTH_SALT', ';d8x:;(@sbZwHRlcDq9G;];aLQG9+*H1&Z>-dpD so7%w3a^q0%1wKdXmjHUeoKb' );
define( 'LOGGED_IN_SALT',   '2=>{QpLAwsD<OIyadr!-:|F->6T[xZPk7|E^qOg3|#_rc3[5)VB_{lDK|TYJ:0P2' );
define( 'NONCE_SALT',       'j wpLo(D:9w6p=0_!S40vJxR=pEkt,pmikdFj W*+8M~8,_Z9/AsG>-G6%+0eKLO' );

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
