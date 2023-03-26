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
define( 'DB_NAME', 'fictional_university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'H#F;wRg*m#A[b;1=C7%$Fvy+XwHF&!jk{9Y:mzycC/OFMdH`FQ&D_.at=D#G2;cS' );
define( 'SECURE_AUTH_KEY',  'aOEz?aKe|kMBvCa,p `CJ7{JK!`-<GZC~qq}Ow{L_]9s_6B@X+*F_QfgXE-dt8mH' );
define( 'LOGGED_IN_KEY',    'LQ)lRi%@P(c>`U#$TM,j%em=S}}17XXT.{XSx;1F~bW p L#qrx vuE?V;}VG9gT' );
define( 'NONCE_KEY',        '|/`^zhw#*x~sjof|:85<gmXLJ]C=HT]B-%S85SpwH;FN6Suob}<j}d9f)[0R5#@s' );
define( 'AUTH_SALT',        'onhEpyG%L;my7uDt^hD_8HeE:(mIe0dOWrEm?YRB9KH:s!s!*46K2WHwnMeW_>wj' );
define( 'SECURE_AUTH_SALT', 'H6+%~{b?J96?vIiX(ZpXxVARzp^vE1eZo75vq$x*U+{V}gB1*w8Hh~vV~=4vm.yZ' );
define( 'LOGGED_IN_SALT',   '3M~Vg~mIbYhdVLv(,X4I#fVOl<=TG<3dE|sy,O1^GI/?n1X*i.NOr9@V4^wB^F{Y' );
define( 'NONCE_SALT',       '|QkBs66B+~u{Z@[T~8<%/i{~/Ms;dL3:KH}#l+yA$ MiEi3d*|yi!o*fo#A@N hF' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
