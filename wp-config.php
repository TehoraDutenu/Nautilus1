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
define( 'DB_NAME', 'nautilus' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          '7fg(0+o hFTc2Fv~/kAAd[[]N^~Y4h+F,}Hr*2:{I T,XrICF%[Udw1pX@ixB,L!' );
define( 'SECURE_AUTH_KEY',   '4`elrJ7TW 6OPQ%rBbKMuM{<Ix.oPurp f<Z_Z[%OG|t0UAH8*-9]FbFiVE6X;AV' );
define( 'LOGGED_IN_KEY',     ';cv/gyRsbiVsjy#~lFP7RwTDkc>U[[[1,rG.lC0wrbv>abR&MiUgdghh3t~d}xIe' );
define( 'NONCE_KEY',         'EH hm-;<iVs~ju9g!eu(FT7^G6%ntpbLRzW/v6V:DGsJ3=7qRy!5T<PS>/8%@UVd' );
define( 'AUTH_SALT',         '5uh&{Y*D!W>4;G<Dz1=S~#kVt:Sy@y}3?h}rn u:rV(D_cCY)>,hh;Vm1d;Sv&sF' );
define( 'SECURE_AUTH_SALT',  'f:9_cB~2Us+nNG5 1cF@>a?a%QWI*$x*anY{psN~(UZVRg/^,/ySyOffkV6A.wS@' );
define( 'LOGGED_IN_SALT',    'z|({Vc$FQ/Tmj)$G0}(8hI@Mkk[(/(|JI5rO8L[h@~#}L;06F{t/(x8bLWA%]F`v' );
define( 'NONCE_SALT',        '@6p>DN!6S9)QuZa~*V`NAAFqYGa<Q-xUXl}$9O,+]_,(OohF7xE 4GOm;v<-n7,e' );
define( 'WP_CACHE_KEY_SALT', '3l_t/xu]EaR%9*p/q,oKpfG^&(A}EF(aemZnL!wn^XdC^SOs1D?Pkh&aNoLM)J(g' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
