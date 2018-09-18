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
define('DB_NAME', 'ber');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'V7H~b+0EbYO^~&-J`|>qg|!R1z4;EM*D.HieSooxnjwux8~/xpfe-Z0XG- M1&/b');
define('SECURE_AUTH_KEY',  '&D(q|n,~]kNj/!`p~ZmSTCatl7iE`yp4$)[$x19Ck)TVE_/&Y:B!9Y]jgp5;D[Td');
define('LOGGED_IN_KEY',    'w9RgD@MHd<7gCmhQ@z<Z jFWvUUX!yUTFFEpY?yt`6lN~v<drWw.0n8XG1OJ#KZ1');
define('NONCE_KEY',        'T~|LgKsx`I@&Shk(=0}p*3D[Gq6(qV}`<9H9Bq-P!yJxSOGW-^W0a$*e eTeb}N5');
define('AUTH_SALT',        'd4)Hi)UHq-k;~x|}x%FDo|582w]Cin74_]WAv&WP5u2C|bc`|?va1-1-ofp!>{6-');
define('SECURE_AUTH_SALT', 'k0Vq2#ldT`|BX3ugpFv&A_:JYu7u=vq]DI.GgdCad[I|gqnS96C~B@ug#w/7LkNG');
define('LOGGED_IN_SALT',   '2)R<h _#A5i&8L`S6`D(G/>#r!A0dCScFKWsNO@/)>N+LVAQ8`5tkh2c)/PXdey*');
define('NONCE_SALT',       'kiHj(!ii+_CP.D @8YU7^3v%c:sIO`66S2L,?}(.&~):`kp4uM%@d(),&BBUf[_#');

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
