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
define( 'DB_NAME', 'wp_bbcap22_5' );

/** MySQL database username */
define( 'DB_USER', 'bbcap22_5' );

/** MySQL database password */
define( 'DB_PASSWORD', '2B0yNrQ0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'F)aAWT-3?/gnhSJJO/`[Q<c7[{2Vfr-tj(-w<p^Gh6;Q31fNIaT/:*V=&G6>6W(r' );
define( 'SECURE_AUTH_KEY',   ' +hM66bS%1`l2~BL,j)c62aN,L)}z]&83@?)M#AobxmfL>:pqwB.50emESkI*80Z' );
define( 'LOGGED_IN_KEY',     'l4x4dmisPhPw3j&k #Y3DGzsL`Tn@:UF%^}Q96krB DmTw62@*#>~/K$#cfx1>;@' );
define( 'NONCE_KEY',         ':DI:nh2jX5O#heHB&zvI j)E:=!=$bd*((]_NAaO5v<VzV`50&hCjo%#|]<tZ7Q!' );
define( 'AUTH_SALT',         's:MW[FwUp5.Clr/R,eZdoS8M0}&l;1$eQZXkxr$rOrgc=CVx#s8WVAN?;KTl2rk%' );
define( 'SECURE_AUTH_SALT',  'l]mjLJSWyhagEh9Yc|rB6#0hHZvAV0g*y&{]q#Q`._I9XoX*2Wq~pDWy`}(H(o+0' );
define( 'LOGGED_IN_SALT',    '@$d#9&Dm_R*O{.9=5h/y^}^chOHQZ(RCQD2_-~,053gLc,-Snb# n W!bv(s_:8(' );
define( 'NONCE_SALT',        '~`97(St;Me(XbA]x 7+E8K#kH(a>U16AW`k+)$e1)VhQPaW/Sr+g4,~,V%^ [!`+' );
define( 'WP_CACHE_KEY_SALT', 'nB[`4bXK#@odqXY#^R:(sW+9^J9*IM)z_3/Y[(Q$k)i.adRkQh Dzm1d?)fWgM&f' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
