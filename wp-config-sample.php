<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zp' );

/** MySQL database username */
define( 'DB_USER', 'zp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DB_PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%2iZWE)z[B0D}Hyq]VLlL((LsywG#PatqKlbV>J5.q SiC4>ty`jFL.PaQLX!Y9_' );
define( 'SECURE_AUTH_KEY',  'z5Tnc;2h#!{zP}U2m5=e Xn/]~gfjW]?Z1sp$Pz{NTl1^AA3`$~|1waUGM;}A:M(' );
define( 'LOGGED_IN_KEY',    'l&Xu2$p~| d7}kzq#O=&BsIi$B.PiO=m/RB F@>Yl~z{)/zg}#|0f{yPf##f^}*_' );
define( 'NONCE_KEY',        '2j0!Ve%&;,Bs$Fqbs.Le5Jh&K9BjOgnhs147^M5??</u9y|2~Iq#{cPdR:pH`acU' );
define( 'AUTH_SALT',        'iy$1c[|*$|BzF~IY(bvXdM,N;%KT9`j5OA>~SYpMkz%a&=7N^ 9o|cG!?63i(Iwl' );
define( 'SECURE_AUTH_SALT', 'T|i,!d!.u2rt%}muh/PR~<u,QHZN39`{.EPjaC~ixzott)a%6orpz8 hl#;P2TD ' );
define( 'LOGGED_IN_SALT',   'v!{UTd;rG~#]%Xz$/gf`a9v.E40Vf2hc-;bo@O5r?%A@E{>RZ_MA;=l|?of>jEYa' );
define( 'NONCE_SALT',       '08i@%Gq`Q]Mn:vCL**G}U>OPA>nQ0@;.AJg9P9=A_av{<:/b-/I|n3LR0$hI,P*o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
