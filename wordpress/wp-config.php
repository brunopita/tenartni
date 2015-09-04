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
define('DB_NAME', 'intranet2');

/** MySQL database username */
define('DB_USER', 'intranet2');

/** MySQL database password */
define('DB_PASSWORD', 'Senai@115db');

/** MySQL hostname */
define('DB_HOST', 'suicobrasileira.com.br');

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
define('AUTH_KEY',         'hV&ewumDQ |xu#<{hYF->a|-T&C^9Z1*W9A(/o]li,? _oYiB}:$hh7DY|o|nYd6');
define('SECURE_AUTH_KEY',  'pj]+m8mq/u,,7SzXv$6cM!`W5{&?d+wn}yfRAD >gSZ{TF5%?u.80vra_+M7;MsI');
define('LOGGED_IN_KEY',    '#3&Lp:qwgM02=!#.:|YVx.-_<gzltZLN+s-XSoiG^4>4_S-V!V,Qs&=<0dd[Z36`');
define('NONCE_KEY',        'U/zy$mG/GlJ3Q-azp7s/!rR`CJ-4Kms4?4V(%?.KIdip5f()*d~|U$X<HrWYRCu0');
define('AUTH_SALT',        '3NcorkF/q,c|>Kif1MM3>ZNcgErpiEE>!.e*[B;DZAC]:rHFIdGET%&kxv+~In^]');
define('SECURE_AUTH_SALT', 'F64+H>{6(EWBZ2N6_N+r{H%WWsdy/(fZd<|)rV|h<NHt0~OhA,emmQy_n9X|?uhq');
define('LOGGED_IN_SALT',   'n%%zI7-_#>Y.WmG{eu/DnI KK-@$1B+z(s&h9(Nv-Od}M4LoJ!sq^E9n.S97,8B>');
define('NONCE_SALT',       'n 4zu.^Tjibav)[33g>7yk>#(MP-R/w]fWyI*.Sw=vGR(c.@V9z/Z_s-ct_>;x~s');

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
