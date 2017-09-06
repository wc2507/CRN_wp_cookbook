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

define('WP_REDIS_HOST', 'wordpress.e6dowe.0001.usw2.cache.amazonaws.com');
 
define('WP_HOME','http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST'] . '/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/** The name of the database for WordPress */
define('DB_NAME', 'CRN_db');

/** MySQL database username */
define('DB_USER', 'crn_admin');

/** MySQL database password */
define('DB_PASSWORD', 'chinarainbow');

/** MySQL hostname */
define('DB_HOST', 'rds-wordpress-crn.cyz4uolctbwl.us-west-2.rds.amazonaws.com:3306');

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

define('AUTH_KEY',         ']hy10!}8Sc~]+),Zw!MRZ#*%cw$`jW{?!-0+*i!+_dv?[0mPlbKx@sMq)]m.b59+');
define('SECURE_AUTH_KEY',  'F$4 Wt9U#Awyww!D:qm&VcN0FR]Tk?OF<fBg+}wfpjwQMlBF mk>6_M{coJG/u{e');
define('LOGGED_IN_KEY',    ')[l?s3!WIOW//7FrnHd@,|6g+XDT{^#f}|w3GKk2I!8Tc9,)sYb@razMfA-X2hbm');
define('NONCE_KEY',        'J H&iyX0%Vo=L$[Dzu(Bm_],1r!`w#$])4L}.py+QRYGBHwxf~R(`ZLJ<6p~-WJK');
define('AUTH_SALT',        ';g:oVA{Y[&^ssm3.z*JL9/Y6l]#!^/Z3{He7WfCl:l#skqROzepGI>v98 iKfb$@');
define('SECURE_AUTH_SALT', '1ph3S/2b:GJa,>zyi8UYq>~+n5)#iEP*7v7|L0hd_U!Vkz:q=+e6*GZ~BKVA}|Bq');
define('LOGGED_IN_SALT',   'qe*Y.$1=ee{|(4acjboXSD%|1Y@S0-Hux#c7s~3a#KDP&y<@#er5Xpbu*,KY5J99');
define('NONCE_SALT',       'maSE$qZu*I,w&%Ex1]-dR5S)%<TeB2E|1-A4>/ I&#z`}&R6,v|^IvRANA0&pl8C');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
