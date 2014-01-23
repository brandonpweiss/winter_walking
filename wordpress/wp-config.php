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
define('DB_NAME', 'wwwordpress');

/** MySQL database username */
define('DB_USER', 'wwwordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Icecleats12!');

/** MySQL hostname */
define('DB_HOST', 'wwwordpress.db.4800490.hostedresource.com');

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
define('AUTH_KEY',         'aQD2q_fClG^$6Y>.^U _0io/eV}@xbEo}H/l&RbB5o(/{rA^a0+k]hsx7yQg5qs_');
define('SECURE_AUTH_KEY',  'VrER1=LvDeQs?TsVHIw=+ZD=%){,7ZT`b-[F),eF.mXce2=+Sd<2CfdpNW+y.JEN');
define('LOGGED_IN_KEY',    'fQ$kU+FYP#|TP_J&n4Mhv0QW:a[274]w3{Xy;yw^Ui;v+F|Z1NSl}dZMzV:P{9/o');
define('NONCE_KEY',        'HLnsl}07Qqsq!m#Eg4#s#~p9$;gwu?unzD9:~3BevY[N|CS!5C5XCu IfGRVd#9I');
define('AUTH_SALT',        'Jd5nzpx]s8p5Ucu[:3=e~3Sr>VDL-GRgN}157TY1E7w[ygOwa$!@!nfCuk=R!*xs');
define('SECURE_AUTH_SALT', '!/`:iSwGyfD|Ge+i2[-VHMP-O-r6DT&snlN=TkEE_hVe@:]R*Hph:0iS[Mzwn]L<');
define('LOGGED_IN_SALT',   'aSBg&)qb(nXiH7yPA|Rpms|-$n.>*8m.}Pd6$1R~-@e>f=m;=;v&j+5oEeUp_#o%');
define('NONCE_SALT',       'mY~x{X!L+Bo?F(r$T+GCEy`y`IaC~9s)5m0U#/F#7||8-dC>B31+^sLg5*bNhY+=');

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
define('WPLANG', '');

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
