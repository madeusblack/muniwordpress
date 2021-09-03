<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'muni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'OB*n1XhpApaoL1e`wqpc{7M/4)=o6b#xM} E5LaNU+RWH+u4PwnHPg&cGIqFP&ji' );
define( 'SECURE_AUTH_KEY',  'MV,~?4]T?M7l1bfVNeA]X[bqN&)ECTq9D5Cq?-_6xC;esg@a@=M3aLC8t(5Kkftj' );
define( 'LOGGED_IN_KEY',    'xl8!xFLTJrNN>aJ8(?R(D+W@nB-vi;<^#S3T)ZzwS(WBOtVj)N;{o82xDE[xLc)u' );
define( 'NONCE_KEY',        'vouz~`E{Yd/Dm|l;7w9/ot1=Esoxnt&_Mv^?A.&LW+A<J]lteg[Gh<w3,G&oCzz%' );
define( 'AUTH_SALT',        'Ah}qKRts#x0FXqgN`9j/m,nbO[xE:~)#Tk#EuPx2M>]f)hVkxq#z&`x:;WOrIeCz' );
define( 'SECURE_AUTH_SALT', '@lw@8X#i8t&J`tvP!?<^/sS1~4ZEhE,r,kUcf*=Gjq1rDv]Q`Gp$:Ul6d;j?E%#)' );
define( 'LOGGED_IN_SALT',   '{E%8ST:Osu4yf&l7Lx+]}(Ay1oq@*Jln/uc~}oM#DUB-F(rp|nL;a*0>8BQ@!UCI' );
define( 'NONCE_SALT',       'R$/ah7j[Va`XOSovvux_Hj1cll]n*#oG$VZUfQYT7DKlZ_WWJeG1sAC&e$tLgIaB' );

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
