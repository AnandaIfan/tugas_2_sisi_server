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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );
define('FS_METHOD','direct');

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); 



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
define( 'AUTH_KEY',         '^&k*L7HOX^E7HYCD=ZZ[b_Xtb_HQ3DOqNX>H6uW7}B`+~e;9D%I^G3e#cJED)v>|' );
define( 'SECURE_AUTH_KEY',  'Q5l,iQ#o-3M2$~j.YP8$Uo{G%$R/[!GB=L2OsuWz<6IY<1t@rO@=wL9pQ`T{W  <' );
define( 'LOGGED_IN_KEY',    '.r }A)ujOq^Kyf=kG-6)Ep[jW1e3yKHB].4Q#YDeJ,$!Wd%_<uOQWm]?8pF/e-Uv' );
define( 'NONCE_KEY',        '4Iw4cF)``$ws>[DSJZ. D<OfU#,Dp/(^[RoHobsYh*iGSLL}Cv u>7)C,<=/;fl{' );
define( 'AUTH_SALT',        'C[j1JNm(sLn}u/r6^.n,K#K,F%<];|40N%r<dZ9m=enAG^xO=3o<KnY9PG|fcndn' );
define( 'SECURE_AUTH_SALT', ':&,o_*ZL(fZ73.Q@|xiP2zF]Df^t(1xlkC<i2$jD5cJCiZl@f?IkA&}clJ,FrMxv' );
define( 'LOGGED_IN_SALT',   '^:kp5_-^68;dgz c/aEqPlu.pe2*Pu#,80!fPV1zwz9sfNk$k|5Em>KD<V7-O[Ix' );
define( 'NONCE_SALT',       '91AJc)?l-KZ9UcY=3<>A|QD0&g>5GXa97:!Af:AF M59aG#+t(TFzH@7D3Kw2P{q' );

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
