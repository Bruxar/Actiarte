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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'ab2cee4bd9e67f881e40d4775f4255b5da847612d096d512' );

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
define( 'AUTH_KEY',         '8z-STY M:Jg;|S^8Yx}Ajhpzw^PQKearFL%M]d>.~.}h4w?|cC[wt.knRmsfFnc5' );
define( 'SECURE_AUTH_KEY',  'JiH+RA_MH)?>YC3AJk+.{=8xi@*fWA4vJIg[~?mYoM}J]jfd%%o2tVT`OEzOQro&' );
define( 'LOGGED_IN_KEY',    '}gw_W(sfQu=y.)sFfI|CS=Y_u1%LE}Zk9WdNOXB}toeGlHs:m(xvNjTsne$vnKLt' );
define( 'NONCE_KEY',        'q:F0kJq>`Q?c=C3 ElE3~iH65xG8*]W6}J}kb%`ZR_YRxsgPLb8f]Me6H]XY9u3)' );
define( 'AUTH_SALT',        'v|2$#2,:tdAWP;Mp &C-pTM0WC+?%|dkSunKSe_O|V!Zs3i4vv6U1RZ4^{dF5CI]' );
define( 'SECURE_AUTH_SALT', ')i7{kcVE^&K:S+PRf@-=d0<},vHsP)*)uvAX,!8g$RVpZRNh #~6;^^)8%`1*+%P' );
define( 'LOGGED_IN_SALT',   '}5y 77|,4[)Ec5h>_)P#w<d$#E~Iz4Z-$E`Q7^:j!dzZGtjqhmDBq/)34wLB>8FX' );
define( 'NONCE_SALT',       'i!9lS&N_kGO;C7=>T%pS37=a~WIYM,/q:Ky8N<zTN16pOvLg2Yda2XOZ&b~HNrHa' );

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
