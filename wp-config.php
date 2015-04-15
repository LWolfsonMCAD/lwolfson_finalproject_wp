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
define('DB_NAME', 'highdramma_db');

/** MySQL database username */
define('DB_USER', 'hddbadmin');

/** MySQL database password */
define('DB_PASSWORD', 'hddbadmin');

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
define('AUTH_KEY',         '`&?kv=+O`}}. -^fq}G=Zs$@0K2y :z S3fXq)HCQnLJIq_%}[eel_v(o0]rMNy9');
define('SECURE_AUTH_KEY',  '?jnVXl,&v-I<KV:>Vc<%*ZSxExF~B^p+O_SQ)wPfNxCEe- G6N@V&C2f.|L.+<-M');
define('LOGGED_IN_KEY',    'Sg1Q rv-2R1 Pd2phdygJuZ-h#uw%PjH|D@l+p :D7RTEbVrU8Xn!zrtQu.Hn<r/');
define('NONCE_KEY',        '+O#^oRcqM!^ XzSVCEJjn/+ec^oj%I+t.9~=M-&lN[CU^(e>/J}!$-LA]Y{d9j~H');
define('AUTH_SALT',        '>[Nc9ew.QG=zz+>cz/=hhW NjyJMT|+J|Hh.c5~ay(^,=1++71-q*4tJj)-!*:E]');
define('SECURE_AUTH_SALT', '@j%z+s36^`h_#linsD]hO}lx8vz isK/8-US|t{sRI|Darb)1+%21SS?b=d-;uSS');
define('LOGGED_IN_SALT',   '3^n,N6I#^+EUcvv z&2^4U;/zS`M~6Yp(X3SEVsl>R]+jk=V+0sm1U-lfgnc]URY');
define('NONCE_SALT',       'ac-94W+eF[Y~SxI2V4?%|P9mziZ%Bk3>KqkI+d|]6Z:i/-d-93TRfD>X$.zNA-|S');

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
