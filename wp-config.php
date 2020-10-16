<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mnyoka_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')t1P@?Mec}rKmO4Ky]c7RHZ<tvwBg}o-o,tT?g]?z*?gRSb((g/anw;mFR)Ij2WJ' );
define( 'SECURE_AUTH_KEY',  '6-ye=y~=03CUE3<3e8pxbMa=9M:{Ugf5)1X&0j%7(:]F$9Pts8~y/^7OH6K^>Si(' );
define( 'LOGGED_IN_KEY',    'mb&L?iH]Sg8r3M{Xx0i2VH7|K<cC13yr]TS[.Qv6x=U&Y-~9CrYNiy+0Gz|- ryd' );
define( 'NONCE_KEY',        'mw!wV_T0{%jOb7Nep}2bee<fokGUb}~05rWS^Vz#xEfgC@#I1$G+V8|y7fSwZ`{-' );
define( 'AUTH_SALT',        'qwtIz;+FDirS2$`zU9eb}RcscCg`zLavKG}|z}odb$=E4^2)c;)x=4H/coY`Pi|1' );
define( 'SECURE_AUTH_SALT', 'g+fA<I~%}86PXFPKh7unYL/*ynF1/ iouDpuP.c97%B2rD?#dj}B}&>jlcLG+bst' );
define( 'LOGGED_IN_SALT',   'xo_}II(N&jsAD&9DY-//ZAzmcH*a&*WA_:I[yV7UL HoJ,}I,9t(>#?Mnd@b,n,C' );
define( 'NONCE_SALT',       '#!P`O<^/>}XX`I]F[jtik-Zy|^AdAoA|5=Rba)^|C0kBx^a[OO%;:uyN4W5Vtj88' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
