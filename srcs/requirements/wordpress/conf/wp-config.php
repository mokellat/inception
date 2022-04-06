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
define( 'DB_NAME', 'mokellat' );

/** Database username */
define( 'DB_USER', 'mokellat' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '3m)C$,(f q&s6H$9s6KQ!w6hjv L(^OS$,Tw8{0!r^wUUlnh+p{)p1pF}q,1$b*)' );
define( 'SECURE_AUTH_KEY',  'mED#~eTpXpAAGv=ZNr6I;E$WG)UxQt5hiX{ADu<P[gjbjlwkxwI,hG646q%p)Y7%' );
define( 'LOGGED_IN_KEY',    'jxgyb(9h.j^<UDQu1;GN%(zsK=PH$w+t@j]{Mk$IK#qZto(F!p@Xn5h]x S5V;*H' );
define( 'NONCE_KEY',        'MuxFQ>:7DU|2=N^_$){]4)v^w;4wH>[&UenVUTF/TltlqO(+&!`~*yH}Z<w!L~^X' );
define( 'AUTH_SALT',        '5ab/)ztus(*|Zs+j6g[=Hy18q2AYbv=KK|R0IcpCmHzoY>/bn g@~NOe>,iG7-G1' );
define( 'SECURE_AUTH_SALT', '#:e:=BsV;*APLT$nk[42PtSj`DW#<6xe{3t/kI)`H2#h-@8IJz0$lta=LU(@lGI-' );
define( 'LOGGED_IN_SALT',   'u}v]WNn/:SDWL^[Ranlx[@CZ55&#~9+3W6?McW,//vFbs#xUsce$sJ^>J:OIHJ+K' );
define( 'NONCE_SALT',       '*$[:>fN%.dqC{-n!1~hSrvQ9Y`hDA{qTt}NA[2J6Dc4&Hqq{+h7>..1n1,z,6ZaQ' );

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
