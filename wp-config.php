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
define('DB_NAME', 'ncc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%*!47@  Xzpj-+1 B8:5XX#R1K5Ur5~r,di4sn < mR|)<x4`Ij2PzKZ/n|O|>b)');
define('SECURE_AUTH_KEY',  'Scp&Be^,SaHro4q1T[eA@s NL8GMY(E?~f7Q++ekb9M/Ma4];6%&7 RF |_~t_ct');
define('LOGGED_IN_KEY',    'YJWkdq Hq`+&S[(=y:nQ+I+O19mtrV/C|r )!4-~|~ZUWKJx-5rUpk}$a&Pc{7|#');
define('NONCE_KEY',        'OpJ#l !AU+h,}RWq6E4,v}fxoh*yB|Oe7&kY5sAC|OA:-{H+ H259qi9^|W:NCk ');
define('AUTH_SALT',        ' 0,F<,u:*wU:F<//ZEQi%8?uH}]Pd.=U{~n0/k5?QrQ3os5)D;4tcunU:F2T~X9+');
define('SECURE_AUTH_SALT', '}|w^+QGEG>hwK0q;cpuP!WznxFlwJ+!<o]Kv=Gh}M4yi0aG=OLE:aI-PrB[+yk9,');
define('LOGGED_IN_SALT',   'u>MgJlRyv*TgT&mo}f$7P8vn4{m+T_oI%FX{hb;!AJO^b0v1iVcgb1<kl}~370i`');
define('NONCE_SALT',       '3<LcVH!d-GI6I}[)a+NF!l-QjgR{c 6soc.D.KO36S(_|Y|z0BSTr3#|j|UIc^0b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
