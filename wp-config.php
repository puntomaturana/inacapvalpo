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
define( 'DB_NAME', 'inacapvalpo' );

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
define( 'AUTH_KEY',         'b9;<c.ld l]X$aGw_(fR>$2?2y^@5IYwn3FTadG-U|FXj- .}J^|v =nVK&Q7.Il' );
define( 'SECURE_AUTH_KEY',  '%E5J+up+&;6za:i`e`2nYYQbj!#W-vBpWJ@bbW`TJ<wz~(}5m/iG)2yMD E2xm{/' );
define( 'LOGGED_IN_KEY',    'OBzl}[}n,FS<l(#,6|XB,8hI4:2xC*8N{D!y;o**:b^=C)}Or*<z`8pNcx+q(P0j' );
define( 'NONCE_KEY',        '0_]kZwE++mvp3~s97ngtc^qa&G:Y@<c6F^f#0K V0 xu+sez,ks^0yF7TY5 S=ZD' );
define( 'AUTH_SALT',        '@ x!{SO5K.mb&Gp(DV:XBS&W9$PppXeq*SgD&LH9E$9+7V[O;kb9F#E|Z!7C#BXe' );
define( 'SECURE_AUTH_SALT', 'oJTf^s~=~[(]428q]p53(Ub^m($4?Uv?Q-&=lBFLrG)cg-9^a(#poI1]_j8/M!~L' );
define( 'LOGGED_IN_SALT',   'e47d=&~/B$C<)(%C1nBi 1/=-WS3yobr`8dBmIe9*WYMJT)S}>g,0(^4iRj6&?3)' );
define( 'NONCE_SALT',       'I{/-G?TT12!pAmMMVK7ya)CHEc+io5s815KSu4D+bjmC];l/Npxcq)q}8Y7<Vdyt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fgtu_';

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

define( 'FS_METHOD', 'direct' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
