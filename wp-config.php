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
define('DB_NAME', 'kurumi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'QSD+.xApa,Uzm^+V]+-2rUh| m]..=,0aN|jSgbUVNT4RPEh)T6AtoGQ ?J4!>.0');
define('SECURE_AUTH_KEY',  '5}M-lsCq}7X<MEl)jGkb_B,h3OGv37OiX-j|{01H.x%YE~/hy&b0>?d!!O!zvc6c');
define('LOGGED_IN_KEY',    '#L+)T5ZRi8H$q5=0DMh?3*8[jwEGXK8Uh>]iByI+D/wRsA^6zfp{Wdx<sAtin7k`');
define('NONCE_KEY',        'Yeb exJ])of.9T~,6rXV9$ApG!J-W x|#jX3RFXji:^GF0Y/Z3m[B@*Ow=.&reyJ');
define('AUTH_SALT',        '.MHdqdGp0)S ,L~fOGRP n3BJ_:U;K@BC,93raF-c/&W!jhd:A]1(-+TJCT$WUw+');
define('SECURE_AUTH_SALT', '.Is :kfZ@KaqFTrwZK6x(9hc{Bo<~ge-suso;%Y5){u+<%BfJd!xYqT2HHv>0<a*');
define('LOGGED_IN_SALT',   '0j-p<v `n5a<F%LxL[{<7qk9#h54+8tvAq-Ck6Eq~.5mA0wM-29<J/|oh6*8^D-H');
define('NONCE_SALT',       'wZul5dfMf:iX-ox7IWYI1QH$!Z%FY}+xh87y/L}<pi3$ ~u@^uca}#7@tx&a+D9@');

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
