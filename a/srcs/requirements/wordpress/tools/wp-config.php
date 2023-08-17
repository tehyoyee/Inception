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
// define( 'AUTH_KEY',         '):Uw9 :|7$m3yy=c^IM%d8}zG6yXY%25SDUyr.r#GcDP)[b25Yn$sDLNwR~I=kwq' );
// define( 'SECURE_AUTH_KEY',  'lBWxAzhu=StQ(s-[t_D8yH8_`0NiM~d[m q<{Hri]n#UM3J;@x[ne;,k<~cN`~%,' );
// define( 'LOGGED_IN_KEY',    ' /e+%ecWs`>hA<s`|+7rmujt>3MA}GD*n=D7W%$8h*Xc!jP?hn+fw0#;;g{Ywl@k' );
// define( 'NONCE_KEY',        ' -cX{xQc|GjD$=kXd,|lUX5)*oT)ru3^px-iU{q;`1If22EqIwA0/lPIIbpbtB=C' );
// define( 'AUTH_SALT',        'U9LX s1@q6$[*VV,MUhL7tS@;I9t_u*uDQIfZdG.ei1Amy$*.RI_TSTz#y=X.>Wq' );
// define( 'SECURE_AUTH_SALT', '0<MR&l4v=cZ)8Ke/#ip>2<Ed@ j<#pvLaOMc-jEFM9^tr`X*T2qDIB@)gg.0<e2V' );
// define( 'LOGGED_IN_SALT',   'xSHh4B]r[~)h%n$f(dCt;mD}#q gy$<{ >qGgPS>XH*]jH>W<!10>H<_16l{(OdP' );
// define( 'NONCE_SALT',       '7Ea$kvU|lkO8&X]b7^#K+w! lH2)SOelLiaYYX(Zz)Ebk_]-#m,J&aM<*JedFa| ' );
define('AUTH_KEY',         'feSN2J^=W7@H*~4cX|-D(69+$>Nx4f)]P$p]8u}E)5a@|~p|!(n,U7pwkQeXCiOV');
define('SECURE_AUTH_KEY',  'Wf>,n-%AAN1fk1[r#m1rP`26n;DZInrw/(;y[vNl|#~(Q/T[c5ckf.Q>rRiR=+VF');
define('LOGGED_IN_KEY',    'L/0CW(_mpRF~>px;}4/%)UH!>R-}5N+@sJat%FrA%(Mh^~n43N!I+aK8(C@17^Z^');
define('NONCE_KEY',        'kqyZ5AT0|``pIRhXZU6UB8Gy>0J/yZaKT^j8U-k1-|f>b}54|XY;ex?ANIXR.^QI');
define('AUTH_SALT',        '`nfs`kECm{YqN& :Pv/,KydF%b iNFrQ`~0=KM1{pW+>Nm]]g8>H{?|NUH+jes|x');
define('SECURE_AUTH_SALT', 'K]f?/z,Tn^[])s>c>jz4s%(d)V|8A[nZRY}GYnH=/u:+6-RPe[vb>IenOXE@8|-[');
define('LOGGED_IN_SALT',   'z+N?_QK&OaKV*z|<c,.(HR4-QNg+j;U&c&,+)xMgeg..pRnv4M(|-WM1!A||nWU/');
define('NONCE_SALT',       ' +H2$.*HTE47U9bl4&)tKw92-b[?f[y.hXGkrtaA*sYOi/do7-=i&,9b5Yi{w-]s');

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
