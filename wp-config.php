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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hybriufancylab_wp' );

/** Database username */
define( 'DB_USER', 'hybriufancylab_fancy_root' );

/** Database password */
define( 'DB_PASSWORD', '=rdsdyNOkbXI' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'ulz(|l%/Uw%;D0ruj5R&64&9]87UV8]OoD5Qxg1@1|49te]:;]X+3l#~]266#jCD');
define('SECURE_AUTH_KEY', '+iCEE:jKtTpw()-F3y]l;|/)F)*hq6oy4hb10ex%%4--7CS1]X)gz228v[6kFg2F');
define('LOGGED_IN_KEY', 'vH#2Z_@1[my0-;1&;!%23q_HSM6)Y)t7aj(YXZAt68wU)E5[ZlKiZ8E-*158G:L1');
define('NONCE_KEY', '5T4mg~V)Mp6SQM%*HaUS[45J[;kkP[_-aqrY~r/R548!n0z5WE3|M3er1M*EVa~g');
define('AUTH_SALT', 'hE&0q;771F2T9Ny))%8%&3pNSXRx2a1f0C178#mp]t7|+K40j96|5q0/5ltZbbmW');
define('SECURE_AUTH_SALT', '8ZUc4or733reK!o4x8K*-[11:Q]Ao1_]NXvlH+!V6(23OTUqz*ym&x5%AS25sD7i');
define('LOGGED_IN_SALT', 'pd7Q#Pl9Z)8_HI@7Wdq3nGRz20plw7Z2~YbZPp2/4wep@-(8u%:0zqEymr9&]l80');
define('NONCE_SALT', '5dq#H6t8ApVe#r_Ko7g2+-Q2I@15(+#V8c5cy~%l*24rhM!|;v|tg%862&aIb]6&');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lYeZ6_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
