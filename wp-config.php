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

//define('WP_ALLOW_REPAIR', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/africaodyssey.com/httpdocs/blog/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'ao_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'exi0io1ohF8Ooke');

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
define('AUTH_KEY',         'et KY%=aO5=&iKA&VSNry.!@UxhoQv|-dIhV|j2doo3+Wk?*%Pr-_`H|x)P9RO5G');
define('SECURE_AUTH_KEY',  ';@@ru,rMm4I)uW4qL?nm|<mR;VD9Gv]=fS`;N!eN_o7/n23Ul|rVtahuf~7^#3r@');
define('LOGGED_IN_KEY',    'afimpF!sm#&P;7W)-`Q%T%9>bJhY$p|^ZRi8[y/v:-)-Vnqb!9Ix+k?7)c|xj+SI');
define('NONCE_KEY',        'a]ClZqjIl$&U) 7XkP>/`E 56+Cs39|-sX+6hQ`F$rzyc-Ys:kCG):S;Dj#ul6?z');
define('AUTH_SALT',        'i<kW|v*H`,0x^tSu_N_|(I%XEinA,(.&|LUB<|ls$g-HAJJnbsYHDCTJpbv)&Qyj');
define('SECURE_AUTH_SALT', 's!wzs$3&v!B3|CQ,]%]y]p{#z|llhxBO|A){$btf!ET&63IxN9t&t/|q2kbo7nfP');
define('LOGGED_IN_SALT',   'Cg1d-ud%{+%?+sDiJQyIG?qdYSG1wX.;f9/t5j8vS=P`tJVvW7;eF4mvzrn e~dV');
define('NONCE_SALT',       'PcRW[eD,@TC}_:cQvbU3FG.[z{I +Ersy}H_!2Bg$|*iD)qMf-Dj%z-7|v><?p-f');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('WP_AUTO_UPDATE_CORE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Sets up direct method for wordpress, autu update withut ftp */ 
define('FS_METHOD','direct');

