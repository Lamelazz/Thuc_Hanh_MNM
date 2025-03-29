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
define( 'DB_NAME', 'tunglam4' );

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
define( 'AUTH_KEY',         'x}&`ERhJ}e,I[ <U2?pFNv3&VRSY%xBc9=4i*sYSjIUs2Jgx{+X>8E7_E}aZS:vB' );
define( 'SECURE_AUTH_KEY',  ' prm;;x;/v_T9Z4G%1XDd{*Z;AtjHE}2Q_2ZtbS`G]P4Ke #De5p<I+Qd.AAAz;a' );
define( 'LOGGED_IN_KEY',    'W4&sf*ZDv3{vu}poSoD;%2ZFYzn1#Z;6lEAQ~y!hM[dxj4|S]2]O8DR*y-x:`[dP' );
define( 'NONCE_KEY',        't5,rA{XN$v/c<M_]@U-v]Nr)Oe$qMX^S^M(Ho@*M!kIjPW^3~1v3IqL#<00(Qwxm' );
define( 'AUTH_SALT',        'eEYA/($*YNJ{C(STqjir@P_$Uc@#rxtQkZYY;zz/#Q>o)kLpzhXc<=0QS6Z,,ekT' );
define( 'SECURE_AUTH_SALT', ']enkDR~^p5RdGGu[$],+=%M bvZT%NzJ*C}wrye[(#+$ezVJFMDhKTp^jFyjyP;@' );
define( 'LOGGED_IN_SALT',   'wQl7eztkYIC.c([X7#cUR/P]6k,r*87h{o}<KN,kCdHY`nrFgmjE?tQn--Y@&6/)' );
define( 'NONCE_SALT',       ']@MRu8M u,%ZK!0?MA5arB(3_|*60:u4Q@5:$A@yD^_0X-jL@v! %0nnoAI8&uNe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
