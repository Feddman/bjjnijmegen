<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bjjnijmegen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* developer environment */
define('WP_ENV', 'development');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' 7y7H>{-`Em+=-!up:mm2-H%Z>|{L7`jYHaCa279^JmmR8`#9:DQZirwRY]%b`wN');
define('SECURE_AUTH_KEY',  ';.tO!tJ3lh ~2i^So]m)+NG+Vkw?Vv(3_(H#||&LJ$.t/)&pT[DY+-$P.Z!z366d');
define('LOGGED_IN_KEY',    '_-Aeoxs-H?)|UFWdh%ZT8[XipBk8Lxd-P&c/y;x!B91k%t%-!LQyhpN!b-*g-<<A');
define('NONCE_KEY',        'y04(+HE;AErsf.o/T.$VS*)nf*G~[=6cjfB5>iS1^<`g`+TGmP_py o[h|,|WDL-');
define('AUTH_SALT',        '@0=|,Mj!VA;b+TdnR*xLjI.)r`~~j}R^mnlW3H!-op5pcZ_~1[D7K;4Op8vP|rMF');
define('SECURE_AUTH_SALT', 'w&HEXHAVWX!tcyan=l&]$[`$q}U!|p~zfj>{K{-G(! ri9+j}GiU_`[%V(?(+U9r');
define('LOGGED_IN_SALT',   '|y*hWA~Rv4Os-/c%eJAVgO:MvkPw/s.|b(iH`F^$DXo-M;Qp!B3?0K&.S0fcE-Hj');
define('NONCE_SALT',       'WC oYwk%:^daGqge|,EmL]W2Nl>mY2FxEeL3^f%p0,%@z0B 4xj?S)?}e|$ kQEd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gen_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
