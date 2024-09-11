<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gvm-task-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'l8K/iw1qhmYXQQb-=nvQ6k#U^!V&5`W)M9:60}^H{(^H].#e(YO%>4ISC{HJXL1_' );
define( 'SECURE_AUTH_KEY',  'PtLvyrTdQY>%<VdqHnS2qcy#x)iiq NDv$y/#R3k>B=aJ~!ylty?g[Sk$F>Hv6XX' );
define( 'LOGGED_IN_KEY',    '0z3XX;B<+y ^a9,Ow:~xxr6%l!ryOLyY&O]%fYdNj|?9Va|yg|g{D8QH9$f7o119' );
define( 'NONCE_KEY',        'x`y?A29`/^dq[KxF0y)/lvL{ZK]=tx8z.YMVD7SUf`[c,Rs8ZxKzFi?]>Z*if3{|' );
define( 'AUTH_SALT',        'ySsg[3BmCW^5+`mkXr,tAcyy[oTwI Y L=Ce@S>}:BD%w9ucf`IIf&>xdt+{,j L' );
define( 'SECURE_AUTH_SALT', 'Fr4fCpgpa81+S~&99_?fMrFH04~- `_GzW]H]?}7 2.hb)9UbfA&vWw O30,7Q*F' );
define( 'LOGGED_IN_SALT',   '69~%>:P2p7g.lv^w@2r13yqEAwcsh&+P8s0IiVa{kb; |%*44}U=z=3@3<gl#>do' );
define( 'NONCE_SALT',       '8[wH?Q.~O*rx<[=QVm]!=Ntneq-?&Bh+{;>=gA9y;J4n*ey:eefQ^YD#LfYv53e,' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
