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
define('DB_NAME', 'betaalle_ag3');

/** MySQL database username */
define('DB_USER', 'betaalle_admin');

/** MySQL database password */
define('DB_PASSWORD', 'yidkl.5483$#');

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
define('AUTH_KEY',         'n/y~T#3}FjQp6)!PIK+xD+J!>!&+NqG%ni|1&o)FiNy?GDA(fARU!bzYPx;zdbOu');
define('SECURE_AUTH_KEY',  'N@O;DL8;6yem%d+agy}uR.&rZ!gt/mfk`eCk*1Wtbc4}4t;L=Uo{L^veI|MS-Y_{');
define('LOGGED_IN_KEY',    'RfG&9[J3b`}cX>rfpobXKPi{Uh&9g(,$f%|8E0tljvdW(c#hviW@hy-r)Vh J*9C');
define('NONCE_KEY',        'R.4B^)>L;0*:qp@[{<:~v! Dn7Zdpd%b. )AyOs`sLjdTfBEXe9-rWLh7z @v%SE');
define('AUTH_SALT',        'F#Y^:Lx}Ph=8p777$1CH$@+qETl.mJY2oY@>un<:C^W{R,;HOu%nI-qGgiM~M0`^');
define('SECURE_AUTH_SALT', 'W%/CXqA!Su^Cu5y,Bl-`6<lvm|8W*+D[mmGF#TyqZ+_Ev{7RBw]$`t}-`luL9XQ+');
define('LOGGED_IN_SALT',   '60lo=1pAKfEOw>N810!0T6miZAi_KElKah$z4_g+JXS0=MC~rb4PY$qG*/XREtKZ');
define('NONCE_SALT',       'MWxdiuhq`T}MgHr g!ECW] a65 Ds2Ho_Dx?>sa#70/$:PV%LL]x1qt&EXd7LwCo');

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
