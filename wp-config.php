<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_project1' );

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
define( 'AUTH_KEY',         't}MuvOrWb^LlL1-^ut] A3[As7^]sj7@F.!.wDqKnjT7t:g{IhF?t{LG@#!bKC|/' );
define( 'SECURE_AUTH_KEY',  '9d#$( >2r`Awj>8niE>r~f~KvkX}O^q-d^S][^}GiNZj 1KImPG:X($QLE``9r5)' );
define( 'LOGGED_IN_KEY',    '7+S}Q1e/@u!uhNKAX}*-&hS:q8a>j3U1Nx.|9MCYio=D$I[XI=Y8?~n:@_PyGx-x' );
define( 'NONCE_KEY',        '*>!T1>e$FAvj|0MTrrk3oSP!*KC.i4j#hR{u/VnK.w5;6ZvUY0e%4WA~EKUGE^s~' );
define( 'AUTH_SALT',        'AbOWZkTQ}^wUG(~2f $!ozyv[Wh-_c!dUS5/jpf/y%Qd0+Va1O >MHs/+!W67ee>' );
define( 'SECURE_AUTH_SALT', 'bv*9n!>55RS(R3h%H=0a:AWW# ?o|FM/nG[Ctym5%r{I=n|qYZezxG kT_bF{Uhc' );
define( 'LOGGED_IN_SALT',   ':7@l8(xFIJZr|;!{W-bWr0H7TT[j9mOle~84w^e5%HITp;lhstSnZf6+{!U7J6Z>' );
define( 'NONCE_SALT',       'cpE%kn!pS^geW*kD.NC >R8`>5SBlP[6jx1&NMwq,Is|:k[tqc5GL9,O*umEn^PR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
