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
define('DB_NAME', 'stylekit-lesson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>>mh$;Y0BhIDl.oRSD5c!$l<`<_]ee><kvpC^^}A3WP7Ca@|m#jE1Js~Fxeg^]kP');
define('SECURE_AUTH_KEY',  'Zkn:>48|*7(w2yW>#iTye[%k9h0af@g*R=!(!Yf/TAYzZI<Z1k~XlTn~6miT]rM6');
define('LOGGED_IN_KEY',    '@]Vz&:p&72*vN|UcX]@D<.%wygI5q~qxJx-Dsm uARe4b)D&,xY7ABz7{L;S,Md2');
define('NONCE_KEY',        'q+drrC%S5)[E~6I;!crHv6506>n:xV4o4]xn;{g|VfiMDE4=pedh5]`d2M:.qt3_');
define('AUTH_SALT',        'OZ.s.=fIE1L{i/O8ic|g~yD.=~&_6CIH[{;fGVK=y,x0@aW73Hg[@:0r0)^&QC%t');
define('SECURE_AUTH_SALT', 'Ab9F)TN:wTa8sbhhKe<s1mnO~iN]K6`1E9pp?YZ>Q#xSN~~)T)&nme5Y7|_H`*-C');
define('LOGGED_IN_SALT',   'I*yopGGxhnU.jKJ]xvOVCf8yp~ =97}.Q%)&%a>t=|L{^F^/Qa%fH9T^OFvF9(ST');
define('NONCE_SALT',       '|Mj,CmK{ 5w.!AGh#?yZ v#.5pkQC5D3A$M.F0Hv?jN{fb@Tk$_5tsXd %2XY)GG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
