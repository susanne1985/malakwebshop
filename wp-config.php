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
define( 'DB_NAME', 'Web-shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Sig- ]*hDL#n`q`.;;|rqO>u_xLIi@#X{uM23L`ACGh{xMT>;SPYc&x-SNkCnZ8e' );
define( 'SECURE_AUTH_KEY',  'UKpI}0~OVXp3f.2KypF|A&>^/oy*LsDFG_&GjS}b@)jlTDbi[~=w@W$i3kFWjeW?' );
define( 'LOGGED_IN_KEY',    '^w0]8]@6<sIg/P>8r{e!1cWz[:}nnnHymfA?V.*oMe`B<ke}Mx@[F31S[ZK3;W=[' );
define( 'NONCE_KEY',        'wFkc,o!Ba6s2iX^yEPKBC{n&~&rTD`pt%D+Y?B]!-EBD&=#OBgCD2 &SnwWOP$-.' );
define( 'AUTH_SALT',        'G[8]=..a{ptNIf:F(4Zo5LZ9e:6D^.n95*t^h48b:RKeW(qQJVe52d^@+g8J&cf:' );
define( 'SECURE_AUTH_SALT', '1d!W11NcU2v3MdhLs6(0u}-o0w<<dYR/!vx-e@Fq1]1hV$DUE0A@S)QuH#Z2yYK(' );
define( 'LOGGED_IN_SALT',   'E]q8UWEb(I`%Am|N243Qq4=4^|Iq<z~rmO^^?> B}%tuyUCO]a;aNMmh.cCz<W?=' );
define( 'NONCE_SALT',       'r>@)EaNmcemn]mi(I9LzxTh3BW~_M$YdVI3*CoBCPV81[Nv7-EYBp(_w0]S#z6:(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Webshop';

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
