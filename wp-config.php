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
define('DB_NAME', 'caem2019');

/** MySQL database username */
define('DB_USER', 'caem');

/** MySQL database password */
define('DB_PASSWORD', 'ER.0726!st');

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
define('AUTH_KEY',         '=IN#_R#p9e0b,VfwtYd[s4|;QU&+9AE;EF;U{+FFc$5:=nF218PNPD4#A.*B;{,5');
define('SECURE_AUTH_KEY',  '^2%F0?.sjt}6aBNxxN){dLv/i?bL`=e^$Jgc;jGWKOqQs+:y>yPk?ANQCTQ>G!^%');
define('LOGGED_IN_KEY',    '<+`/*q`HxTgo3RL>=+{Z AojQ0#{%z6aE2= f/s]9]E3PLjWB$AVx3#YZ *AaV,:');
define('NONCE_KEY',        '8;|N&E^baDJL9UN4Wl(&Akv.Y/TM>zp45Pd<`:A>};jd4z2/p5F3]zqpn[P@`qLm');
define('AUTH_SALT',        'zExb6p{7Z TU=tG!])Z7x8?fxM|xu+n/av;+v/;e[8T}9}yFQJ.M%^nr02u-G}b@');
define('SECURE_AUTH_SALT', '91#lfXad>01!N!oQ_l/hlfh:EEaF%vOtOe2=8LOk5zO:8W(]S(M4]=J(v*g:;tvn');
define('LOGGED_IN_SALT',   '*2b+Z%+OKJ`NNN;el0-aZbM?U>1bJ`LXc3)]sNjk^@x$]y]7[*;y.t``P9@Okp*)');
define('NONCE_SALT',       ')i(2YCJC#T.Y~T|RH!sn,B]ojJ}A03Kw~MfFq_)v0_C_;mqu+*5LNk<G,ihKdehE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_caem2019v2';

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
