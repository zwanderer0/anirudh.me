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
define( 'DB_NAME', 'u929165256_WP4jK' );
/** Database username */
define( 'DB_USER', 'u929165256_vg1mz' );
/** Database password */
define( 'DB_PASSWORD', 's7RcTSRAqV' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
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
define( 'AUTH_KEY',          '>hC0Gt`zKgrj.D5{/(&JAg7Q!pL^a0MF![J<Bx,suDRy3rE$$]mRaMiL{# f=ZS-' );
define( 'SECURE_AUTH_KEY',   '8cG`V~< ,]X8@)JO;5dWW+p2EYH`7`%p2vs/RFG^5]YefnRxwXiqb6zb]BSC,@W$' );
define( 'LOGGED_IN_KEY',     'u+zkE( % m?g/MPK*c;s=@n~omx MT4`tO09jN61%(435^AV>4Je.KtB=8FgCYxC' );
define( 'NONCE_KEY',         'mqF+m63w-/HQT8x|46C*k2T)?IGWeXsxtR]sIk?-mk P+heJ3+KZ~|qne)?<X[ax' );
define( 'AUTH_SALT',         'HUyX}-Y4==okCFRr:SlN62j^S*6;t{xrGQAe*Q]*agn`^#EZCLL8E}<7~jm2Sdyj' );
define( 'SECURE_AUTH_SALT',  '{})zQV-_fqOkUwZtGWR+|(0y8?,=HxuhZ;`^C;aP%5OR-rse]y3CeC6^xt;MWd$@' );
define( 'LOGGED_IN_SALT',    'nE4 /K+_MW`X/+F[5/ynvK0KyvAB@W0V}@bh-BdThwsVY<{NKIo(K|vq&CF T5pz' );
define( 'NONCE_SALT',        'xcXLR|<EF-!kZ?eXExl?$lA?D<=wT1Rtyw,O2Xqg_3@u;dN%1(!I1!~Jpp;`6X55' );
define( 'WP_CACHE_KEY_SALT', 'MA@:. lan]aA9l/x%k+mI{.@kQyIvF:K?bq,Ia8YAPlLNyjL#4,({H%-jKz>T*uq' );
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
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
