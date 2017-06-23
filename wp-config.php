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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%JL|RB_k%5VCh]VX}FRm#jJ9w1lE9;P@2;.t,]Nv+/C_p_7Cju-]z3|}/_nX9lC/');
define('SECURE_AUTH_KEY',  '{{6sYwnbJX7ZM<[2I]BI8DnHKK4u~|1@,$b5NJqGc&s$eS18;{GQ0w2&AWm}t=Eu');
define('LOGGED_IN_KEY',    'Z;18E02I9.=QOC{BiUTlX?Mpi=zV-<1>*Yg~qU`;dTK:6;?ry|+<*]s2?c<0UwHe');
define('NONCE_KEY',        'Bo+MG~.To-K`rfb~EdK)sgF,`U!6yw4`RQ#.g=xgM;|Qx0RI8Lw9p7QQd{H<z,_@');
define('AUTH_SALT',        'p:/:u2>IK<7A=1-CExzi( `tV+M_&epb#-bc~wpKFb~Iv)Dajhd)EM0Qp9cg[&{3');
define('SECURE_AUTH_SALT', '^ox?pvjRdjM/JOGmg!h#:w?<SZL_>@f=9{vl=rdM.6Dz2H,EBV[x}^kqBfNjPxjt');
define('LOGGED_IN_SALT',   '0m LeaRHAk^Qd.UIN]A8I6px&FW.&+5lCnQI5@[&P[[.|-ZM8l{E 7Ct2r2]y4U$');
define('NONCE_SALT',       'E7t_9GkKf_xSzAB<@6Rgbp3pR!D$;H;X)#jS{Y6vKU7e2#O+FctVKbV&gUFarCV(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp472_';

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
