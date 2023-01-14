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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Fa&;B$R3|61*P:I8JZ%;(T,i# ) =IN`l,y/=JJ&?yt;H5((zp7?}fuRvmY5=a<A' );
define( 'SECURE_AUTH_KEY',  'Du_:N1(df~&qUce`[~&ZX34U/<S-C9*$_{|2 >e}[=nQ5|k6hwGfqhZU6[oc2&&$' );
define( 'LOGGED_IN_KEY',    'I7RXAG<-oH15H8pHJb_=79&l+s:+?.fd+Y5i+C`xPJic(b_;gdI$Y[G7MYD!x`}z' );
define( 'NONCE_KEY',        '`{&3jU5S09Z;N&U%;>VH>f+LS=2iBX<qZ#5aCgaC=tM#aUw#8O*9MJ84]C8B}8jb' );
define( 'AUTH_SALT',        'j32ihBo/jU.)lzYe*]F&w~eNnUn{7ZmKG)K4v!T))UQ]wAWn7u]1|x0xBV{j1%z4' );
define( 'SECURE_AUTH_SALT', '61}<TC}sF]gT?=MbG@ @QzZd~e[M$^g6x3?=5T{sxRJ`/:^[*%#u0=1!nDwrQ#LB' );
define( 'LOGGED_IN_SALT',   'CqMIp(8Bd:kx!@{]g$$TZLR^6DY@Z!5jC^VW+]Sb(fy,(Oq?c[s&]/h%G{!_~TuP' );
define( 'NONCE_SALT',       'Z%(K9TMFt?p|7&;c*G0wuvTqpDKRz#p|yTgTqs/<Q6,m<5G]l&z2Vk:Z~p&Zt#`6' );

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
