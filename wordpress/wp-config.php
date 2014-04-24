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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'F+X|j-+d0#9XUk:y6-+N?5#,`LKipSmMcTP`,i9_6y~@|?)ab-#,dzNnkvsc`=b:');
define('SECURE_AUTH_KEY',  'k+H6Q{HL>+9^eFdy.kac}TaEL9m*o&I*+9m+W+s;?bb+@.+7;kPM2o_9p048SQN8');
define('LOGGED_IN_KEY',    'FEJu1RjH2DEFH7P=]!$-17U#Jz7.3uI1yhY,iALJ?WQ>%SR|3_N22`vDB;.C8PLD');
define('NONCE_KEY',        ':pyO#b-B]2OK2ps@VnCPU}SP8?h4b#UTY`<e#:g%4]pKTesYOk@M#0oC>r6Sh1-H');
define('AUTH_SALT',        '*EE0av>M_Gy!t}?:eZ=k63u@*|Z;W4B>%UCdfj.gFU/.Eh/z&i bZFjz,nQ=a4cC');
define('SECURE_AUTH_SALT', 'oa`lHd|B5:WOt?VS5e,)e|Xy)4!I%lb(NKL2A+kpE%d>,/c|Y2gC&aWbOPw_o(}W');
define('LOGGED_IN_SALT',   'R1uY(=!nR|7ehB0^|3K`!@|pDY!WS]??[=7|RfI|bTkT@}Yo.db5{e%y&D!y;uk`');
define('NONCE_SALT',       '@I0UKY?{~Ps%L[Dy#g*hffz(bB5tV}q_,i+0%o<2LP;NwYFneyBVg(,]U2Mw=IoK');

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
