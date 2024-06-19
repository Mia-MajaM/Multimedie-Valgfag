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
define( 'DB_NAME', 'sejr&davidsen' );

/** Database username */
define( 'DB_USER', 'S&DAdmin' );

/** Database password */
define( 'DB_PASSWORD', '6S5Od)6O3X8aKLW0' );

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
define( 'AUTH_KEY',         'Nn_Fv`ftE}uIYzQWLk_B[Tmj@Br)=72r%*bv@Bxvyv4sNKgfkW2:Bi*ar@$Q+&;D' );
define( 'SECURE_AUTH_KEY',  'CPpwWV$=8BUK[W(RMr?pG1 iQX|WJf4H8vkn?h=pZ6,yh]gNQW^FnjnOY*mv^lya' );
define( 'LOGGED_IN_KEY',    '-@:RofNDP>LuyHh~`3kBq`tLN1angNgZvEG~_mSZY)Umu768ed54E%Ld^,M$b3#>' );
define( 'NONCE_KEY',        'H2`C95>@9G_gsUQjH0*tC+t,*Ub-r32i)-EH1_,e/5VCl{Ez7%L.EZ8~BP~@LeqS' );
define( 'AUTH_SALT',        'T5?R!xW]umw<?@:AS>wrjS!R8G{JATrRYsM ; gX7MFqtBBM@Hg9+Iy4mFZz+^My' );
define( 'SECURE_AUTH_SALT', 'xBFPm}LknM$M{$)H/FA,20O=A4aD$y/Hbd;kcdu +{p_vYU64T2}n/}][*]K6]uc' );
define( 'LOGGED_IN_SALT',   '3hkFF&H AP3CArW`pUuG|iX_p,8JkoEI+G)y]bkAqAO1VZG>;*&h7yHO(4r2!C?9' );
define( 'NONCE_SALT',       'wcHV&Q-{<c&Ga![c6y<x+<Z!-> n5pneQ__{O$|q&#Sp{h@U< -#2~|?<OmZ:0Wt' );

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
