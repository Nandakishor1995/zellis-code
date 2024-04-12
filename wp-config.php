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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zelis' );

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
define( 'AUTH_KEY',         '(0]/uEO%SYj+z[AO1!%,t0gTI4cn*Eo-Gs;#&VXe-Tey/KPs #oOEQhUpN<Z9P1]' );
define( 'SECURE_AUTH_KEY',  '{vb%I@adOT1,W&9xTHMo@J]ldvgWqe0/z/hyb7?Vvp~KYIef5%X&]+D]-{rC>!U)' );
define( 'LOGGED_IN_KEY',    'c/FaR#~U@O2YmQffYD LSPFl0;dYX/hpm[ijD,Rp?VAH}Ys@z!B~^=PcbJm=2ECE' );
define( 'NONCE_KEY',        '-d!hr%PlrI7vAD]?(5Ia)>7&9LvrE]CE7fykW%2%C(M3ybUH/MrMTBo`L}?C*.);' );
define( 'AUTH_SALT',        '7cTuXZ=Qa%l3_6+1z.a tTLigD(I&L4;i+,}w&)uRe,<V({z- sgzF~O(8]d|[`.' );
define( 'SECURE_AUTH_SALT', 'l65qL.ri[}]C(XN4jgPL;vwgz2S}w/.^docJd/{p`~x)`kX.Y`* tH8DtB>p1y|q' );
define( 'LOGGED_IN_SALT',   'RoM=*i%$IR:c$57&Ti)>>0ibL*5kkh[A]OEc5/,NweJU2LG]NK-~^!tzB2E>yH2<' );
define( 'NONCE_SALT',       'wY4~!+`9{Z)##qwE[3&htb3m5};tjYD#]KxB?Fe([m _Mjo}[v8|jTG{k+D=K)`|' );

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
