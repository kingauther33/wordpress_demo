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
define( 'DB_NAME', 'lawfirm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'yosG%np695[-p.5flAk!meguB2Cy>RuR.<)[iSb=!C`c9a(9Q*nakfb.e,7n{<2f' );
define( 'SECURE_AUTH_KEY',  'sQU$0Ow>ME%*vu<VL3p3q#(/e?SL%X0Q<qxV1H-696&7*pST#sC||v{F<7PQ25Si' );
define( 'LOGGED_IN_KEY',    'CqT+%~D<y(?Sa<rQF6bOMNSD|-o.jK3Vc $B}hR90o[,pTGOHHp&pvPLK7Pl4=^w' );
define( 'NONCE_KEY',        ',hz+2vzMLq[0#PRvh8c)yKThhGb0~DI@RTc^JG2JqSS~s#JY{q<p*G(8;O8KA?Ii' );
define( 'AUTH_SALT',        '@KL# ^Jd+0e;(.#*kxC7RNlY@tJk=U:u1Oc!!b?>zc^[:1=nN?sb/DvpN&kK%d_o' );
define( 'SECURE_AUTH_SALT', 'us`Jn1L&Pb_@0agKOE9b17FU4tN*n[g%WbhaKUT*`c]`+*5.oqh,}U$dcB7Ev{R-' );
define( 'LOGGED_IN_SALT',   'gE|-$E_ A>1`$$+zBK~h|:ji:R;fP5qn+wVav/!3A5?Z;Crr7w{J*R~YVffFsxnD' );
define( 'NONCE_SALT',       'h+.9Qi:-:u:LXD>eZHSuhRJq}C8}$>zAeolvLXE*8/e d]r}LE#FKiw.d(spBo&#' );

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
