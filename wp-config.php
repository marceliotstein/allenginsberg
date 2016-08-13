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
define('AUTH_KEY',         '^z+;jeX^P@ia~;Cp|L{8VChq,wHj?]ZN+|$./<SL]Tf|DY6n8u#|--F^JC/Xtp+>');
define('SECURE_AUTH_KEY',  '($hOED+*T5e<-(as[A${<E]U=PJ{AX)8{;yM*IY6_nniyA7sJb82|C];-12sTjYp');
define('LOGGED_IN_KEY',    ':HxhakvconuR|K&MLfN}Paxj9O#%;#,5ss+=0WRJr}u<Upkw}zm1_D|e3FTx=-WS');
define('NONCE_KEY',        '`}(?fJ{Dkr*0$;~ 1}S+t&W_g!nS{^N>%D~e]g(tQ-OS>Ag9,.cjs|:?RlT=k*#`');
define('AUTH_SALT',        ' ?>v}tQ8)m!^C*VBni7nK97gw`]qMUh:KqGcSPnaAM^^]e >_j#.+0r)g5:D~b*,');
define('SECURE_AUTH_SALT', '1/IFpOj!{`@Ugh_)OXS~8+,~_/8?}+B)DW!yz%CS!us)|.s2s+yM&%Ba~tj+aV]o');
define('LOGGED_IN_SALT',   '!JvH]xUO>|LoM|+%Sw@3$$)VbEA|vZIZcjUo7i+FdNXV:BX:$~JTl0fQsP8FZXy7');
define('NONCE_SALT',       'dmWr/$Gz6LcUSl6U%[gRN:k$*;GV9uf4bv6l!E-iE2KX#CL~<. v.{4l77Uy9we/');

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
