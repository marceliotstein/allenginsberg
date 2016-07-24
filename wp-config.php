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
define('DB_NAME', 'allenginsberg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iSv}~,s(d2yuD#+1fD&w:N&J2iWun[@U%|Z}j!PF0J=hnmBH YvZ!hwM#]Q8+B1<');
define('SECURE_AUTH_KEY',  'M0BsglZGL7Je-mzK:TSP:pGE,lRJ{!EFEJpK~X @Lh90q8}^IvQ7>Dwr|gkd^C;w');
define('LOGGED_IN_KEY',    'MM2}-^0U20.~U)GsdJ1h{HR|Nb>,d{c|P<;pUy6DPMS>2WTe&on!J8uOY}%rl&5y');
define('NONCE_KEY',        'b0PLcqZGT?j(kxel!iroB:}h3G74e,D;/3w6v~@DVGa}oXIw~zs^W8%{Ud!{3TWz');
define('AUTH_SALT',        'vk!tum=SnWMCW:@0 SU+l-|f)OI_|3>2o90rl8HnUw.x&nGM~_R=#H:(Xke_qIL0');
define('SECURE_AUTH_SALT', 'YH<,.#pMWA|w5PpuQ(%7:eCDThS4 ApMZ *vQD^zhNDU2}Cp98_W5xt[?FdEEAaP');
define('LOGGED_IN_SALT',   '_SDOR?eBFacwRX>w)i.Ag8{4N25Wo6y!K9,L?I@[vS;{;BL_F|l.Mjc-%wtNydtD');
define('NONCE_SALT',       'r{B?I)d~~v%Wx!@?aG|9oRNiiGM_=&mKm);9?XKi[_rv%T:Mxl==%Td>7gXP`}A2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
