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
define( 'DB_NAME', 'h_paulson' );

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
define( 'AUTH_KEY',         '*NifA?YL`/}s#YLsX{>}3{+ie@@6/vKdj!~MRiI}QX8YT>nf5C[[Bgjy|~jpL7+J' );
define( 'SECURE_AUTH_KEY',  ' /o8T wI<T&A%*/AT<rOYV!*wO{A:3){5+;.0$Q#plM+X:~LAE8,5lW5K>eB^NY5' );
define( 'LOGGED_IN_KEY',    'H {Mb-oT!1:A?|G)k34q6RZ?-}!%r7xO`:ud7oFNQNEDqA{L7-jf{qUwMDp/lPoY' );
define( 'NONCE_KEY',        '[~Ej6HUGInYc ROj6Y29cRTle-X <pO^G{$WIeV`h@/ L`wQ6B^oR&xS6^oJ1wT!' );
define( 'AUTH_SALT',        '5W#hmTQD6YeQN632CdTqG15XN@V&Lvv9/b`J7uwdz/LjL+jT|Qh&+SU#D^jIs&{f' );
define( 'SECURE_AUTH_SALT', 'aU(c-WSi&Z7n>4*G_]S4SBvSC[?9S8m*/X1b~$  wJ|z~7pCPE#L{/!0j/{%i)&Y' );
define( 'LOGGED_IN_SALT',   '$_o0))9/].{UIN*l}-o~ZD@d=.lf6PvU<HvCeEAwn^wfsM3Cg?(#D&6F5Bs`44*W' );
define( 'NONCE_SALT',       '06h5sKES}~8|JrMbP_rTa[5!a5kg&F>J$$kv^UNSy,|NgZOri!)hOH1^ig%$s4Sf' );

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
