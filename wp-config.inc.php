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
define( 'DB_NAME', 'thinkus' );

/** Database username */
define( 'DB_USER', 'cco' );

/** Database password */
define( 'DB_PASSWORD', 'Colombia1000' );

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
define( 'AUTH_KEY',         'MRS6J.3sYV2D:TmDv&UB}N2=3aV8P(cdH4)B:h7RsE+jsv{i`3o1g,oo*5#~md]5' );
define( 'SECURE_AUTH_KEY',  '<poL ?qn?rd_YjgMu5:ch7{,~m +?GS=Xu6bX0qB!%GTaZ@m-mE&D-p^]sg<3 ,k' );
define( 'LOGGED_IN_KEY',    'bQSmlsI3FryG%gK|K=N_,e.MF,G-em_|WKg,Dq<tWvF;= ~0i/jlTK&.Zp(jO4 M' );
define( 'NONCE_KEY',        '884`E8YTPQ&3/Q}>)$k)N_F3o$qzm~fQ_LiJN`Dc/+^>xNFFdCg4d/8>yNAaY(#D' );
define( 'AUTH_SALT',        'Ud}e;o@H>@m;{:,07PUu9kX31n~wfckg6GUk.=TiL&U!;,,~I$>@KJ=`^x4Fu0[5' );
define( 'SECURE_AUTH_SALT', 'diOB)Y$&?5;85@S4}<8 fA}#l6.~3c*A%%lk+_zi3Z90E*4n#kA``VpSNlO=9ghE' );
define( 'LOGGED_IN_SALT',   '_Ydz#5]kAS<n]PFH`UvfW|Nl[z8Y33(y(6Qto0Ea^`S4{:Q6cE2XJZc/:>{Kq_T.' );
define( 'NONCE_SALT',       '7q?V]#rXWwkk^A0cIRA:P>8?}zyK[EW&E=&VFj/o@S+wY./ygiQwQHw-Krfu<O,X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'th1nkus2151_';

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
define( 'WP_DEBUG', true );
define('FS_METHOD','direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
