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
define('DB_NAME', 'wordpresstest1');

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
define('AUTH_KEY',         '-&NCPT[Up]Iit+&;|UVr1U?2 7ZSwYli{P%xI]|$Q%WMpE0(~!wP VV9`i)eP<W)');
define('SECURE_AUTH_KEY',  'jhWfrFZ$tQ:$hpScM+s|_h}XK6@D7f3tkM#vwqBTo&|d*Zy(v0{ D/-z8`{,TK`}');
define('LOGGED_IN_KEY',    ')z$`bCYNi^SLtoR5pf!,tSY ^k*j#wm:bV-*zbKT ,c{:w`3r~1-v8Pvaa^hTRHK');
define('NONCE_KEY',        '^5l+fg8q}Iz}Ajb{WUS8(z|Z4mM 3:0OP]$ahKGbJ<oCrP6UdAb-ZZxCdha,0d&D');
define('AUTH_SALT',        't-]u##?Um?N3)AB6~,^1$3h_nPrJ5Uy_0+oR)d6ghx92t>}<8QQG;r5S,d=&{`_b');
define('SECURE_AUTH_SALT', '{q,.ET/88)TOrk9c4SlRE4Imvg.?ae11Y2DaPBv%itgs}&H0#*~oR9*b=Oo,A~@H');
define('LOGGED_IN_SALT',   '>*v*U|OKv2ClKAb158zpj|#eMdZ-kj<mm>4q{k`` eK-zT_7R*kb/8T=O}ku)u|(');
define('NONCE_SALT',       'o5%=3q@sK*ui>je]AOxW[0:3p+YN>{f@Y^&cGJkL?|WPnH*LS^.]Y~rc*l?LkXQf');

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
