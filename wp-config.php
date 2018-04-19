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
define('DB_NAME', 'supremewp');

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
define('AUTH_KEY',         'cl5n27+9gBT~efV$n-Ej}m1iXLYYHcK4kZwK.%Q<m((*du_1J_iz+|q;99ZCx%FR');
define('SECURE_AUTH_KEY',  '1EktIr*%78)Nu1HHsQ,%%l,ieDLnP-z77BTdCUcF*$YbVjv)u5ONz?k~0lZak[4#');
define('LOGGED_IN_KEY',    'z@^b`eYgjL_0sHPbX^Iz)!J[wm<IKtrM8*,zsfMw Lu%)%y*/Y4bmIYgH1%iv4P!');
define('NONCE_KEY',        'Bc? qiA(fXfru5a?QGP(<4]w]loax*vZikG3gV(MjGJ92}@/}#Z>WG9C 6X)XFSi');
define('AUTH_SALT',        'a?`6/@AA>vfZbP2_13U4.E&eW/m9iVj+H7/=_Rv~(Rl*=HQ3jzl?-KW2z!j[dX}#');
define('SECURE_AUTH_SALT', 'P ZlhQP;=03r>kh3V(5As2$`a?g*n33$LrOXjM]}J|Hd`1IQQ/:3b}v;)yvy$c3!');
define('LOGGED_IN_SALT',   '7KmM5 *GQ9JyBOey1.cf[PZr7}JlM`g9KF)HlH&v+GRe0sST+Nh2mnm(>ZRdP-cX');
define('NONCE_SALT',       '^zeUzVy#3iPGZM4yYl/`|8yY2M)Ea%r9.zWJj>I+W=y1x1[X1}<8P8}DSaHy:_TI');

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
define( 'WP_MEMORY_LIMIT', '96M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
