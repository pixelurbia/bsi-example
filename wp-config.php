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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/thinkbig/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'bsiprod');

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
define('AUTH_KEY',         'Y*dQ1>nKO+0<sFy1fho4cb]dA?1f.ONK}5ADIn(.}+XYvtz-.SH/# YTp3b-|W<Q');
define('SECURE_AUTH_KEY',  '4N5;I^:/x.c))UL~nZ#sCmuO^=|z4SGSuq+C]fIY6MH|%eqnyIB#=2v9@B^]pKwC');
define('LOGGED_IN_KEY',    '`/TENcmOj`N&~pGMd;xFC3Os#=zqbCi[`|#l@d}Ya,bdS2s(m(`!JATT|4ujBP^C');
define('NONCE_KEY',        '0NW$$$s8BccwN&]`OZ9mj(8tJS8W`w&TOUe@v8j^C _wT&Ul$Z.6W/_8fWDw8O!M');
define('AUTH_SALT',        'EAn$wf{thO0:>5D9J`Y7C+.E;;oYvaaY{ohIZ(XM9UASOe{;E6Ztc5t[He)lnVPI');
define('SECURE_AUTH_SALT', '8w2AhUK,E08MoS1Rhd|z}u}%3=/eCAsEuUgRtWML /GXT;%Xy j|${1r=nrS`K$V');
define('LOGGED_IN_SALT',   'B|sz/iL^pmF%O,`g=;$=j1>}r_7M$cQ-p)o{.3zR)LlKzND-qxdGT~wV|E{yLS%K');
define('NONCE_SALT',       '@$8=NzEI4V!_I #=/qUlWaCv`W7Z)#|NsGK<k|Sz,.6>tH_}+DbGdq30%WPn>8|7');

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
