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
define( 'DB_NAME', 'agencyDBkpbpj' );

/** MySQL database username */
define( 'DB_USER', 'agencyDBkpbpj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xsMHB8mgb' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'M$}IBcUE7UfYvnUMjcz,@nj^z>F92PHeaxpaSe+t]#qi*x.A2.+6;LDP2{HAbTqP' );
define( 'SECURE_AUTH_KEY',  'my<E6{.A2PHT6MEfXuTLiby<*jb$u{7^y<EAXWhawp#_slw:#D9_-#D5SL91OH' );
define( 'LOGGED_IN_KEY',    '~[KD_91OGdZD5HKWtlaSph~w_le~x;#D_-1]LDaS6H9WPmiSLial_+!@4}JCN80NJ' );
define( 'NONCE_KEY',        'eALEaTumWPmxq<.[!80NZRC8RNZwoRKhd-s~oh@w1[G8_:|C5WO81OZSohKDdWt~w' );
define( 'AUTH_SALT',        'VC5GdVwoZRo-s[|ph~[_95|~5:KWOzr>,B3QJ>F7UMjgJBNkczrgYvnz0>sk|@4}J' );
define( 'SECURE_AUTH_SALT', 'jvr>^Yvn,@70^z,B3QJ0>F8VgYJBYRrk!ZRog!z0[z|@4}JFLEbmf$uebyq<*{um.' );
define( 'LOGGED_IN_SALT',   'NMIfXj^$mfq<^6yu{,3E<E7XQnfIBMjczrfYvny>rj^@3F7>^73QJgaSpi*+2' );
define( 'NONCE_SALT',       '7I>FQJgcMFcUr$v+t;#D6H2]H9WSpiLDPme+tiaxp#*]um<*6HA].A2TLiaEPIfX' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
