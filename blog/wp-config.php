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
define( 'DB_NAME', 'db-iheb-web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'S#=^>,3h^0DY53q|mq~vI([:_.F{.@BUwoIK) jr*WALL-qWdvRW;I#;[RkLAfTl' );
define( 'SECURE_AUTH_KEY',  ' 4FimAEpp#=Dg1!*#lmsv6H#FqS}m?^5Uc>Z/97lPI^Xo}2Yy3~#X>)Dy^-[S@8}' );
define( 'LOGGED_IN_KEY',    'r|rc3pl$cToWU,r?Y)o.YwOnAe;$)I^B:_ @/yu4fD-d}gTpbJa[4z}tK5-H#v5%' );
define( 'NONCE_KEY',        'C:OGz,Rv/xlS7#5Cx,QIX@,76:ljxtb8-{F2c!G.&clwCCwHI#F/PP^` $2{*Ck[' );
define( 'AUTH_SALT',        'c7kRL)P]BLY*Y,-[jfJ/g&,RbVEAPH,fa-Fs7e1x*jFf~Zihc8aw1nypc$in&U2Q' );
define( 'SECURE_AUTH_SALT', 'XKFJi1cOsV^ysf6!qu=+VPJ]b$*5VsS/ILShV-5m1$=V@hY/(I2O+ Fz6#u0;hUH' );
define( 'LOGGED_IN_SALT',   'JF;EHx:qxd@d.IH&(07oz3h 7f1dXD5Ncb/X# itfxnj3_raQPFV<e/=(Rm[a>:T' );
define( 'NONCE_SALT',       'd-Q[Bi 7m&MAK}qfS.jKONr*TOHJU.1_.5I2Di2U`B.D3zA9tv^:MXOOKPD,elj0' );

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
