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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'example_app' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '@Csas1234' );

/** Database hostname */
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
define( 'AUTH_KEY',         '!Qlx%qBHt_xzSY5cyc>*|Vru(l^lo+M1]sFD+on$`{&Q}e2~/:/+Vj3bl_c 5J2}' );
define( 'SECURE_AUTH_KEY',  '|ZLnL6,^sTVI6/gKaw#{p&QW6$U8rN;n4+q pCP5F*}E{-B,w}]}HhzD2s|d^x-f' );
define( 'LOGGED_IN_KEY',    '&0p$?i?)#<qtwai*O!G%?{.g}[2{,vVgiPq;qIOU56HDb!q}t3_iHx9:2yK!I.sD' );
define( 'NONCE_KEY',        'eZXWT)-+T*)mPZ=d%d<}Z[r@e+W__:TwNUY4.0%>: ypviYjf_)fW2`V{NP&PJ<~' );
define( 'AUTH_SALT',        'rhGfDX2S6k6*/K.G>!K%7vi5z@G*D<.]9PW1k x9C+y_V5v{MQnkdd4,k#* P/$9' );
define( 'SECURE_AUTH_SALT', '}(9ha7]X:T+Q`?dkV$3{M>t+6~WPgzSJJnQ5T:_A?!Tqysw,x;yTh3%N%: @t]]~' );
define( 'LOGGED_IN_SALT',   'RF__-o[z[I5`&%FgjcjFg$j77_(YXc;r#$I`(8IOnGGXzm1#4@H-wfeJ<,EexY,]' );
define( 'NONCE_SALT',       'pGQc.y@#2D}S.Epr?@(1{<&H9S&2Tt*nzYq3_;!W($6U|u4:iZP1?(m.N$Gp+#2Z' );

define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);
$_SERVER['HTTPS']='on';

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
