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
define( 'DB_NAME', 'umemotoshouten' );

/** Database username */
define( 'DB_USER', 'xncsk' );

/** Database password */
define( 'DB_PASSWORD', '*4jmCZmur' );

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
define( 'AUTH_KEY',         'F[+;}wQp_ X@KKeAgcMjiQlb0&w|J9$4l0SSiy!X(3[z&cn#9]:jS@e[A.Hl_aBe' );
define( 'SECURE_AUTH_KEY',  'MCdVF#F_7q`%@v{,?z~{D&}zIu&a]@QD]/O rkCeIfQ=t:oD^%9ad! IE:*0W<Lw' );
define( 'LOGGED_IN_KEY',    'D5EJ+Qm?D?!q+Du6=r.N3w>y`cEDM6 H/}x0np[ang7j?18NXz(lb~^l8jTsx]:n' );
define( 'NONCE_KEY',        '8^#CP#&:$;Fw#;-n;FheW~yo>XK<ZE[(GETxf#k$xl$s`F7=ST790@ c}CV_umzu' );
define( 'AUTH_SALT',        '1;$h]dwF(>%f6WTmFrB.3Y1J&H1J5OSSd=Hi}}=}G^s+zC~5is<| 9sl5eSB#,23' );
define( 'SECURE_AUTH_SALT', '*}J,K@J7X${^v^+IDL_oc[X[(F%n}{_TcmN6teeAzYRiRFYYZ2Cb4g)(saNRHAs<' );
define( 'LOGGED_IN_SALT',   '_n$G<Y$mfx9IMq|Qcw>46n9MquS)hgcx~xJkgBcOI~W5?u5amJvm{vek#~ko3%xi' );
define( 'NONCE_SALT',       'XTLYw=_;fCX+myU/lu<_Y^E`4L`1Qcl4b#d#rGwYrt!-N]S9e!)=d}So|f4O|8!(' );

define( 'SITENAMESHORT', '梅本商店');
define( 'COMPANYNAME', '株式会社梅本商店');
define( 'ZIPCODE', '〒337-0033');
define( 'ADDRESS', '埼玉県さいたま市見沼区御蔵19-77');
define( 'DAIHYONAME', '梅本 和史');
define( 'TEL', '048-627-7539');
define( 'INVOICE', 'T7030001154323');
define( 'FAX', '048-627-7539');
define( 'STARTTIME', '9:00');
define( 'ENDTIME', '17:00');
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
