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
define( 'DB_NAME', 'a0455964_app_wordpress_0' );

/** MySQL database username */
define( 'DB_USER', 'a0455964_app_wordpress_0' );

/** MySQL database password */
define( 'DB_PASSWORD', 'y3zjs1U1yE' );

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
define( 'AUTH_KEY',         'uAy4 }Q[3^9mnxIDp=&@>adjh~M33>75?t+b4N~G!W5u{Js<sfRSJBxnTV|oeF(P' );
define( 'SECURE_AUTH_KEY',  '?q`~rV)Z}<[^e=AT*ftYm#HL9#Q-DZ40c=rw,XF&5z#ArTXt$}%.tsXME]h>K6&<' );
define( 'LOGGED_IN_KEY',    '1A^})p<z|,L/L&~:l,ugjUzIXBDe]e*0o%hG]Rek!L(A_y.&HRk5=S$#TH%|E41p' );
define( 'NONCE_KEY',        'LvgCAF(>1uFIZt#fYli<y?aH[QJG%TUW#~L^iTCr:zqra<X9+B,xzh{CGTBZX;D^' );
define( 'AUTH_SALT',        't|gyh]+q<3vLQ?N/5mE>Hk!`9Vnw}Eeb4 #W1.Sf:tz;7]1*Us9$!Q%+gDUgoC`X' );
define( 'SECURE_AUTH_SALT', 'lqpD>&&tnba]c=FaZ9CiBOk>!5hTSU{yX$v&D7R*0DQr-}|~NZ956>U.A]c/5n=9' );
define( 'LOGGED_IN_SALT',   'J6:N3Wpc}azxJoR~YScK^ *&z3;x0S;YOi=ihZzO<dg[YFU=a{CkoVpP%.DV@Gip' );
define( 'NONCE_SALT',       '7C?>Z,>P]0cIBVjO+t<dGK}y5rzWuF`hkGY<g!C?3=!=D7VNg=T7%&,d5WxH<Vw{' );

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
