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
define( 'DB_NAME', 'planty4' );

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
define( 'AUTH_KEY',         ';jv6vB((y/RgS^W)!HK.#kkI/77Db~E~shM0W]l,VykFB@-(;m?]&<.K2_l;GXiT' );
define( 'SECURE_AUTH_KEY',  'qlvYPw:+9K95$Ymt7m%:>JL*.w{.p`?2Bm:S3#hCi-@_[Yr7.4U~B!rD%$}M-OJ`' );
define( 'LOGGED_IN_KEY',    'aM0X KQtp7)`>k~gY:2t{+fq;n~P{d,7F$]$TU^0<4>=)GvU=jq)r_Uf)e$rr_%5' );
define( 'NONCE_KEY',        'Ltb:$YwTailuD@0V3]NFMTzrwe)]hjc/3^X>F)H_GdO%5#7F2MCpgsVs _C>VHfW' );
define( 'AUTH_SALT',        'n{vb&Z5<fjXW=pFSGh|BsDIYNl%Ll6JV1$<k5rK3b#)(8aUFJ9DVj Ugl.g[:b0f' );
define( 'SECURE_AUTH_SALT', 'tzQ+AC:<yVb>`m5P~(&EQ}Vk3`1~eA2#}>3QOnmhF8M[tD)*(uAsN_pIJ;*teOm8' );
define( 'LOGGED_IN_SALT',   '#1OUf,6R/8*Q0ff(O>n;.nk=],@{K/&JyUhbsDrcmGyKWv;e(t-h=~FIY+4MAyni' );
define( 'NONCE_SALT',       '$=gt7_>m~p+1a~f5Dzz P~|>Rh/NN.K5i*L [qnc6xVZI:W[im_WDZQwD3s(R;Oq' );

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
