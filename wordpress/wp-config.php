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
define( 'DB_NAME', 'j.iheb' );

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
define( 'AUTH_KEY',         'DYFO07(rthep?:;h6`KP^U9VcPvAAr&c @6KyY+E]<B7WAqsF2IV5C*`=eD`PQRn' );
define( 'SECURE_AUTH_KEY',  ';<YolHyp[<30&XG2&SMh y=]+e<|vf2A28dJ<QnOc]31HG@VLt@vuh5sQKK:np8Y' );
define( 'LOGGED_IN_KEY',    'gIZn,.wkqsN=SHo~iCMo>+HadH;Zpi}%eEO}VgR@5i{q,RPR[os].4nh>]5P>inV' );
define( 'NONCE_KEY',        'h8Su:y0|N2m<bJe1e2]vE)mL*?[V0xng[!!++;[ZIBqVX))%7pt6g~gU$}T!JX8~' );
define( 'AUTH_SALT',        'M]|ySXaWDgtJ<Y22_bXs7;KApK,19HscbNV38IjbkYcH5o!qVuT$dDF<&s7]GUMb' );
define( 'SECURE_AUTH_SALT', '4m0}`PyDdS2w,:i$nZ^}<U}7I@z%ONEdOs)Zlaqo;zaz-391i-qS2D{GjMlr 54>' );
define( 'LOGGED_IN_SALT',   'Wj{nu<v:VvS.Fh$$?6Tc/!/QzoW5^V5y~21!}B4 %h&Lv}{TxRWLD?{(7_G.):V7' );
define( 'NONCE_SALT',       'F_O[`zTX_BQf :Lh&tnL2zq+>tu+r5&_kk}tQj%1[]%O9MZI@i)UhH!. kQ1Se#]' );

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
