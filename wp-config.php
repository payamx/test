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
define( 'DB_USER', 'payam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`7uX.B(L5EHj~LyMesiF]n^k?,TqHIOnp<L(K~H)jf~?wltlDTG,4,LU+gxlc|[o' );
define( 'SECURE_AUTH_KEY',  'H`U2(oz(#4^nZYa;`>KxZd9*=QA/Rt=0]Nu N_|gA&h:lQ=,7e%l+KQ] ^9ZnRNW' );
define( 'LOGGED_IN_KEY',    '9D=oC($P?1pq6tw}Ud!a-z=.GFX6rWl/G>BL5 Q4$j),z/zN;bh*Wk?H/)n05+,[' );
define( 'NONCE_KEY',        'KYdd^$|wqN@ni/N Men(cKZh&kcg J=C*Vkx!qV)=089|.uK;mVC2:-5)<#(9krd' );
define( 'AUTH_SALT',        'M5IgKvHB=QSDJ(4h--_/3v#ya_H_e2tbC~ : 1~sJZ.oI^4k6bl73PIiQLO)-s/Y' );
define( 'SECURE_AUTH_SALT', 'Px08R_!N%H$n5krp^;ld3<gUW89A m1#2wqG$Pu,Uw|d%8B`XC_&V$/ll`MaRyN(' );
define( 'LOGGED_IN_SALT',   '+G4IHED=/iQh+S)b$x$!xklmec!?@a7;IsGq$uJT>y|$YM@:5XJi.De_~NQ;2zFJ' );
define( 'NONCE_SALT',       ';W?wr&p@%uAU%#m:.aY~.l+0B)+4x{AZ`x`-^kHXsob{f=^%9,edi^y0=^hn5Fqf' );

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
