<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'comerydewithme');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '(aQ iv`?(kmMJ7`?4kbt+`T)5|6=G{B;FXSPE@)8CY 9(O G#9^pX?CNjmM726c6');
define('SECURE_AUTH_KEY',  'u?uTPla!Z~4S_}eNJx{XPDb&b%+^lt^d]<}zNche%#>X)@+7JZ`cGC#74Io@$O.w');
define('LOGGED_IN_KEY',    'OR~!C9l[W3k`ZVDo-(1|h3nG<#yw5g4SO:{*xT~[Ay*(c[H$X!uk8]l+cIu-^f-b');
define('NONCE_KEY',        '~~Du)i^Y_?MQ{fINo!rsr$q8MlXP~=c!{3tPNX4K~rybve/YT{vQ:^_#u*x!H1Vl');
define('AUTH_SALT',        '`}}xXvevk|]`j>bAeTu|JU@iYY?_NmoG}#_Cs02JRtnBlq^X^F^GA-v$!a}.NSBT');
define('SECURE_AUTH_SALT', 'QBi~Es@-$>!kV0U~Wx! zO*zpKwC^5b,b@,JRMu2b,J}b|~LEnL}RODXw&U>UQ?B');
define('LOGGED_IN_SALT',   '{w4wDu=H!eRr|l-s(qy>$T1k%qWv.PFMGY& BVgh-CRn:H3trWNZ&H_}ef!= RK%');
define('NONCE_SALT',       '7+-EI1=[vWSZSUs&:l2kS3tTs_1XgY%Z^cwVG;2wdiU`r$q7EVT}a]*XCzVSTa)#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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