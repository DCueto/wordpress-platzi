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
define('DB_NAME', 'platzi');

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
define('AUTH_KEY',         'J4hWIs{A%jOuPqmqbA=`_-S%<baJ*K|P%bQqf_qb%1]S(KFFf~6a4H8]*2LFz8SK');
define('SECURE_AUTH_KEY',  'p&k`8pWa|vr#&+D}T;M+n6%{Ch|}CZgB2O+$}{J3#al.K;#3]2*1Mfuo&f`TcP9c');
define('LOGGED_IN_KEY',    '-#t[#30$|SVv1e;ZZZa5s5[a(|I|-g>@q_HtilNh72>YD-UD6{r,_J+U~B>P;;4+');
define('NONCE_KEY',        '^*]pLvd:vVA|Keq!rFE:B2|`>QGKW&_=/*H&BYqB5])g>i/3d ;cv`&O>OT1S)jo');
define('AUTH_SALT',        'w]MC|qCDRX$<rp~R.WL-67!+IMQ[])KOee#)<w{802#Cb?#?,lTSK,7@=<3KA1> ');
define('SECURE_AUTH_SALT', '@{,vnJgm/yoQj/QfVi~#!^+N y_r*!=Dr[%>vgx@Sr[cXtP8l!GyRE2*OtfJ$eJJ');
define('LOGGED_IN_SALT',   'rCU.A`*{n/SzEpNI%`&9mSECeIE$I1kBoPwRy!(Ci|~pDUZQO&[b7_ad?%JE(t6>');
define('NONCE_SALT',       'll+b&IjR<8mkach:$2ymg_>OQIc*=,&0;:Umg%U~#Fc{R3QnD/u/FH|z~4vc|@%*');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
