<?php

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
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
define( 'DB_NAME', 'plastikb_will' );

/** Database username */
define( 'DB_USER', 'plastikb_will' );

/** Database password */
define( 'DB_PASSWORD', 'h^3aFd23H&' );

/** Database hostname */
define( 'DB_HOST', 'plastikb.mysql.tools' );

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
define( 'AUTH_KEY',         'TWUE/t|p;!-Lr5Q~pYPx&:VJ35GKVu^^hwy e|Yq#EGnrXxrt*3;m%Lu&@+3M@0!' );
define( 'SECURE_AUTH_KEY',  '2w:Rp?_{M^Mr4oyO<DWx{9ZcXZN(|[WhBaTGheAqZWnZ:vWp%3x}rL(1?/%~RDGD' );
define( 'LOGGED_IN_KEY',    '~8R13f!O)v[^gSR_GZ!w*J_h^7k/LZvyLFNWGkmGz@$kBHvuu[d_/tyca6z>^=(J' );
define( 'NONCE_KEY',        '4q%~P`s$}e8:(V}]n50ZIBd~i7VLi,P!GKMvpTrRx_pbK A[k[S=BRe`xQvi[i1x' );
define( 'AUTH_SALT',        ' G27EUN^Kk)kL.h$2{E)5DqEFd_S7/F3D+FGC-DGdejd#UPp!.uW6!K{EA[]nI5c' );
define( 'SECURE_AUTH_SALT', 'ay13nSGKI4$7e|,SC.^cc!8@8/%RI+9s&FB;q=5$9)qbSBg9#.~K2?^o^tn05xRj' );
define( 'LOGGED_IN_SALT',   '<TgUSiv2S<$zoi:4hOPqHck|h|={~_+&03oE9cUq@xe}dm1!4SFz/npfHZ4jizsQ' );
define( 'NONCE_SALT',       'YhY<kL{svq|+QG6t:T/Wi2Cn`5>bd%d*nFNr)$FdK_xhe0<L}D`l.e>*-CZf%:${' );

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
