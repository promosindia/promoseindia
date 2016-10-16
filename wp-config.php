<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'promosIndia');

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
define('AUTH_KEY',         'F1SDW|e(j?DnZ,wHuwrAqr|w]8XnO?}R@AJ+MbJkSX]=MK+Wq5I#)vZj3Ov0N/V4');
define('SECURE_AUTH_KEY',  'C.9[~d@s+ijYXashVPlh51/KPe}cqCI@kkAiI~ncJG6@9hr3X%_9Rm:%5[WCw~=_');
define('LOGGED_IN_KEY',    'Y5z3Cncq7B00/rY4hw3?!jYUGW0Z!<bP*xZZ{V&Zn+sax@*Z]w#;]z2:]6nGrtB2');
define('NONCE_KEY',        'AD4r2~PV8HGJg{7-8tqFQ29.]%^n:FZc_=G[B@p;zdO7mZTwoSR8Bi?~>fUxsCgE');
define('AUTH_SALT',        'U*5MX`T#iS*mYC8r&RBMrngG+Euhn!LpR{*t,2JwXh32tc<`FRP u]Lw_aaf(?>4');
define('SECURE_AUTH_SALT', 'O<F]iOW|6JI0*^#4R_=|@>Kye`!_35urG8sSbQs=ea-x&f-6n S9P~!?VB8u;a`/');
define('LOGGED_IN_SALT',   'sN0+Z&8V$#2K=c;DS){y:I?Qc;L.+Lc@)X0 ~/S-Mp:tt&7O#&H%u49Y8+,1D=fs');
define('NONCE_SALT',       '!uE8Vc?eAlW>r0P8Og?,Y$8`9wZbqFTd0Hr|,e8 C_RJUVvqL5.FBAd`}}wD4J;P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
