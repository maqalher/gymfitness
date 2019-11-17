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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'Y6/Zm0]7Dc2v[?L`bjwiv>9BEYzK:+4T?5tC(3;3v*xodC|b]pT#|MEjGCV?%[7,' );
define( 'SECURE_AUTH_KEY',  '9zkM![y~1+;$}*:1/{.`,g<9?kO*^NW?ck?Cpr=#YgiFq4b -Z~Ks:|zr7t}-lPi' );
define( 'LOGGED_IN_KEY',    ')v6ye7]bK/FL8 t[g3({7H0+]De59aGl)(}7be2R<w`S1 y?v)>DYrY2/|PGX~#K' );
define( 'NONCE_KEY',        'F=NlBKkRjtA`h1=!fc9Y5O. N|0FtayXv/%|B$cDLt.)t{Lc1g``5A,J?yA=AM`p' );
define( 'AUTH_SALT',        ':d2O8pprM)^*S f 74Hw|]6]d>Y^Pp}Rh6F&v]<A(+5YZ+mq)]&~jd&4~Q``KII=' );
define( 'SECURE_AUTH_SALT', 'Y3J^L]7zQ:pjf.^2o.u1X9#%03{lGL?txLGqAO%3-=,N{sZs f;} $~p7)]*<Iuh' );
define( 'LOGGED_IN_SALT',   '|VLE[xjFrGc^48x%M,z,b9I~>60$ms3W$bG6-zK=#s[/q;#/Hi;rh{,:Nk6E=|,j' );
define( 'NONCE_SALT',       ' `Jlt#-rEOD{<QEA?mH0#U.CKivj1_bniR/2z{ I++!SY3:|X~yBArmyOYG2E{hG' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
