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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ') u-S7sb-jnaQ.P9ah u3]19=!92Ph_G(&w%Q:7i_?4Y,hikt:l6Sa81I:,f_/9C' );
define( 'SECURE_AUTH_KEY',   '~V6)Y]K/_nqH%qBKBF#-UZ$,~0_SQV!KtEoPBBJ41LXly#Q#W=fkiQh=?uBU^C7x' );
define( 'LOGGED_IN_KEY',     '{ >$71dx&^AQTVnjBIgCT3Wgnz-})C+{voUg#e<IB+:Ng=Hp^BGH!6eW>-K+:H(w' );
define( 'NONCE_KEY',         'J<fePPX.{{8T=1.KQ;5b?.Qx}g=d=%`9;%s_ao|L9U/pKO:aHE9MP,vMKvxtvIIf' );
define( 'AUTH_SALT',         'n#K/&cMI&o4&d3-}=Ph8gvOFE./r>k+TphmHY-og)Z~53tW}_IeL_}c9E]9&yC9P' );
define( 'SECURE_AUTH_SALT',  'n&./Sz+v@DJBfF&#<@~%{zqMY9QJ@)S.2*8[d(I)x7(ZOGwVg*2bcR==ZAr3lm^o' );
define( 'LOGGED_IN_SALT',    'ueqKCC9;sTrJ4,~9fOzL,CQf8 OXG&_U];.[1BtuL0FX{q0,1(d0!_d~Y)x)NORR' );
define( 'NONCE_SALT',        'zZSFCYN_Z$3p@v>pJR={~7X#aVpJ8,JGkhHn(0axr9fq]1oTj?% Umr.Rh2;Oq5[' );
define( 'WP_CACHE_KEY_SALT', 'oTRl46b)e:9l%n(1V]h(on$dhCepQ,fF}Y)NluSAH<(,r%r!F3V $|tAVpngX:33' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
