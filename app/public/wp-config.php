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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DC0kcVQyfXI1DkV0eG0zR6jJQoY/dR7GcyTEMi8L4SVROYZOU9iFMkJUDh3LNfRVdqgm8EhNV0NIwIcZFm84AA==');
define('SECURE_AUTH_KEY',  '42p80y+h6r1fx37y+1UEs1q2WsIwdCCfIXwiNmX2uvMnH8M0z9PUs4WCJnKbyq7lZA4oUtxykyLSS1A/OwrrXw==');
define('LOGGED_IN_KEY',    'pOodgL1X/tQyQTmiwznewa6prnm2Za5QzFZkVktzAkqExbktp+RsgVxyMW+j4V0QRJRWD65I5Ts9klpJqHNKjw==');
define('NONCE_KEY',        'uJBzj6CYZ3gHK0+vbSop234sL1y3UNmgEVHCnkUs21dPhyDHPgn/6te0l7Yi3cmVqg8o951Nk+8tW33j0+ln0A==');
define('AUTH_SALT',        '/TKeEg3hSsntTRC9w2g1Jzc2oGLBpvvBUmMb7yhlKbb6k/ie8NeFEcV16T19EzlYM1DB9iYvtM/B3hC66I0dgg==');
define('SECURE_AUTH_SALT', '8a0sgcfriTiy9lBKl0JIV7ctH2unuseFPGu76E83yBu5kAtj6h+rLYj1XrOh6j5N5enLmgTRTt1lbxh5VmdBBQ==');
define('LOGGED_IN_SALT',   'w33rQnju0mEWhaJypHDiNBwnrzuvuzFnS6jeeiytgZeUXRL2ZjhYx9wwiWbS4siWQjaBywBwEWJoRalJalt9GQ==');
define('NONCE_SALT',       'uQvVm5MmF1EXVNYlGfw40QbItpjkjnrZCBOUtLQLX/a4Pmii5UC8cyPzCdB68yNmtvzwTTyoE6tABr+PhujCYw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
