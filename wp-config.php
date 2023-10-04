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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'koreanesia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'W-[|!Hp$|.3^mH%Q_6inu-TgjS?+6P2&MkW1r>.`ux,uFWe6#Y/{fNn?`6wH2!Jp' );
define( 'SECURE_AUTH_KEY',  '9AmQSdE{)eCwikhNM+Is?iN}5 -jlj28Y@8;p(=CU>FzJp3+/x}d2PZ-w0QnFVdA' );
define( 'LOGGED_IN_KEY',    '3[G[u!&Rjd]XG43vMc(25&Xd#ql9Oq] 4AfOY3$wDp*vR#5[V~0=m[$z;B*7%qG!' );
define( 'NONCE_KEY',        'SxT+m[<HciViAT^V#P,sL(f|GlQry7CfKXr}ga5PR#>dU F<EhX^w(r6EBf]eKVG' );
define( 'AUTH_SALT',        'C3hN>#!ptyusf2A<~.7}`DsO8$BjG&&42e1<`~n.Fv6O_97Tv3Y0L;Q-/4!TbIs#' );
define( 'SECURE_AUTH_SALT', '3Wi`z+.{v+3zxni$^R:+F1`*qSvaNi;{kb{gdiVo}=y?;+D+]sO5|7Od(Tai96:z' );
define( 'LOGGED_IN_SALT',   'Sc#??.zP&d1l8z}t1ULCg5K:&UU1bm)K}Hs9Wjv,d7Zh4l!|[QSV|I}Gi#p8Its=' );
define( 'NONCE_SALT',       'h`rLP&x_[w-j+bJ0M/Un2>5/-t}~$b1`y5n6thRT$y.Utx St5^pP$pgz!UU$6t9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
