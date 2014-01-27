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
define('DB_NAME', 'u204750119_blog');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd/~|W?u&,yS}jAUK}m]PF5_po$rAt9I;#U}T]*HtjEmGNmwX&*YS)^}$kDc<WFf&');
define('SECURE_AUTH_KEY',  'b(qegH>t5a2/7t?t~x)XmbmbGOkkB-?=BniIAP-m(t8jfH~0~Z)0I0Y^.*K?D+j-');
define('LOGGED_IN_KEY',    'gh~<CK|l6jg;lhQ_tUt>#V)fSWrCbM?x->_h~FNdN>|D3;XIIrDbn/(psV5VDze9');
define('NONCE_KEY',        'LL:;]MzSUH^5CKnE_J4[ymEWX=*2c+3nM2hcIhW/*Fe[~f!aF]O$YyI4LUc&LN_C');
define('AUTH_SALT',        ';dg0l{rT9]lb)y$P90/q*ifr:kD:Sww}fu7#k~EP*q w7/1KVIH+BJ%dMSA5X>Ks');
define('SECURE_AUTH_SALT', '=sl1ZKW~@&`k>RW0eS$;gfY9Kz]}/${W5WfL,g1t=R+TSgd[yX<j&nrI t@e))ut');
define('LOGGED_IN_SALT',   'qs{`Ve)nQYluBN:s!&x!h5e@9,F=6Y-3Wn|Z-Zo!NPZ0yX&0-]K]!4^;7h T]I$b');
define('NONCE_SALT',       'Z?`ok$6I)M$=a6ZfX8L-9m/(6xAaSg*K7K7cQ??Nf4+8do;AOEko~7nWzS~V.Qts');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', 'es_ES');

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
