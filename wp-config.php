<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TARk-YA>zk2H3D@c#ejx3uQF:8++XIEVU$r@GzCmuiT6G<bq4Rt?Fco>37O3/-Eb' );
define( 'SECURE_AUTH_KEY',  '||_ ElBU/D4c@B)h./><mNE(@jH,A<$Cg`53;[6K*ROO<0^(wNJt?XEA(x<_mN,}' );
define( 'LOGGED_IN_KEY',    'M*E)$*eg/R!P[)R(K5h^!~v_x;1+g4gljaQn2:.p /X1g!N`SZ@U(7[rXW#1A]4K' );
define( 'NONCE_KEY',        'fJXQ}!n6W2S zM0/rx};q7t:dBCds)G7EWS{z$>Es}1GOxp.j|F>&iI5<oZSLb-{' );
define( 'AUTH_SALT',        'Fcy{=wY`%{1`jl1NDpMao8$j/J377HmSw{VNb|M?^1iFRDd%pEzq*Orhmr|N#mLe' );
define( 'SECURE_AUTH_SALT', '*<nK8*frh-#~h+Ynb#?EjQ`V!0#cDbsYf~0d;+v5POuey(j:U,99>jXH/%lgjJ{A' );
define( 'LOGGED_IN_SALT',   '/dXifDp_aI;GJ3B0@7q}$)Uk0F=oIhCD)wJi/JBI_=t,[%o,*Y)a<GuD/$S{ Oqf' );
define( 'NONCE_SALT',       '4x,/nyxT5*XcA_&TxvUD ZW;oEk}xm@K)@:W*MN}kb,P&NQ?2OkDDiy-ns;N7w69' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
