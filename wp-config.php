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
define( 'DB_NAME', 'rrblog1' );

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
define( 'AUTH_KEY',         'hgWEeKKKZK.>+].L?}CeR=5{1[Qz;p;n(3*cl0<)o;;=Yx n}~|*X55XDM1wurF6' );
define( 'SECURE_AUTH_KEY',  '-7_yoY;~]_{zX9LX6[x|HaRy#F9jVQY(-u>^,wp ol#[]|ASjDKV8k{?Y;/XWLu]' );
define( 'LOGGED_IN_KEY',    'HA?i?AX^SE!.cMU|[, #* djg%^k&(_cS:!^1?GO{ABK}F*6X)Z+%gWB7hz+#^}d' );
define( 'NONCE_KEY',        'SuCzH?6Y~dv:y-Vk3JD0GSo;leQ/2koHU&Lc)Ilz37GUPwW@aQ&5IAS-SfNeG&M:' );
define( 'AUTH_SALT',        'Z/|KWT?o#o.@^,{e-4_M6Ud6j7iCEt!v]Lk)Hd96W+t9.+K9]>Emv71`S^%bjA9$' );
define( 'SECURE_AUTH_SALT', 'MPwLVk{KzGL#<p#)x<)0@c0S{FeT{Gf<bR38uwEvq{WkZYNM&F{-aPQ4zD{I&q|.' );
define( 'LOGGED_IN_SALT',   '2Cftd.nh!r6o#cJTY>E{;Erm]l.&w|YPWFQ?-|NXvV!Vm5Nd>[nyY0:<@^GZ,3%g' );
define( 'NONCE_SALT',       'bi`a;-&`.;_Lh(o#<:(E?i$lMDM_trbODoP|FOi# qI=K2-O[S=cB)O#O;X@WX}7' );

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
