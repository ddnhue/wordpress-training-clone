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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'ik^pGpirX%_*R,UQ)L_UY{:RJ9O/}=PLE>S19Y{QIt|.$g[41.OV:sWn_4:5VXng' );
define( 'SECURE_AUTH_KEY',  '[ew*e{sR/ `@uhPSJcPBLcF3eCwYel>FfX?b2jJV%MEecX1Ovr_e{8_! +5^5S9{' );
define( 'LOGGED_IN_KEY',    '4;-_3OJcoAmY4o^+z-6@;*EIwA0~-gL_%F]pP/rdDpAF<*t,4-%N9!<7c+FCsn}r' );
define( 'NONCE_KEY',        '/1@ZM6d`X4:%coK?LALN?;mLWW_p,vM3$Z+/+XC,~0ySdTGE+DR*Yv#Tj~d<0d>Q' );
define( 'AUTH_SALT',        '&T)zXY?#)#3>rIx.mSyoiP?+d_m}h*^P@qC?^,N}1G$QZak/=&j=DTr}!4+epyPj' );
define( 'SECURE_AUTH_SALT', 'l7JotC8=E<+ECb7E=(|J:MMDl2mxQm][ivr6`gCJi)/@DR^B:{&%$HJ$HPT2Z|Z4' );
define( 'LOGGED_IN_SALT',   'aN;#<k(*ZMMGH.@.zG+$B]@8rVfsJnVyEu8v6*R<0?%RXo~:&7PCRGER&:TJfDsy' );
define( 'NONCE_SALT',       '}Nwi:.]8D~X+ /joo{HvzQ3%UU|xt, 5&mE{043nVJz6x9 ~N[oT.%An1EsGm*8~' );

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
