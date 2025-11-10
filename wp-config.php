<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'santiagopapeleria' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '512021aA' );

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
define( 'AUTH_KEY',         'uHV,THX^zI9kaNp<GD$-]RLS0Jyu8_yGXe#WKX_>+|#9E8YHV&eBesmNV=w|{A!m' );
define( 'SECURE_AUTH_KEY',  '8YV9a`IyJelMW~v?q+[H CAGjUy/g#dxTO-$F[=m4K8bJm mgtgP4>z,XaV`r]^I' );
define( 'LOGGED_IN_KEY',    'A(^-f`bSHhT%7^({D,&CrB{jr>pG+>3c#IpN|s<g2que+KG_b*py+aA5W4-6s;;@' );
define( 'NONCE_KEY',        'eq=Adz$ -+Ke:;fNQBwg4wsJyH0b`U>*7N0psy3^dv#6wC>fHOj.yI%J9K:&o?J^' );
define( 'AUTH_SALT',        '|4qXsiIi7>w|vJFXVJ)TG =?,+1;#&X(C;i0ij6fs!}LzE^Ct{s1F=~^hx532o&s' );
define( 'SECURE_AUTH_SALT', 'l|r})_6uYOJrXg==$o~2UTN)]nK$>XC(0MOk.=:0n.9+jE+OKr,}=[LR;ft8wEYj' );
define( 'LOGGED_IN_SALT',   '3c>2#Ji&S<}xYrL0L^.|unQ/lh2BYQ?D_>3m(4[P2@[UjkH_<+8a]6-pA1,NbC.[' );
define( 'NONCE_SALT',       '+)#`YV[4X k8D%NXIW1k{odO%%t$uk^g.Wu`X|)!jR>M)qV ,Hm/oC:HVnAyR /2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
