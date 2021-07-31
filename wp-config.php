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
define( 'DB_NAME', 'wp_ongmapfood' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'oi+WEc][,9cmc]K LRo-w_t]?V{chR~,sLLx5LMxsyq(Tk=3Q`5M!&/iFBNptFnD' );
define( 'SECURE_AUTH_KEY',  '2 .l_0s*pe[#O{F$W4>Fj[$.lEJ0EYm3+,CU^=$Gj%F).=Ma]0>w$9Cf=C4]95sh' );
define( 'LOGGED_IN_KEY',    '38g[x}KW`]LpqVex*~xc;W|}0ebHP@V|r{X6YI:2AWdtBBqCogId(QBT.fpy=K<P' );
define( 'NONCE_KEY',        'AQsHv*aZ1EJB1.J<3CI=+bjB+Tm@cZVe[3rl5?K|o_1lFQ7k}ntV)?|]h;?hr[@+' );
define( 'AUTH_SALT',        'KsO{Ne, a6u1Yq[;C2q|a~;l_> &V}LJTp} `]y>;k12VBQQc?stK*)G r1~eMFI' );
define( 'SECURE_AUTH_SALT', 'CZ!g3rIKDTf:>9 tP|HkXrPgAF7lw|<y>!IJ)h%~1e3NU|9%-;*2r7_LvW!KH3f+' );
define( 'LOGGED_IN_SALT',   '-2`sK({~HnAS0:wP.qbY*(KA,*-BK.^Bd!i7@F+ExH}>a>sm2G:@FU9--xR~*+:5' );
define( 'NONCE_SALT',       'lpYQYti}ftL5MmBgL4_!o` aj[Ym1|S`Y3oA*}67~gY%(<;!zLGz `)%itZ:soxk' );

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
