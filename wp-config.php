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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_portfolio' );

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
define( 'AUTH_KEY',         '35,R;Ee_{<y[o?qoWJ/lXYrW!!`EA{wx+vgNrB:J5&T-saAC6Pf)AqK6R|X$[(f>' );
define( 'SECURE_AUTH_KEY',  '=yDx:K1H*p~0kH)7)U$,b+9)v3l9|T)661w=2YiQiB(J`P}&o5(x:Zd[_,Y^gg/M' );
define( 'LOGGED_IN_KEY',    'Uj9xqEU[J`Tq@{8VmtgvVjI[va2`Wyg=A|}JmlE)Y31rr/HRr9SP+m#=rdr~aOY[' );
define( 'NONCE_KEY',        'PkceZ{Aa`9Rd8c9qt>5BAec*I-1i/]0J4.=b82>/)`nrtt0;vMk)?IG#E`(d y54' );
define( 'AUTH_SALT',        'E6hzWl]C6W)NqX-arH,1:}@PzP,D+ aJCQ/Hb8lz)blF#iUoH3&ah[4bmSHO)!|4' );
define( 'SECURE_AUTH_SALT', '4;@Ld(&&TXe<r2*#HxZ8wRvZkn,eIBF*kh9P-FM/tYzT@B3fBJzB24,]]4`IY&~T' );
define( 'LOGGED_IN_SALT',   'UKf-t[%rBY!m(`_kXGi8AON*Q%b:b 1x*k`m.*/Lyt-HB;|VetXmtANg^0<b+3V]' );
define( 'NONCE_SALT',       'Ovh{MORf*>jZuZrTMiO{M&ZB G}29XaG~wNw~r,#a]=371g,e.2$A!}jeXvBx0Jo' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
