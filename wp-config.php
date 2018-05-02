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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '1*-8#^jV/Qn|!1yg36LttGkZO;6TO-o~*MpI=s1({/<l#.7-J;uu^,#e0LICNK,S');
define('SECURE_AUTH_KEY',  'dQf-rXB~o@[[*eS9#/sb;Y!E/Y:dyhLh[whU_FBZn<k=0/O@MpRq*_{..aqw8i!;');
define('LOGGED_IN_KEY',    '6nS4&7A:T-(TQ29T{B*l//lhE;r@bID^isN54#Oz#{dHCLQ%vAn.q`#pgrfd7EWz');
define('NONCE_KEY',        'ItZ~cQ/#P0nu,hwi3AjhoBu,jVpLv@EZYum_ _ue wEr{~cBrX0r]J$+B$IK@yY6');
define('AUTH_SALT',        'bAciz?rCigf)ZM&5tp`<o}%[N0Yc:qv2VmJvmG8!w,+h?CmAU@@0NpOmX?sI2g%r');
define('SECURE_AUTH_SALT', 'gtD4iN~[MPP%&{_7+?{$oP-+uXYr0a#7DQdy86Fut_/k9[9).Fz,&Z|:(?$3ft=8');
define('LOGGED_IN_SALT',   'BUhrz-yc$3ei8+b/V)!QLJ5`!E5>TQwB}d0Jj]C!X]?:M%4]cik3QXEJKPvLl4A}');
define('NONCE_SALT',       '[9 ISDqaWLG7ymE7*0/&iOl_Y2p-9`ljX>#[7RPGs;W;ot/>G)3t4!z=Y(=x$J70');

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
