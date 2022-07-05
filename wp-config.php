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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_c4#s.T+iP%u(saBz:h2[1|gxT^+w&T8<D0R|ae_ah?/~q4B?({x:9z:4glZ4gH+' );
define( 'SECURE_AUTH_KEY',  'TG0,s2:39P]_E/{`P=a-fx6YwCAo0V#n<9{(%6IG60j MCp0roOz|oGC|YL?{=^$' );
define( 'LOGGED_IN_KEY',    'Yw;3}OD[;+hbO/gu}Fw]ff!A1Wj)_G4i<k%gr5oV{8JOV?P#!9-W;@5oGBE|N;#R' );
define( 'NONCE_KEY',        '@#>a.-Tr.SUER^=+{>]srxTnvgv[tZ;`r$YC7Cw#xQexgnb@{m8-#4bnt#Gm%:/X' );
define( 'AUTH_SALT',        'Ci6+{S?tn-x;?vYsQk62#:yU&?[t*&|`,iMnU4e/{~Ia>IR%qoEeG f2_xt^0z;[' );
define( 'SECURE_AUTH_SALT', 'heHE&P]Ud-|$Wlv8Ai_+RiJ$IAux~l9.UieltnBVfvoSQ}y1i6PD8tG~uv8N[g!p' );
define( 'LOGGED_IN_SALT',   'NqcaEW_+G 0mm<>RvzD}T<rHM58&tBwAu07h9)[R#ur5LuVo~sclg@:6os~L+<2V' );
define( 'NONCE_SALT',       'hww02U5a8;F=W,_=.2gk~k1M_IRLKA}sFNh9*BcgO$9pp%mwciyeeVC EIBQ*{ 1' );
define('FS_METHOD', "direct");

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
