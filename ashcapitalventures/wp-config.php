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
define('DB_NAME', 'ybuhphmy_WPJDY');

/** Database username */
define('DB_USER', 'ybuhphmy_WPJDY');

/** Database password */
define('DB_PASSWORD', 'C%7^<AFQpLgdeD59<');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '78cebcfe01af89627fe3578818c6ea25c5db909dfd5675a44ccb78ab797c4492');
define('SECURE_AUTH_KEY', '209f100007541fbccca571a097f6ea8de3c2441f7001e2f1ff5b12b93b9a3023');
define('LOGGED_IN_KEY', 'b9642a40df3441ad778f6ae5e4b011883cb0dbb3ee3c97f721312f50dc7941e2');
define('NONCE_KEY', 'aeb012dd5907a2d2792f44a75737dc968f0e2e9fb6eb44a3077cfa105ae1cf8f');
define('AUTH_SALT', '60748b65a6be4a8290e5723ae83dad3920a013b04fbbae7e5d2306e6406d7897');
define('SECURE_AUTH_SALT', '3f77fc00ffa080685613f807ffde3bea1ca385eec7c6b340841aa2bc4db86260');
define('LOGGED_IN_SALT', '6f388564670db60cefe5709081808f62b5b7bf0c4fbce0aa7a500434879ce443');
define('NONCE_SALT', 'c1b8590ca82aae734c376c9cae2ae50b342b5fed6c7393aa496878c52e880347');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'i9q_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
