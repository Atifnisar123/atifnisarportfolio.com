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
define( 'DB_NAME', 'my portfolio' );

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
define( 'AUTH_KEY',         'Q`ng3U&=4h}J;(v>TB3AhK]>A:6oNG0![p`!X}z.]%@VBu>-[PcWYqL;I+c~CSa_' );
define( 'SECURE_AUTH_KEY',  'megvZrAWmMl{Ubj`@vCcAK4#9%lI(?eRbLe)I{mYWbhj<K1dp6X}pn*Fj%ey uH]' );
define( 'LOGGED_IN_KEY',    '3bB$ZN@6o/=l?{wNh;0M}[T>M -%$v2{`B4tzo(p{r%hgca.{>Apo@Id#!}E%9c+' );
define( 'NONCE_KEY',        ';,q+FDV#6=VJuc_A.o%{G_4YAq-dZhLLM4Qd#21U?T#%%TOGeV0<;[SGKOub@&@m' );
define( 'AUTH_SALT',        'snUd] HsQ,|$!9OywIgxqBZ&.;u~Zvl2z2HI:ivOdA(t]Bk[1vYiT.ySFtz1`_wx' );
define( 'SECURE_AUTH_SALT', '<dOS&na(93r,{XQ [$1+9Qkft+>tj*mEZ0|8{FD]:D-/P-ak|.w=-n|m,g*wQ*kC' );
define( 'LOGGED_IN_SALT',   'i0=Xg%-iS,7f {gg$~*MHQUDL3I3?Ca;C&cK%(#v)|S~PGP.Y9KPo^Ur#K,2t=08' );
define( 'NONCE_SALT',       'UgNIpvs[E}uiwq}_ub/*B,Eg|r[aYNV6&8Xs-`}l9a&>.#Yp%+xJ =R]BDrBynad' );

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
