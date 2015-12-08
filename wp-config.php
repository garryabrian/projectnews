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
define('DB_NAME', 'newswantaraok');

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
define('AUTH_KEY',         'II$[9P&|+Mo~x=5tE+Q?A;x|uM<n|nzY9Wyr|Dy|XM0R0urzJ#tuA.VY44;<hts5');
define('SECURE_AUTH_KEY',  '.<va[yfl9_hGzBs[T1`VVs{d+tUw#^!&+t7;{||>:<QONK~UngQnyzlqO0H+UV?[');
define('LOGGED_IN_KEY',    'M|P^c6~,#04S:~RDu1jhi%hjp0ZBEO7Q_3^4>[@&?d)gKWugBUeCBQ#,vHA1*nA2');
define('NONCE_KEY',        'ClN66HuN,O5?R-gXM>ofk(mnXmuVVrtG&_d +n-zX75@Wg]%<YR0%1^:)%=v/QP&');
define('AUTH_SALT',        'oni=aPR@38/JTOh1PXEYNAD(>&N@Orfnj0qyrhePU<W<aIW ]Tt-7v=W`:33mpn^');
define('SECURE_AUTH_SALT', '_^#_[j*~uhGEZmDK2syfH*]f192vYAn:wZ;bxVgB~(r-DhZ@_%Y58BTn.1=,sg$u');
define('LOGGED_IN_SALT',   'byUuy}BVCEQY:)Xjrp$Tp~<B{_q=<7zH~#7576-X_=1i~5L4A<)*/>}Tq v o-<M');
define('NONCE_SALT',       'qG-F2?f}/;#q(<cTui?y3zuv%_ |y]KOY+Bm{8mapUN7RU$?Q[n_w?T&XY%Mqy-^');

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
