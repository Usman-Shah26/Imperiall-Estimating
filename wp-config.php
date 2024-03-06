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
define( 'DB_NAME', 'imperial-estimating' );

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
define( 'AUTH_KEY',         'EwI8^NCOsH94mGVfRHwK(wI8kA3LBQ >y7-%{HPzY&<9(Nw JL[P7B@@8@5~D6%-' );
define( 'SECURE_AUTH_KEY',  'P+24d*0@@D||]bDBbc;aKm/a-S6`C+wx,1Xc1{W7w^}F^@i&!)>duPjvOt?pb$Vv' );
define( 'LOGGED_IN_KEY',    '02Zl_qJE)g,H;XUupct2X:z[#7t;|m&X7AhaYkA{MXF1Ql+}hq]xT^<5QHg`w*s]' );
define( 'NONCE_KEY',        '7jMthOeN<-9$ZFUBui5pSO[^VISj0nr1nYQ}xd<:9`cODBDmN,H@bN$clFlr[ynb' );
define( 'AUTH_SALT',        'tJ]L:5F?F_#U$q?i{/qk|/lqP23f?;;Az w.uvKcnbuH0a{(K`m>5^<XDIP%b|%~' );
define( 'SECURE_AUTH_SALT', 'eI!4+6!#HaV_jb%3?V(t0|@UA<HPIbO!bl6AqkIMlkG<?CodtN.2 d2ZFAnl%tnw' );
define( 'LOGGED_IN_SALT',   ';MWYUjk#icJ0,.`_HT)xQ}9 C_Pn94mwc#|cFHG1jP0vODvie{dXFj]Bz.S[eG4+' );
define( 'NONCE_SALT',       '!vb&SYwH8X>Vo*TiX^4Q9%@?2Gkj[24s@R_q>8t](!W3m7(0.YpSOFTF%jK*E(&p' );

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
