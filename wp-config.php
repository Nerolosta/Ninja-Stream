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
define('DB_NAME', 'Portfolio');

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
define('AUTH_KEY',         '5*_9Jd=@HWeNZY(28~FV_COvbXA_UjG8wF wMJN_lXc1KU?=5@i`vIgD<XcgARr/');
define('SECURE_AUTH_KEY',  '@t-f59%`Yra,k2T}}`Kmco,FB0bos4h(s>!U=EhB$3tuhe|l~g1>=qzrf;~q(GNA');
define('LOGGED_IN_KEY',    '}S{O2RR?j1-]J}W2uBL@C$C{AoCkz1Tk*Q[PWA25f/[jqXd# x1!g,<Se-@N@sVA');
define('NONCE_KEY',        'f->ET9S(6TuY*.ynV8&_k-[A/2>ta!hF!ezq;^ bjk+ZL^SL^h]zRcc:K(T#nD!4');
define('AUTH_SALT',        'w3Iedh9F+5*c>pc;QQ[k-J8C -S-[?A-UF@]I8SyG](ehFysu$ @g<P:WQ;u]FUC');
define('SECURE_AUTH_SALT', 'GH:J;Z<l*K</9>O`wkC.;*5j,~?H(%-Y-;1&UW[-I12}>rU8D(u9ueF.Z?TLIL.d');
define('LOGGED_IN_SALT',   '~R$bt[j*H MC&Y#K1cxg#oBy.-O !etdtGry 8kDy19S,?cNsSel$)X7ko:w(`Vn');
define('NONCE_SALT',       'vq~CH}oB%3(I4>@H#xEw;nkBtS(,}F/wh`Uhl:op-Z-hRrh=E`FemwY;(7L{{Zf%');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
