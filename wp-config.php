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
define( 'DB_NAME', 'buzzbryte' );

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
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0775);
define('FS_CHMOD_FILE', 0664);
define( 'AUTH_KEY',         'vCmaEBiC8ziTc|>{0{k~N,f`{<s6-nTm@U3*b0N17**4$Yo7Js}vpK4Fq8s)u/IQ' );
define( 'SECURE_AUTH_KEY',  'N/Sz{(22_+e(F%EyTU1gU}o8`DTS]-q=b3 u.Z=v<{t~|_Vjnq^}=|}_l7o]Eo9J' );
define( 'LOGGED_IN_KEY',    'q./EZ!qry]3uu#rr,E 78Nt{&dXUdzs*[[-kR,CiM4|EBV{kc}m=oa_s|S->sHH[' );
define( 'NONCE_KEY',        'J;Fn&/Jp9WWM6-[Lh6nxEAgE <Omva3 d2PAFWHJS*Qw{Evl.j;5X|fFi<U6j1$z' );
define( 'AUTH_SALT',        'Bw-G|ED|0?[/~9>M(&&d%4pVh3i{mHj0A{P`] ZAcO.W#??UwdLsW)Bqo}gPp=&l' );
define( 'SECURE_AUTH_SALT', 'Na@?U&/>Y55!J@OT&Y~_>7M5V0^,K7[l<fpo lhxV&a_oIS%%bk{F]|Ca_9(<%V<' );
define( 'LOGGED_IN_SALT',   'Nj]hHxkcBf(k>s750ka;e_|m!7}cPm!K{uZ!K%xv%tJX(lup?ii6#@eC++5q/RzU' );
define( 'NONCE_SALT',       'W(NXK+Ax9xK-$hv3`1a,!;)c#SC3Q-Te$wIRYV8yMgQ5KS.v5hNfuc~b&4?*<){M' );

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

