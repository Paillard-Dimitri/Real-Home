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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'real_home' );

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
define( 'AUTH_KEY',         '6W;GL^q@o!1YUwh$&j3o QF9`d2afCw*1[>P#HCuU22oSrC!6jiO.!gE}uD}cJ$~' );
define( 'SECURE_AUTH_KEY',  '6?Wf,>d3xQslGTL+K~FJ):S)a)4a``le%F{IWDHrWUvD5gzwTUL*k`qlM-</ ikF' );
define( 'LOGGED_IN_KEY',    '^Gx2F#Pt~m_>Nhu}#z?i~E4+l{cu9kPqMjpb)K5X(=4/%<^hqNkQDpDUX)H5+g0(' );
define( 'NONCE_KEY',        'Mb[jM%a;s6=c*|*)qwc*)h_]wFGl``o3*fpCY:^WUIn6#Ngxx}(an#x{A@hF3Q@z' );
define( 'AUTH_SALT',        'SowkSNWkF!>v.Pb8.,z(!Aiwi45IK:LBzrs,6Vp+?tLNHT{8&EnY}/H@-oZeh!h_' );
define( 'SECURE_AUTH_SALT', '~vrcc6s}s2l$7i,UTmHd(VrhT[mllIM)/c~6`UdqLY;=frWmC10F5$=]*+P[o#&P' );
define( 'LOGGED_IN_SALT',   '4;!f#>6ie/vgz0WLB~m3Wq`x(DI9zOKPgC|+$W-=@Re`y;3c7bH&L(vQZ?!?UEMf' );
define( 'NONCE_SALT',       '^dSz$:F}m_pR)QW`/+v?8k>|=uCs~9yrNv,fH7>>mJ$SRhD>:iH9Qcc@_)DwVz[T' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
