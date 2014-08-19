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
define('DB_NAME', 'my_wordpress');

/** MySQL database username */
define('DB_USER', 'manny');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '-fV-TA{3+&,QVa/us$TUX~k0Ij4K%c6@J/=vlh$,WG#}Z++8ir&EOwv7}45g8.4F');
define('SECURE_AUTH_KEY',  'jkv**(/AB .F+ NM1<$ca-n=rCV1>|I+m$?Syi]WZI^RG{-[^w.x[/u&C.]-D4OR');
define('LOGGED_IN_KEY',    '7w)+QbYxAh|<2^D_ d5j72wi|R)9-!`$/ZZXcj6Z=e6iMxcCTs+`!]F++ci*5.$V');
define('NONCE_KEY',        'Hyq=naz&cILpa|Z:*<Cz<sx-$q9g~z=>c`z_6k])~c:?dE2%5l~#M[hQY$2+Ag(D');
define('AUTH_SALT',        'KfBlS?9H>dOE(1L?U7UXypaK2|L67b[n5m0K8&3Pk^zAD~<4_w@@Tn $Ei|sc84-');
define('SECURE_AUTH_SALT', '@8OGU^{<Fk)U-vmIbE:,K[TsTl?1/*SwL+}}~^C|}A$2Gw=.-J9`-1!(T:r+/VfC');
define('LOGGED_IN_SALT',   '?YITS=RSXsRkO8r(!}K,:+qp,zoZ )LF;_&siaoK>qWx(Z.%O;fUN@=eEJ*r9Uf%');
define('NONCE_SALT',       'w:-S_i[Z9dZ|sL)NjE)#pWT>`Q_B7q$`e>+@WFPL:hv:][s|(-v&}kG3|mmjS<F_');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
