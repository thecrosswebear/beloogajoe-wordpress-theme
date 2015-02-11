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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'G{hR&FmwW$:-7rb/>IWpS-yk_zHI<pT^oxl4fV:=:YE1Xl|:4w!}QtS6oH/40mx@');
define('SECURE_AUTH_KEY',  '<}K{Kf_$cuKJPGlkxhS,o);1dx_zW;llkk=,U9X=7*}JK0r&qT?q<{Q`d|2nSr{Z');
define('LOGGED_IN_KEY',    '0@]7t2j.~c|$Tq1g9.]roPtsM(QHMU{1.t|hrts%001wQ IBo>;aX+PBTnw([Wrs');
define('NONCE_KEY',        'oxv+s^NO,1i-5|`)X@-}}?{l/|:KHL>wE WVU:-#s{IdkuD*-_pRW9c]^jpozh&Q');
define('AUTH_SALT',        'HN}xuk(eFrMl5L}[*:>[!6*E+kM+kQz(|.y^%!_p=+|jW!_OOu^9ik?LYK!3tS[D');
define('SECURE_AUTH_SALT', ';WeD)o6P~>,vP-l2-*Ws+#pXw+C+]`L>-(-Dt%Y-La,juJqSawy5Q]1eR&z.&Ig8');
define('LOGGED_IN_SALT',   'kv f] H/jyRwseI)&ec^5a0h?I9@OIAtX+61,mnn#W;@]Y[hBQv+p$27NMI}{OED');
define('NONCE_SALT',       ',eig~3[HrBk0To(AS3FK[)gwA+,Qg=WCRJ@VPn^/JJPW36*_w*GpP{%5ru>n6+}P');

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


define('FS_METHOD','direct');