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
define('DB_NAME', 'trrg-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '/|F+XF  NdLrKw24Xr5e`:384Qkp1;B7eZ-Fu,h^B_6c]A,-[`joE.g7|`f_uzr(');
define('SECURE_AUTH_KEY',  'C/zUp]zQ0!%_J=h`yu(S~K$s-xao^0+}X%!cAr}2?C>r6/gKKH-Fi[MEYP:}(IqL');
define('LOGGED_IN_KEY',    '!H!NK`I.^gL CA j&>91T#1V<*R}xHScSmfqt/[9#12Q7O%Q@SGl(P=>O;^H12vx');
define('NONCE_KEY',        'W(*Y7K;7d;TuU!BG!p,)z5B.po~[FB2_Z(}f<fNnA&-TycX:Cr: 5>u/18cpKod4');
define('AUTH_SALT',        'u}WZN%WZqj,83A-R}?/}g`iCD.XY*cW$/Q{9 }mpjF+wv[yTe25Z@7#I5F!5UY+(');
define('SECURE_AUTH_SALT', 'B9{Cp<!:`cU$!h0^FtY{RT6sp>J*bl!d9!LHm./-P@05lvPb:Ls_B+Z)-3+-bEWn');
define('LOGGED_IN_SALT',   'Q=b-|v%V)0XbyJtagvt3_M:5%$d%xx{HT&*s2^-:kj8=[=;dbJ^XIKKn)l>9@&X@');
define('NONCE_SALT',       '_|m/)-`2^l]t7TkqWP sEUb=si!FOmUv4It#F}+>k1WnYv.7ocK>[w7I tJk<,T5');

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