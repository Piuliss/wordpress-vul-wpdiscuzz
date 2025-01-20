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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress_password' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '>C9WM+gb5o}X16V@yI-Yi+fj[&yGm=r!g!>3Fizo,7U.+o<wA;..(7y0!k`6RjIP' );
define( 'SECURE_AUTH_KEY',  '_L_+L`rPV0M`VYNX-C$[s2>~bX&lL(^Rey#+!,3&to&Ghg-H%RNl$j3uk*Hv`3mx' );
define( 'LOGGED_IN_KEY',    'aU5^kinx4I~75|ZJ4cVgooxV HW4+mFf61Djl_@$`(7B{X:KSC~b7rd2vMhCNa(z' );
define( 'NONCE_KEY',        'pO?zhNcs|VK<`wV,y2/`AdM@QBVByts$x|PPjCjk|l^nK/Gk-J:[=KA0N:LZ9I_<' );
define( 'AUTH_SALT',        '(YdL,dt9GinFPeck^(rGzUSRqRQ.YhSFH>skN;@YzQzLygd*%/dSlWWEY==F0oH!' );
define( 'SECURE_AUTH_SALT', 'goaI;;dT}X&<y.Iu|ajO5V;J&}lDAW.@&}Bl(i-Bv-e=Y:T>J[VLV}13yq1:f8L^' );
define( 'LOGGED_IN_SALT',   'J<V:m1H|.2RY@YX $h+7L&=?V[f:I0Jhj>xSuVS)*I~rO*(Do^o8V4pR0UKKb1l@' );
define( 'NONCE_SALT',       'tu,d_?1ID~Qyc@f!M}^|sOMsKPkvt,Rpp*W?lN-Qb)MlgR ,-*QVptO!2;V&G$#[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp572_';

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
