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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '4jv!7|nCoic1OZUhO_V&lE!}nAz<mx8mdwrC_7#<6cvO1SGSHjJq(!P%fqKpXb!/' );
define( 'SECURE_AUTH_KEY',   '7s1d<w24yXyVEha-Usr~@vG^B]a v^-g[Z}5QB`h2}xwI85D1NKDjSGT9}m}s9d/' );
define( 'LOGGED_IN_KEY',     'XFsRY41.d@33~ma~jlc-:W:QZ)oV^u8d@abjq+#Y50=jZU3t piG.!z{C-$Hfl8Y' );
define( 'NONCE_KEY',         'd&J/V:;nEI8S~JeIT{c0T8LH;D~iMi!:-d`B?chKT5*2>g<2qVp3e$O1}1fJOz _' );
define( 'AUTH_SALT',         '?%@iL@IjuZm3Pqbl?hy$5=SV#VtzybAF_G[NM0yNlA!A[f1-kVi)35UdG_%JIh+o' );
define( 'SECURE_AUTH_SALT',  '4?Mj}%%Y|a`hZspMu@vlqy]!@Q)[`B8{^2u<_US;3Eb$PKJc{*amOkCt/T`jO0;u' );
define( 'LOGGED_IN_SALT',    '`??W^OdWk^oj~Af Fa5P^?,$kzoMyV.Dq1~b22SjlfcqyJP-Sz~P5Wl;!q U^.)2' );
define( 'NONCE_SALT',        '|F.tj_3{@f2(};]R.9*:7q{Y2`&lC=t%#xQT!4)=(.ylsPs_[z5B;i`8-5S0%t56' );
define( 'WP_CACHE_KEY_SALT', 'Qq/jtF0W>/-HLhxw%lsUuRH_Nj%q,R&%N{tPpE32!mU~[);yHlSCF[$-}QoQF9!w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
