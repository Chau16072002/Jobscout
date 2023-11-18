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
define( 'DB_NAME', 'wordpress_v641' );

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
define( 'AUTH_KEY',         'ISniwhyLm9F*XaW(VE6R>sY >:wwc$Pbv_+35/uubjJ}G1%OEXE^ BDM9v@Of!)6' );
define( 'SECURE_AUTH_KEY',  's1-^BS;mCZ^V<]WRtZc<jY/sAg96xc)=@Dk;jl<kr<XKS7x9Fu5QVa=ER0&;A.VJ' );
define( 'LOGGED_IN_KEY',    'Cmig43r*Clkl|7Es[|$6wcGfG}]l^(x4;B~N!*lX5}LW-#qc4xO=Fe&0lkKYOe [' );
define( 'NONCE_KEY',        'wR(JoZAu`]06x]o(}[i<;&BzDe4pEd Ts#q~[8N9(+H40|cY|{I{1uNxL&]hJae%' );
define( 'AUTH_SALT',        '*._:FE*]-UJwy:c/lae&%/(JZbSU#.Id+mwjOIqa|Ep|0Vq9lq8u* )EG~#7Y4si' );
define( 'SECURE_AUTH_SALT', ']Z+O%GtWI`2? 9NnJ~ fSj(Wj_V]u-d-WOY7*%zQa>(j; -R:i*DZ//|0([:&&SP' );
define( 'LOGGED_IN_SALT',   '&rk<YV`[v#0;Pd}jhuuayQY5QHi^1{PgLBq^U/RYeiP4#IRpt%x5,m7rPSIXwR:k' );
define( 'NONCE_SALT',       'u`zA/ryNw}7AWOgmJXbve=D?K{dxWL$;nas)>4i3V43D!r&Oq=Kr--@<WEgh)M4(' );

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
