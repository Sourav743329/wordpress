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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'aJf-a}lz&Vr,WWfswstybFfF&:5W`;u_3$vFZd/:{m`V|a.k?hYGw%$~cc<xCaON' );
define( 'SECURE_AUTH_KEY',  'Wg582A1ZZmwZu/kE]Y:A9Hn8N}X%{ttGP }l<0}eMob>.{,~<{s&`&6TkG1tpQf@' );
define( 'LOGGED_IN_KEY',    'puaYVAw;I39]Ps)HU(VQ3^wz*N_%~/r<$[-,N5Agr9d})NtwW)0ZEA5uj{lGHw29' );
define( 'NONCE_KEY',        '_P19$?(Hez(:q4V~,`!j~.brifkz*mEHC(V(bR0&jj}Hs9<o1?;J$V&i0%=UlwuB' );
define( 'AUTH_SALT',        'u}VY,eu&xbfT~dyJ|V:{=.KgpL{>w]o9^8jL5vfmJ,gdB#@ !}w 83cl;[l`.v(#' );
define( 'SECURE_AUTH_SALT', 'C*Q^=[(/a[AWH>v,{Xif^Mm8]QIUtUf`O[Xo:q1nJ)&(J5`2PHbx4VAsL:*4Vt42' );
define( 'LOGGED_IN_SALT',   ' L*Y}q5^SgN=O&TxZn0@4]_[jP|.0//^Z*Hl;xKR34K)1Y(J@jeXb(o.pnGD f5K' );
define( 'NONCE_SALT',       'F}>kOg&OagD2vQN6Dw~o_OS:]spA(xm9W|: *kYV*.BD|T54t~)3.V!^&``rXFKz' );

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

