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
define('DB_NAME', 'depuracr_tomatis');

/** MySQL database username */
define('DB_USER', 'depuracr_tomatis');

/** MySQL database password */
define('DB_PASSWORD', '_dR!FAZi8UN[');

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
define('AUTH_KEY',         'Lur>Is8`YpeUwjo7l+WT_[3&5:vc;~xPDE^nDaoQ,BAC^gD+F/8OMxEI*8@?r/I/');
define('SECURE_AUTH_KEY',  'vBSE@hgqE_u&A]k{~m>&wIYb=Wv_2K$F3%<7n?d~aop249V5KyiO|&.o7SR0G}on');
define('LOGGED_IN_KEY',    'MIQ{?<1>^Sit$f+32B&o?][*LeebPVhd<b!|DL8-=PYsTux.r9a+[AG,z^tX!C!H');
define('NONCE_KEY',        'E2p=i%(RKpFNV{W<jL6%B`jmfn9&Rz0`>38B1(~A[rc2;xwZ]4%%)aj3.R6R#9Am');
define('AUTH_SALT',        '%VDj4ZhJ-StF;KZFo<ivk?}Q3&fGI0kR$3qyLtS{1st~|Vd^yJ-) iVA=$bKB+Sw');
define('SECURE_AUTH_SALT', 'u3E Oel;2k{/N1IL6{X^kQQ[_`}fP=H^%`TWcAHT)nf|5Anc.:)3G=fjG8-/a%XP');
define('LOGGED_IN_SALT',   'HMso{TW0G+,^trsWleI{{nwga^RT:l_;[4e{ZL*#}U~z3mV>l~5XMmXH)%We#7|b');
define('NONCE_SALT',       'j$H7F&<+K:C!B?V.Z.s5mR6f]y;:WuS!BqgyhqGmNJG(GAmM4T.l<aAS3+TZgv2+');

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
