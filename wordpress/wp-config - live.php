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
define('DB_NAME', 'taichinh_daybongda');

/** MySQL database username */
define('DB_USER', 'taichinh_daybong');

/** MySQL database password */
define('DB_PASSWORD', 'X*4v*xV3(?pd');

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
define('AUTH_KEY',         'M,Y8%Yo4XeQ{ih2ut{OOy.+|y~I-:ENtt]?W^+(nDXo$V;$9r)BlUIeQHYK4+-c0');
define('SECURE_AUTH_KEY',  'Bih)oj3fbBc|BG)#p%rZ<6>tb9r~J1^cZ_%sp9(p(;mPLRa@ 5SIz15UP!+V#/ D');
define('LOGGED_IN_KEY',    'hrfjEc*0dBFNc=[-Jr`3lhG<:%~D{mwPLr]t %t{z >pf$ssh%*7bOGzD0|z<oI<');
define('NONCE_KEY',        '3G6pC7;U!RkRe<>@mz<PR+`DjT9z9-b$PQ$`i3)O- WNOp[1Qpo%lW(YQ[I7`$,i');
define('AUTH_SALT',        'hLzvr3|kQ|>>mkG/Q++2NWFs7C{HKoQDH=+T_Mi-t;k<gv4)oGm~d%,6-8yQ+z7 ');
define('SECURE_AUTH_SALT', '/cwgRO#H7~R:Hu=!Pk<q/}JPK7y.4r*vrPg3#-j.LaE0?:-?X{8H>aQ#Y,l(T?)?');
define('LOGGED_IN_SALT',   'Kw+.3|RkrFjtE&Rbwar8:d,;xA*0do:f9iiZFJb<ZHu+tQ$gTpni`g*g%W<1#tjg');
define('NONCE_SALT',       '!kg_8FSR=/#|ZgA|b#mXE+rNBfcMKqK`hVRJ*(zLTonVEv#DpBKr1j/h+64M|fc!');

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

define('WP_HOME','http://daybongda.com.vn/');
define('WP_SITEURL','http://daybongda.com.vn/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
