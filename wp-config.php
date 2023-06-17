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
define( 'DB_NAME', 'E-com' );

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
define( 'AUTH_KEY',         'b@`l*h{7mj<P#j44u9@D~Qrg_fbHlt%X{Td<u>e6x)M|LWB5O[xTX3o3UM9|sHnk' );
define( 'SECURE_AUTH_KEY',  'w]#pxh1RW2WkX:5G?jtGSK3QL)$x3MJ%G#W!Z-ey-13rPq~Ixk.<!l0gHo;(|~T[' );
define( 'LOGGED_IN_KEY',    '*B$+Vxku!db6U`K2;Oz,er:PdzhZD$lJ @8E3Kar|l~Gdz[op6Ohnnma&QC%g^4b' );
define( 'NONCE_KEY',        'XG|[Par?%4%tM,I{$8^zPwu4[*+VbUs}YSSHIwulW,#5ARywk]_ ,`D}*#cIUPx4' );
define( 'AUTH_SALT',        'Jm#G~kZZr5vTEma:)jQQGX)}CRXT7(6LUt}!f~BoVf +}G%%U# i<BWO2.XEs;,<' );
define( 'SECURE_AUTH_SALT', 'PTu@,KE4CyYg%YUWzZI/$/YsGzQ.lV^7@KcZ3zS<V|U2rMPu-<Q-.noAo`jUj>H:' );
define( 'LOGGED_IN_SALT',   '~z6OJZI0f1`VFplD_Cpu1d^<W,]&1dH%=`XB/0z|e2yFSjTmF^RO$qNq`2{PB(cD' );
define( 'NONCE_SALT',       '+9F<Nr`JM+U.~_2;e&&;n/TF6@;<=/Pz4bw-7ZdH)8A?7%1(;9Rc$*RL^IJu)T;e' );

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
