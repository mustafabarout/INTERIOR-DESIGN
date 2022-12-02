<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/&j?yhGikq a4QYLl+n,S@G1po vCBL=;>YK|G@P}[l]PRaZmvz&-zY:<xy_PPvn' );
define( 'SECURE_AUTH_KEY',  'ZPb%YS4>i?vR1Si(]jBx3WhKX`oUc#kUlg!eLB+:}Zc|#xZhVw[:XEA9~zXVGq7#' );
define( 'LOGGED_IN_KEY',    'V4Q%H[:19h7oRL7V*G8u(|4Wt]]z-((YF`>{3)wC#]H*#._3,9Z_?3,)(+n=p|JA' );
define( 'NONCE_KEY',        'M7mj~W2,?gPAAuQ1M6iRTysCrQ=fAGIGnW*m-jDmP}GK7*cN+H]=rV~A_2Rxoz=*' );
define( 'AUTH_SALT',        '7e^Pa<V`t8mq%{41nA|Ic4I%lFP^;gR_qc)&hV7,={z 3-Nr{A=zAIcffAK5)`NJ' );
define( 'SECURE_AUTH_SALT', 'PUM.g$p|R:rory}w<6QjU%!}q0LEPBK:|PR-668E,~v[%.Y{9BgRettsimn7C_H8' );
define( 'LOGGED_IN_SALT',   'HNO=n/O<zuw}&1;Kbz_<[)EptCtg@m&Wq&Ju&t)JUy<w#7S!8l/e]6bpmL,Wks}P' );
define( 'NONCE_SALT',       '!kpSh:-l@9]ExkY61=o2M1rz;Q:{$IRK8%mH&JuciDmbz*igKL4Hd8jWDNk[+dtf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
