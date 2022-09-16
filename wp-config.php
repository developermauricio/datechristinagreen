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
define( 'DB_NAME', 'datechristinagreenv2' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'bHioKupqxE7ndkroMpuk' );

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
define( 'AUTH_KEY',          'dIBy,f @E[y5rYCk(?rcLNei<7J_OZ5YroN1iZJ(s~|?0bLdPMNztJP6rwBE^L:P' );
define( 'SECURE_AUTH_KEY',   'QB)_Mhx&5@^2Q0aueH]a(bt;{wj{G#c=0fh7e[K@y|D@6uTj#(JnFIZ*5v1NQ(xi' );
define( 'LOGGED_IN_KEY',     '$/;P^E4~+_aHjm}#g M2(dl*R5KFd7?{qAh!C)gm3;p?}xa%)!)1]K*>JNN5TwIa' );
define( 'NONCE_KEY',         '%-vWb;nrw/AP){=ljlJCTWO2(gC,H5N`[trO,fM48W=@^r88.zy/vMAXq=(_&r$]' );
define( 'AUTH_SALT',         '3#kck8 ZM8^>Qr`i&*{zY;-aVSvz1a4V]1Rw,r<YHhQ4dfD]7R]~W5eC8]8Ubvc]' );
define( 'SECURE_AUTH_SALT',  ']sQXJyPTK,#GC$%F/*T1n}OtIvW<Hgywr1t#[V49q/kG2:x6r(nP; p*X@Lzk3[V' );
define( 'LOGGED_IN_SALT',    'j|k7$1BXTQvuh.oCIW@=;ael%gmp8N!bCI1p> `<+vr2T9jIq7Y!T&z#z@<,8e|R' );
define( 'NONCE_SALT',        'F18F?4WlC:M^kcmX`bUJ{o7DRM#hnQuRhYdEb8J)c_sYHo7^uU_.,<!m_bG.=5N]' );
define( 'WP_CACHE_KEY_SALT', ',hW>`n+(b5OzPNe]zzJM9:&!>H!(p8<oME;shaY30%WbrwV`t-v{f6A]5GzJ_>(>' );


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
