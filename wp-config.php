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
define( 'DB_NAME', 'globaltronics_creatives' );

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
define( 'AUTH_KEY',         'j{uX!V>-|,-Q<BHBVLq?EemUjZ=uFZy+KZ4(5]:Vg,^hjF_fzfEv!SNXL8+*O*:T' );
define( 'SECURE_AUTH_KEY',  'r=HPe`%hvAN31ItWydF1`KE)UYSEgS2;Lg$y8pHHDoU:cjWF}=~Ago=7CL/q;D9-' );
define( 'LOGGED_IN_KEY',    '5R?RMaUha.?bRQYx8;22Bb+p=Hob;~6^-Jp1*$+Tkqk_8ZBVz2EX8|69M6`<cWzB' );
define( 'NONCE_KEY',        'z)hs1mvgtK=O30,,{=E4v29#*[J/1hU13q!5^Y:D;VfS^1nuSV|Pl%b6K%{u7#Ks' );
define( 'AUTH_SALT',        '2|$uKodCZ{:3O:mQ2;B|. _6b]-v<weaX2Y4*u:~@~`G[w=ZO6?2&<*J7TS?YR:d' );
define( 'SECURE_AUTH_SALT', '.d?{]nGQELv-+A&B74L{ZqNk7Nhq<&;]gbFDX:FLm#ozN=b%@f(<,t+_c8YXa3]%' );
define( 'LOGGED_IN_SALT',   'm?,&^90[3F&}E)sn%/(}$.{o;Y}kU^j8ImA^XW]ONzO;y&@lmgu/Ou3Lz 1hC}97' );
define( 'NONCE_SALT',       '._]%>`8I c67rBhX_[MyB;Z^&C/h&pE5i1[_RnUIJ*4l#~364#cU`G??+,)vro6_' );

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
