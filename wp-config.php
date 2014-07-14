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
define('DB_NAME', 'textbased');

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
define('AUTH_KEY',         '3Ud1mD.OW[*-i?+%[-ART~Is#lA*11ku5<!qQH(xT5J%6x0(?c(/wV;_cVJK:iC*');
define('SECURE_AUTH_KEY',  '2dnOkvrS.?IcW +plwd2/_m+|Pm0&eHY28f>SU*HJXDo_ms&eofjwm@X9`Wh1>R^');
define('LOGGED_IN_KEY',    'pV ,|O?14C4YyL>-J-`tG^W]b~9YpZE8,.b[I|-3s#@ySmuX@o+oyS`,C=wRzO2u');
define('NONCE_KEY',        '?>$`hnTT/sKP4!(x.vg]z|3/8:dGa]`3~FD-x$R9+9K@1ojVQC0@wkhBDp-n!=.)');
define('AUTH_SALT',        '{nXFSR_W$5btSgj.2J5>f+NGt*)...V B/EPI0NR2/?W<EzgT:3N?8wm8rR:|O2q');
define('SECURE_AUTH_SALT', '?d!}(kQJLRIg]|P$!(5~#DKB;nnMxda%$.Y}#Cb#mGq}8rW`rpprC<2n,WsFoXa2');
define('LOGGED_IN_SALT',   '5si+J]SgH`[;} J ,2#vTBE2v>cn*UN2_zJ}tiq T2i.HfumanQ>B2U^vL1R+EDT');
define('NONCE_SALT',       'sPS#AKH;fQx@=Zq(Z:xV3x9U Ek|eK4-30Apky-ha+6Qx;7GwUJM-))%k<dHqxMm');

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
