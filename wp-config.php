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
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Reverse5' );

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
define( 'AUTH_KEY',         'tJN&$_(zLmc/1aN9`7Oo#LPvM%8%hnLsIIlR*i?T-CeB@@Ga]1G b05Rep;vSN~T' );
define( 'SECURE_AUTH_KEY',  '4S6+M-1Hb2o(W}jO?zrOO@E(IH}N*PJ4 #Y!rJ.B^yW&!%ex~2h.*Xn=eHUAeF9r' );
define( 'LOGGED_IN_KEY',    'rM7cV7Tbyx]oh/^qr,6s-;IhL&>r-xKDgj(k~IxO_L9_*M$I-B0|qNvBEE/l0ux(' );
define( 'NONCE_KEY',        'bwJ _6I|bjup2Mua:R4WS7=c*:I8JKo13]h|M}3v<Z:J4BF|45SI.`S+gcJ7^Fa3' );
define( 'AUTH_SALT',        'uD0XHzL65c}qkx=9I.8_nZa)P U )Ux.VQF]MMR6Ws=EI?uK7;G)YpykzI/YMO;[' );
define( 'SECURE_AUTH_SALT', 'k:6W:)|]! DXVZUwVXWQQsRh95nG2v/n{]4:<z4jr|,yW)ExLHAeuW|uNW+rph~s' );
define( 'LOGGED_IN_SALT',   '$cNI4nG1lsXgIpDR1g%~*NkB0Y CRbJ-P1[I?0d2,ZHt*jKQ!RhUk-Owqc7Dxs-:' );
define( 'NONCE_SALT',       'Vvm|%sreJ]oe!v%}72w0g0Yb)o6KS#t@VA3,7kcn%&]`#CdoU%vWQK9Mi.LCu)uE' );

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
