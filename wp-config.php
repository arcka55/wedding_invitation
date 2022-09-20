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
define( 'DB_NAME', 'wedding_invitation_db' );

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
define( 'AUTH_KEY',         '59g0(eAyq#A#k94,Q_ob_v<v5i )EqA1t,@PT2n+Kc?[4uz#Whd/0v4M>!124~,D' );
define( 'SECURE_AUTH_KEY',  'sP%fuZXP1g=C?Iy38;<jirw.K!v,LGVpS4_W.W5g VVZ,E=>!smGxF(pOZ[SV/Q6' );
define( 'LOGGED_IN_KEY',    'MJgYci$=|t6<]_9HkM}J81_bdh.]`kK;%j*,HV=0@0Mi^xF6}c?./i#zLpQgtS`X' );
define( 'NONCE_KEY',        'SzK)X<N2aq-Sda* +|P.{vN:# 0m`%u`z3y%6T.G!t/WOhc.j7T>@BIqcj>a4+-S' );
define( 'AUTH_SALT',        'fw8Wtqm#i#nNBmW8HMA..W-;tr&AB3v{b3il7INBpU`%R&{3m,= spE0$.6iISO#' );
define( 'SECURE_AUTH_SALT', 'ec+CGrN)%!0o7t%iWjK?35At9Cpdzj2l*>>W^g;6tT-M.:++e)jUxBY[~{su326E' );
define( 'LOGGED_IN_SALT',   'lb`ew/ck;nNtF<y{ckf5Jx81%)sk![Rt/R+N&KaU9nc#hx.8r2+=GunPER3v!oS3' );
define( 'NONCE_SALT',       'm]UO]_Z|N]tPsRoua *tfS$6==L*dOOVo;|hI#jH3RHaa0%,v<*uHBen+1 LA#n>' );

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
