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
define( 'DB_NAME', 'wordpressDB' );

/** MySQL database username */
define( 'DB_USER', 'taehykim' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tae1234' );

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
define('AUTH_KEY',         'i4&7<Gt{G3b*3g,_+!S>7Md,-)DkEltv:k`=K*Z(n8C<[}yalWClvP/xN74b)P#j');
define('SECURE_AUTH_KEY',  '(Mm?Ii-*XDnU=t;%?)C>8)8.,-VF=Q$XKo=]/6#w@F%kvTda}l>:m5CwpEyEM Y.');
define('LOGGED_IN_KEY',    'Ou>i;SnW`Z:P.oYrDFS5$PACW;OK!Hx%m^><;I~0aBb_hm#Ei1M/QS@C.O]o(AL]');
define('NONCE_KEY',        'd$0T,ZS{M*lRI&8s}r$[~26oU`4PU*AGD};%m~UCr:P20eJtXCH1oA%cD)Osl9z+');
define('AUTH_SALT',        'CVJtT`ek}+SnGRT/|T1#MTtCvt:OTIg4N)zW@|^l-Php@hM:6=,I3m1ZxId]Q:t}');
define('SECURE_AUTH_SALT', ':!+pyo?cP|}e.hb&r5`v;-SyB+ eovDD5{F>!1Y}uAunEB+kHg2[xQj3S?f*DapA');
define('LOGGED_IN_SALT',   '30gM%x];-WflG|bZ&|vizD|t ew+SI;,hX2e9<yLQSlOh`Pz~.=<V/nXb`+PPer2');
define('NONCE_SALT',       'ON:GSmUZ5`erP7XR$w~=%+)n}$V(v@.7pj1d`{F8`hYure;~|$y=yAW;+pYHv{>=');   


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
