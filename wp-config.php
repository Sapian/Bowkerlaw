<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stc');

/** MySQL database username */
define('DB_USER', 'foot');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'myhost');

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
define('AUTH_KEY',         'Q}s`63F ^c/>^B|l}`!?.-fA)_{Nj{SdD;=0%gx1%c(!Yc9$*#:0Rn)|Jm`|+LHZ');
define('SECURE_AUTH_KEY',  '/YwRU}L/qx<2h,^MT5nGob^ p:NjN#Bu^#M}X5MwttiXJ|aKuV6(f2:.v;?_|6!v');
define('LOGGED_IN_KEY',    '=b#F4tyaiL_ ?knYZ{CJr4l|UxqRb,O%r#m[2{kB/Z$A@>)ghC1BMLf.m8cY/}>I');
define('NONCE_KEY',        'he$S[rBTi+SoK?3u7:Q0x}en^a3@yS59.1xXL/M7&ZYJz736cDHF.PgAJuSR*X=,');
define('AUTH_SALT',        'K.wV,e>!Ue:VL3.(jAf[xA_s;IKo/|)EAZq-=<eQ9NPKd~/CKu)|NTXe_?J/4>`*');
define('SECURE_AUTH_SALT', 'sa?b?@@[Bls![Cz7|oh+]8NgDj+n5hhR6nW-8+>[a)qcKllz[lBU/G8%F/jPsDdG');
define('LOGGED_IN_SALT',   'BS7(V{fCYK~CA3(#rM5cj|:^`FNfqQ6/TZ=.=[0HojRUXw(q Zu[V2pDD6|&rKXp');
define('NONCE_SALT',       'pvR<W]jxIQ8qrfMR.$G?_~~lXp4hcHzrv7e)>(lk>.FQx|C$FGt^ZO4Ow&sUaV_^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dfmhnjh_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
