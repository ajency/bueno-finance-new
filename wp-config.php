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
define( 'DB_NAME', 'bueno_finance' );

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
define( 'AUTH_KEY',         'f=&gD-Pm+u<NNOg?0pq|ZJF[D2P+`8t^xl,A;pnF?;Vz8_fotmwS82-W*U8<+@1<' );
define( 'SECURE_AUTH_KEY',  'WZjtQ9zO=j{#(-~;<_swQ(@e)y~bC602{cm?lrglb3uS,T[iA.Q!6Ry^69=kpZZ&' );
define( 'LOGGED_IN_KEY',    'V;.O$$uR45a7<1EQb<//?h,jZ}WBfv$#V#1O<g4ss~OwVgWcOPLZO$Y`!djtAySF' );
define( 'NONCE_KEY',        'nwr5>vn_}P)`j*clnoK(Xvx~Fz8s5>cY.%`A#=_Ty`S@aN-Q I-ZESw>o$%$i-=3' );
define( 'AUTH_SALT',        'BAE_E$?+E}*.(p#;OHIscmAm[eaX7xiR+( =q_kGt{#bTDdV<dZobN-O^Y8fb!m%' );
define( 'SECURE_AUTH_SALT', 'P|n-~Gst.Y)zNs+,ORt,A1GA-EtuPj0Lt,D.$i2EIF}CJqXIiduZ ?yHt #+zs]b' );
define( 'LOGGED_IN_SALT',   '+WOFH)>T?IJU|x;-k`7wVrzsQ9FDDUF/1#g#X530tP :siG2#[8;630;KmB(l0nR' );
define( 'NONCE_SALT',       '7zUvP3h@!.?f3wUk3}8(IX]D/ks^24Eg)#?_{nS[$5CX%BANV3 hT;2.hlMA0/[9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bueno_finance';

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
