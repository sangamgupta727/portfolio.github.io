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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personalportfolio' );

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
define( 'AUTH_KEY',         'b0DY[O#e #6b`5eVP/}d9ldb~3QRIbT@P/d;i8j5):O#wdY3vjx_I2`v%Wmn}*E$' );
define( 'SECURE_AUTH_KEY',  '%+p-iu;xB+ny>bBXD&NJxY[#v,FhGF1e6 =gyjMXWjL_r7}1cHP0I4PX?jYCTa.}' );
define( 'LOGGED_IN_KEY',    'n?`rCjH%AsKayLcZVk~Pe|>4S39:ILJk _Ms+[ns%@2YDy:U[!9|0QgL/)eYtn@~' );
define( 'NONCE_KEY',        '_3]GV+::C;S&xzy8e6Ay+Ctw(Z`JiAMkmj=Z2ZMkn1<l(v)vC`6q=]}|aN;g,/`^' );
define( 'AUTH_SALT',        'jiiFg6:jTgkP{Ug.uL}~;-PCZaBj 6/Ty(5RF?6q8fpu?^^&G!E1^)LT%jN1M=7_' );
define( 'SECURE_AUTH_SALT', '~E Z-Go~O3%;PiKOh/R(g}oHhHmskG:*(ppCwB5F]*%c9I(p_3Fl9?RUVt<8Y1S|' );
define( 'LOGGED_IN_SALT',   '&=U9%|D3B*nFI):cXhYeP|iSpojys5(r;EGYR&xn5]y27,>$!K%@dZ6Vw,c{1U;~' );
define( 'NONCE_SALT',       '9_z On<u<nB1?9++r^f%viL+ThD=?yQLf73awUx~eo;3hxb)WN9]rRxfHB>lY|0v' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
