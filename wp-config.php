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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '`>.)wJWd(#k8hR24HqV;at@q3C1JBD2/t{!DIc a]]@R3l8?Xu3E}?gT+2KVoWmC' );
define( 'SECURE_AUTH_KEY',  'kmNd!XcV!eC-$dPfWXo[abXp;rK-THbP 2A^,v-dwj{mUHChYd6ggZ;m+p<XsiE]' );
define( 'LOGGED_IN_KEY',    'EMj|`27zvMoI5lV(&QW#VDuhfJFp2P06oz3+,<45XZ%@:fGEr0C_Kc331ld#<F(]' );
define( 'NONCE_KEY',        'PGn{~roCo&PI &,7<GfLYoFgMPedHbf6kq7:S|$HC7~tnN]M-9dI4rZMZ$22/8sJ' );
define( 'AUTH_SALT',        '_Sv=O]W{MLB4sp_;TkrsE2;6{gRWPDjj}WpGNC(u#WXMitjcA`KR%sqkj,.N&4xT' );
define( 'SECURE_AUTH_SALT', '6I#Q(o{YDEPpK4PpyrX^ fDt2}KpQ}=&@@Hi&*9lLM 0YtZ`fPebTX)Y}<1uL]@s' );
define( 'LOGGED_IN_SALT',   'SGXpb)G5JWS:7E`[Z%7;`xxHWSCUMMW_JaMTtBkjcnCUO:Q]qowu2WVYB7kcTREk' );
define( 'NONCE_SALT',       'R?-o=?liw_#_ln}2kIBRyw-a/;/#P53]bom-En3<957<;TZ^iAepZQHcB6mq:;A9' );

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
