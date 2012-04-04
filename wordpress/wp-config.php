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
define('DB_NAME', 'the-latch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_0YwzC[weCM>T2>mDE;7[/9Xi.v&.GsxT8|*t?yR9|@,7/z-OfB^9s(MHpZYD5/3');
define('SECURE_AUTH_KEY',  '<EY2|+q@!1/Y5/wp`Sv7)0[B5|G/rciAPPK=v|,r#MW,&ksjO>%f>oq2xYpD7ngx');
define('LOGGED_IN_KEY',    'zQc|<CTBG*Z]DM;C:X}AV`Ypx:{|qM*-1ZF5HW|>aE)L+32@~U_h3-L4~f$M+CB`');
define('NONCE_KEY',        'TPgVo.e#  dxj!wGPg zdUJ3!]kick+K*4L[!NcIWUO)1FtI7brptB}e*$@SW1z$');
define('AUTH_SALT',        'ub46l+@w5O^qLaEXeF5__x8,ql5 =?yv$y+7-4Eb*]:TU8~754%Wjt+@pkGMR<*+');
define('SECURE_AUTH_SALT', '*!*oY0RMWZ+{uP=pxPVvw@g-2++*?-i=COna-Q|nvjf+7E<B+ShOBoea#Nmo.k,p');
define('LOGGED_IN_SALT',   'D@j#Xd!%=}fU#+rz$pLjmb}|%}(bC$9pmrG]r-kP`>< U5K2n.FHF=4AyFFV?B?4');
define('NONCE_SALT',       'a*T{}*cRJO-q4L47#=(<&:3%!7%2u{a4>ch<HhmF[fzEf^l}C9JTx8zA B {J[JG');

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
