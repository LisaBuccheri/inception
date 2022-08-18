<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MARIADB_DB') );

/** Database username */
define( 'DB_USER', getenv('MARIADB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('MARIADB_PWD') );

/** Database hostname */
define( 'DB_HOST', getenv('MARIADB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qM,m:-FnF:w+Z!@*ocM^eVfHiRyE=5^#=VHRNNyS$+pok@]Xin&|7Yc[8$U 1P|V');
define('SECURE_AUTH_KEY',  'GkLQR*9ICf^?AKubwh32&4bBAhXs>K1Gbj6fwq&@L4CS_I&t4!|IR-`d,Zl8(9I-');
define('LOGGED_IN_KEY',    'k3##!})hA 9xiCb &vi2L>ZkBOaJZ?8?y`Y{+.-p1(l]Lz5BhQoS9shG:}##)#3|');
define('NONCE_KEY',        ',HCZjnd|2Dt.+H=PuS3bXr.=Fz{E+xJ%>_C#}#8<-.87Ps#jmm;;K+;9a$i,C@zm');
define('AUTH_SALT',        'Q+EB:YqRH?h%:H)3ZYg~cspxv)B0 Xpc5Q@@3{1|Iq&Mzn*ba_x8zas:i:3LgmLC');
define('SECURE_AUTH_SALT', '}k},3Bi+ d2~Oj(gVu9 Hl<!tt6gx%64%0LJjD9!4p=NHdPl.1+D_L<VX=a+=1@ ');
define('LOGGED_IN_SALT',   'I*jt.*UO#)zA(jpQ?JCnE5,w3V9@s/s@tIBr 2jBKv>a%4ukBv|;f^OY%_yM1hd3');
define('NONCE_SALT',       '-9~jyvetreKgSww9na:|~cd3wEW7,HN1H9r1_[I${C<+4,2/5OnEtunL>$ASa 6o');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';