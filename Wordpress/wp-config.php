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
define( 'DB_NAME', 'wp_proyecto' );

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
define( 'AUTH_KEY',         '4CvG$~<lDaGXs%bG2ngPkl/@r[2*NpXpVd/W=F[Ti=f(Rbq5=4)t `N8>qP(qgeY' );
define( 'SECURE_AUTH_KEY',  'BPhI)iEG4~I{LnmyXFVe8ggy6M#.[~Xa-aSS`LzONe1~=IGa)~!j8~GeR!E$/)a4' );
define( 'LOGGED_IN_KEY',    '1 ;JVeA5d&!Ty0xbY[8o.W0;k@1JA8q~[fS[A:UWz~XO.KfY cG) AJVyUlS[Xjb' );
define( 'NONCE_KEY',        '(8=iq5/.S39u[i}:60Q4&vM AHs;6!UGe&J9<j=h#0=SSfhW_9]M$m6v]uxDIN|r' );
define( 'AUTH_SALT',        'AQvWt-`4:*h%TnCuOGT^+SHNYHp-@U}3C;f?+o#g]t+6uhVF n2X#PXB~hdI?l3[' );
define( 'SECURE_AUTH_SALT', 'T,?5tg-#YX<_|C}`SU@/vjklyvgC3RNdW&$espQRZXPeM1zI,6u=/!`lq.39^_vd' );
define( 'LOGGED_IN_SALT',   '0R`;Bpk#bH~gbq{yDfBZ19-7RR~#qF_E70(^c;:1]5fjP|atSofH>E@zWNCP<,nh' );
define( 'NONCE_SALT',       '[e%Ji:R,bQ6>.*,ByDC:V?j9f]X7f<v^/*5`@6?WsVZb3!EOQ9<%sydNI:-+~M@_' );

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
