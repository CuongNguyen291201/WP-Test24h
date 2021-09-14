<?php
define('WP_HOME', 'https://test24h.vn/');
define('WP_SITEURL', 'https://test24h.vn/');
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define('DB_NAME', 'test24h');

/** MySQL database username */
define('DB_USER', 'test24hadmin');

/** MySQL database password */
define('DB_PASSWORD', 'test24h@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ' *CFcjWGN`i=7%Uk1PhgVs/%FsXAwi4l3SUywo)X;o0or$8?3P !ef?~=q3WN.-S');
define('SECURE_AUTH_KEY',  '%pYl^DPf4Yv(@ IY<OOA,MbncCV-pvQF|MQiQYl%bq<6Yv7n`yewX5|.XzLzNEO}');
define('LOGGED_IN_KEY',    'wuJQ#v9y7:U.NpST[s-4={25IIUQ!$r4B}~rjbZ@~G$;h?sPr]D$$J;%o%:{xTD?');
define('NONCE_KEY',        '[~`@t)td$:o(@>z7CQ=e$l2x4fY-(Cy8/^ P<?$hkR+!_k1j`It#E?tR=_#AYliA');
define('AUTH_SALT',        'n6wL9JL6N3TVV6]%`q)m]8hL(YT7{/C?IY`hd(bRKK&J(E[=gXI0X|.<d~/=yt!=');
define('SECURE_AUTH_SALT', 'UG%=3J;`G5~oa_tbeXo9lkj:%CD:h86M9;s/(]f[n8/{y4Cq2K{~.Z**~5Y(2@zk');
define('LOGGED_IN_SALT',   'yTEQ:}V$Eb:>q=]$+B;v!SmI_U_/XA0!5JO,bn*CJIsLxGFQXtby__=H<s./AGW_');
define('NONCE_SALT',       '|P/OL{*$PZ}e~]1Qn@p%mD*lG6;W}cuymG pwZSX7/=j*2[h$+pq-|7H8xYM>66C');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
