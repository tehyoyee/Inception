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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>47Ii>A5:dClX:^/VK#7FDQ+kp^V*E8^ $i3{^(h)Uo~)f1uk3O@O93ynDkj42%u');
define('SECURE_AUTH_KEY',  'of=k2B=]78!ntMSDkkQ$FMo1+r@6YE&vUq@)1Mg98G,Y>8gG%b@Y4X.wJsbXl&E<');
define('LOGGED_IN_KEY',    'kF{xZ5-hl;;/EO!fCdpoJ>c^yqI|a{vYxcV=d|zd|tZQpr;h-/*5h+4UR|_y7dPe');
define('NONCE_KEY',        'KP=BDLoh!*7+O[60BO}f&~{|R|d(.j>#X-MT}lVXy-CuVmTT~[9kdv-?Nk1@ 0n3');
define('AUTH_SALT',        'c(R(5Ilz5BGxl^ZuS..(S~(Og pdh,appbNntrEKV<dzQnOL{O1xL-F[2c|R0&|d');
define('SECURE_AUTH_SALT', 'X%=761fou(:0y.RU+RN2`m3z<Pz~Ccqw-rH:n0f7ZdVr7joJ(=$I|i<1]g7#$GBJ');
define('LOGGED_IN_SALT',   '> ws0sdiRQ>rJ:}u^q%@5FnmBwb%7Ne]{BtU56YL+q$SjjcBl.JV.uNU=`Q$qy!j');
define('NONCE_SALT',       '} 9N9IA-Z}_73Xr6V+5arn*X@Wt EX9UHbTo#]!/7)%sjR8oo(<kXYI]5dYeHKxa');

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
