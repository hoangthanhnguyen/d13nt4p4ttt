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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abc@1234' );

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
define( 'AUTH_KEY',         '~i+539E^CVGNtd(X?<:on[R{rDVA^uEn7NDh+ucEC/(01i5t.--B5T9^!P%B-wAa' );
define( 'SECURE_AUTH_KEY',  'gh-cU8<Gh6JdvES}g;:)dts^,Ju[h#HxTLpXAxqmeCWlclVVRQcwf&7LIz8?-V(R' );
define( 'LOGGED_IN_KEY',    'b6BgOrih5^N}h &$h2>U=p}w17+C4Ub>=}>VuOJpWf7-rI}C6|p0^.|zg@`7j3mG' );
define( 'NONCE_KEY',        '}h=3,<AEzU~$=Oy6 [n{8BxfcXMV%s=7bGn)0<2lBooQZ2MB-_Q?7!&:c)J.CVI]' );
define( 'AUTH_SALT',        'nuQ5&.E[9c,Ag?%{ySe*~tNSI+;!JeG@yxFRjr&;rZe&h#m}2&Kxi@TqR.xD-d-h' );
define( 'SECURE_AUTH_SALT', '!=|hJ|h{+r:Z=L083vJKB6&#?|6`Z1f]vWM8:L~+DrbP`2|y[a _s>NV<^T:Ts+I' );
define( 'LOGGED_IN_SALT',   ';DF(s>tE MiRzx=b(ew_^f]pr2<X4;8|4723BBn&jWTKDXJ>=|l1S[cWO5028+4]' );
define( 'NONCE_SALT',       '-wf6~Z=pMn+0VUQP-_1:1%9E0!MxX4;P&t?x5?!?7G{XQkTv<P]h3*K<+r%q6};I' );

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
