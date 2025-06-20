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
define( 'DB_NAME', 'rrblogs' );

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
define( 'AUTH_KEY',         '*]_TMr{/?0`l~D,~Wz,l6,Tj&*B#KA=J[o}LXN8O9ld=Xr=~/lpL|&k=UW&z[`D(' );
define( 'SECURE_AUTH_KEY',  '7,Z8C#*y0Sk)jo*%]v.|I^RtYI|lQP>/^~+jb};7um]1VHF[xNjL*o0{>tD3>4&!' );
define( 'LOGGED_IN_KEY',    'yyp3#[Z74&3)Dm)}Z4:xZ}i; Dh(,MQ~Lo{{iLuJZ=m,_fXP&sF}gSqdGyUo~p-L' );
define( 'NONCE_KEY',        'pFDT]_knvI^Em<k4_>KQRWZ(SRX2ff5!F>A[m,X#N#7)cORBjyL0V={``5:*uJeS' );
define( 'AUTH_SALT',        'Ff,lXM)wWH 5/<uEqbE]TEJ=nxQ(([fwJGEv3,Z9,oN[0FAb;jvLBAGxSBz*<+T4' );
define( 'SECURE_AUTH_SALT', '/z]e,1Fs)d#A9qg*^:f{Opdu4m;K#2<DKFFN5ScO&%1$vganA..k$3UMMPG@~++!' );
define( 'LOGGED_IN_SALT',   'd>dbVG5RqYGL[<,bjz0KFFPB,?^^^_ <4%h]q2%{o`21|JzgY,=|wR<cyCRMhqe2' );
define( 'NONCE_SALT',       '-p2L=@cw_%m8 2b!rg_;2!NoO9KU;F/Io5.5t}Ir}Bc&IZI= tF{.NH3Ui!j9hds' );

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
