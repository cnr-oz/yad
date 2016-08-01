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
define('DB_NAME', 'yad');

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
define('AUTH_KEY',         ':(kZt#4dZ ^i8EffMH&Y0L@5zUH_L><EBgb-Z:Xk.c.n1fTbk]yC-DY!rBVYW:x6');
define('SECURE_AUTH_KEY',  'yA|e54p=|x6ZZLWO@cRtKrou,PEwIr:raCcTo63FFRMmWpB92_qALSt {Q1/jhta');
define('LOGGED_IN_KEY',    '>w)HNV!>i2>IdKg|1x=E?([zZ[sI=zRAky}b(1rF8#;em}6z%3x03-PPM,m_5dER');
define('NONCE_KEY',        'q-M)!NykES.8-Pc&-`EYS!d`Y[5Z`>=t(.dUQrIZ5Gn!C{b]QYhar:Q6+>O4:#kD');
define('AUTH_SALT',        'I)@D= Rx1}HP@FYc1*4u1WoQ}PoPvB)&-dUxKSSLlMcHnOZvPe9h~OWDUz&q*{m#');
define('SECURE_AUTH_SALT', '7gq1GhFmP]*kd!g0+Yyec@oQl Axs_a%TCNVFdYProiMZ*iAUA<H-C# u$Q?N)5Y');
define('LOGGED_IN_SALT',   'PmV(?uKF7 hc2w%)?g+moH|DQ+q5OYQcYTXD}h|I/TKV-7r]x5kYS)eY3zb 0P$#');
define('NONCE_SALT',       '.mY5dnb/~hiU=X fk`V6UZP(Dt-r~+faCL@8Ef}<0C6J@Iz_q0;LB.{&e- m2-+-');

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
