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
define('DB_NAME', 'partist');

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
define('AUTH_KEY',         'PlT%81m|eqC%*D|t@C.Gy~5)I)JJNCWq(X[yvP6!Le-ng-991ueDKNTXf^g !-D+');
define('SECURE_AUTH_KEY',  'vIUCE:&!dIeFp4sSWPG-(lSts|-+2+XWIe}xG-R.Uh(M-W4zF/`[s};!gte&GIJ,');
define('LOGGED_IN_KEY',    'i9-+[Ke^17}QP@}#TVZ1k-qdwB$^|0a-f6b|@6!}1(4F[jJss+E,z+a1=adTZbcU');
define('NONCE_KEY',        'H=m/-8-JR qONUj#jXLa6&|iWh0A=p~sf}L^O7w>h/0JXf6|bET%;|C(L{oJt~8O');
define('AUTH_SALT',        'D*)W]%zk+=DMv=@A*UWV @]>-%Ix3JZ.2fV=$3i(9zT0U+V?^^nxO9T]2n`u5&eZ');
define('SECURE_AUTH_SALT', 'Vx|F=77_pm/}>;|`)>tr9K+$_&9=dWYj3<:Iu_ci)x!P)wsdB=049Q2k>QQ*iFFr');
define('LOGGED_IN_SALT',   '*|Lxnc|Oo+1+VecO/]-?2}wsfN797aT;sGb[.a5b0{yN8=!1/_Ld0ND9!rA/U-cA');
define('NONCE_SALT',       ')x% jWXs|STE{@TqigkW[10xyliZp|kxaZaS}f%FS?$3RXW-.YPR+ZX_osE>qYv(');

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
