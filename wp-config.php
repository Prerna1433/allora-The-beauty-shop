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
define( 'DB_NAME', 'prerna2' );

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
define( 'AUTH_KEY',         'LAX]Xd7dItzsID;Wba>8EX sEuq%u|eckk:xhq>y}KoS,DL#R<il4a 5A8&!E4!}' );
define( 'SECURE_AUTH_KEY',  'f<(aL|99lNQOW[5cN`oz6*!q^4&Po/#[V&*]Q]8s_r7mD^L8;cPbSZg^H+!O%-A,' );
define( 'LOGGED_IN_KEY',    'j?ZoqA|4K]?)=&QPfdF,%<$,Mgqr[{p7RWXLs]]9]G<>j4<{#k<dC(;K_4F>I&f)' );
define( 'NONCE_KEY',        '*!~?*4#J4mG<_Sf]OHr4=HTk[neBSF_64l~9[5 n=#S_JS:Ya.eamD)vEsC-wRxi' );
define( 'AUTH_SALT',        'wrKyPnF8xv@7L  h/_Mvc(>M=8MkOymsm58EDv6LdSy94HLO6RnAHUK-XV692pha' );
define( 'SECURE_AUTH_SALT', '3x7W:S|`|dhZZTuf;G9G|c`hM;`tv`F8=PBtJ#sw3V9z5AiC7[.pL&!c3+H$,zEU' );
define( 'LOGGED_IN_SALT',   'f7<D &}RfX-5AaF^}h Iu9Ex&B>wlEz [,GMH.anD(<76XSID,_>7P33]y/2dWT&' );
define( 'NONCE_SALT',       'P5Y06?K4MTwHAO4p:_yW[PEAP6|rSYOoqYU4-wNgW:i:BHmwjn[HJ4H<Z&<4aw#2' );

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
