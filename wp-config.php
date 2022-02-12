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
define( 'DB_NAME', 'product' );

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
define( 'AUTH_KEY',         'd5)?+4*v,t8{++AGl=e$ecPMS5SxC2c?/e/qo]arJL%~ h]ekj,p)#RKbH>gJT/3' );
define( 'SECURE_AUTH_KEY',  '|,k~&8vnT(13%yen< ;39/O7y I(_{Cd5Qr{SWy1wxvv/[z(vBm Gi:y@X AR;m#' );
define( 'LOGGED_IN_KEY',    'f=CXqoE/9_D(aKA+Mvr}n# 7eP0(0N<5s0}(0w@h#lftB54y9cphMj~zQxT!-h1)' );
define( 'NONCE_KEY',        ')p3qWwrO~hs$c+7})Dz{?}c.z9W6}+e)w,3xdJb^Ua,F^Q99D>#9zzAiSu<wv%;H' );
define( 'AUTH_SALT',        '6sd%,_a>?+6Zr`kU6QS[E,qO9{}Xezv#lJ+B0&mIbEAYl|kH#O<H3)JZgI5EYw^d' );
define( 'SECURE_AUTH_SALT', 'Qw|3ks&U0_tOG34l&@<Y5)Uvr4{UU}$k1EGbp=g]j;pT&PybkbiR~#~%6D^(m9UD' );
define( 'LOGGED_IN_SALT',   'NyKK]r=1a D`;}k$`Alo m&?e=Y&D8,HHP*o@~L^i(!aA^P(Cy.^rBrVc]%&XW,k' );
define( 'NONCE_SALT',       'J^quJLGPZ)Ect9tB5p$;Vr2=1g}gzdA!_+n[?GzRd71sZLQw.~5.lUgaep~^1)Jx' );

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
