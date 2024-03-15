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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresslab2' );

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
define( 'AUTH_KEY',         'XAA$u`4lnOK3?H+|51HA<&N7bSeIfrnqsjbu-vFoN@tFFfm:|Y<r23j>.zHeV[TY' );
define( 'SECURE_AUTH_KEY',  '38ozT-B7Ydj|T[G#dRu-$-1_C77?Xz)xm]EA^/LJ_KF!B=[$pK9~l,l.xo||,4`q' );
define( 'LOGGED_IN_KEY',    '8C){X3Upv-O&.AqNsNEkqqDXjdWD<Pj5ndkBd+#uZQ5I#OhD$GrPwI$-7pKsPbm`' );
define( 'NONCE_KEY',        '5K0as^gC1f@!D)gr@=a,#8IKH(o|,ZgfiUl0SVT*j!^SA9cypE?4}S0..B=~@;VG' );
define( 'AUTH_SALT',        '%g](c`5Irdahje4,+Sgqfuiu,%:a(8N.49lmu=]k3U-zuAvcAanK))_IiFG|Ms-z' );
define( 'SECURE_AUTH_SALT', 'L%=T_-SLh~!7yL. AFC;tBe8>gOo}c#k$Lpva0Qjd{[E[Lz&3DJ;M; A%w!QfAsk' );
define( 'LOGGED_IN_SALT',   'i=9AJ#2c|MkWJ%=.5,Kp@oC/2BwY*|X-c%RQkGe&83xNp64enhS&u?uDR7W^ZsgQ' );
define( 'NONCE_SALT',       'i.iD)AQ~1@/2*C+*.!.9$w9 X`TOI6&59TAlEkX<M6AhFJxOUy2:^nH@vfD3*hC6' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
