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
define('AUTH_KEY',         ' f$xk~.h.jb!!/.~y1@{XSeZYoUP[A3?a8ZL9(~mx*.R+3k/Y[XIWIg-d{hbq~J9');
define('SECURE_AUTH_KEY',  'n%.?oI9zHSHwm3b%Xq1J|nK[1z0)+*,.()U+^f{TD0<;U*|/)K<H4Vjr{;.E=hEW');
define('LOGGED_IN_KEY',    'nJ[RbHaI^r<2_RI{Rs$Qy2#roR8;|tqJ~Q7?teWU*KMG?UfT?wR^QAjSKI94`bDi');
define('NONCE_KEY',        'TSgcJ2KhE! jz#239#d3{Y#NnX{&cg]xJh]WTg-rz~%uP3l +{S0VCj[c|0~5$Bh');
define('AUTH_SALT',        'z(0:P2]rUkdHp3IlwR<55e1P5B-M[v5XX]{3X:S~.Lg@(&[z:$KQHx/l3k0dGu2{');
define('SECURE_AUTH_SALT', 'Y?^2=vpJ^}P!Q6t#:DTh;>iFxZ`3GNBTW/o3P!J~g%NH8as8j3zx5K@qd}~m#Leh');
define('LOGGED_IN_SALT',   'g7~=9jI8_3t:1f)pn~%dW|3aTOcV7</~w;9rr*V|5D|j>%Sj|H+ZZS[c_JWh]O;]');
define('NONCE_SALT',       'U!Gl/[<xlNlpmfeL$ym3*{!rZ5kFIlA85(;.GffApkL_Dsrw0bImKv_V+k^](0=&');

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
