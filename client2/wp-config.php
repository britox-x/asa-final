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
 * This has been slightly modified (to read environment variables) for use in Docker.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// IMPORTANT: this file needs to stay in-sync with the sample config file
// Use the helper function to lookup "env_FILE", "env", then fallback
if (!function_exists('getenv_docker')) {
	function getenv_docker($env, $default) {
		if ($fileEnv = getenv($env . '_FILE')) {
			return rtrim(file_get_contents($fileEnv), "\r\n");
		}
		else if (($val = getenv($env)) !== false) {
			return $val;
		}
		else {
			return $default;
		}
	}
}

// ** Database settings - You can get this info from your web host ** //
define( 'DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'wordpress') );
define( 'DB_USER', getenv_docker('WORDPRESS_DB_USER', 'example username') );
define( 'DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'example password') );
define( 'DB_HOST', getenv_docker('WORDPRESS_DB_HOST', 'mysql') );
define( 'DB_CHARSET', getenv_docker('WORDPRESS_DB_CHARSET', 'utf8') );
define( 'DB_COLLATE', getenv_docker('WORDPRESS_DB_COLLATE', '') );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 */
define( 'AUTH_KEY',         getenv_docker('WORDPRESS_AUTH_KEY',         'your_unique_phrase') );
define( 'SECURE_AUTH_KEY',  getenv_docker('WORDPRESS_SECURE_AUTH_KEY',  'your_unique_phrase') );
define( 'LOGGED_IN_KEY',    getenv_docker('WORDPRESS_LOGGED_IN_KEY',    'your_unique_phrase') );
define( 'NONCE_KEY',        getenv_docker('WORDPRESS_NONCE_KEY',        'your_unique_phrase') );
define( 'AUTH_SALT',        getenv_docker('WORDPRESS_AUTH_SALT',        'your_unique_phrase') );
define( 'SECURE_AUTH_SALT', getenv_docker('WORDPRESS_SECURE_AUTH_SALT', 'your_unique_phrase') );
define( 'LOGGED_IN_SALT',   getenv_docker('WORDPRESS_LOGGED_IN_SALT',   'your_unique_phrase') );
define( 'NONCE_SALT',       getenv_docker('WORDPRESS_NONCE_SALT',       'your_unique_phrase') );
/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = getenv_docker('WORDPRESS_TABLE_PREFIX', 'wp_');

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', !!getenv_docker('WORDPRESS_DEBUG', '') );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}

// Additional configuration from environment variables
if ($configExtra = getenv_docker('WORDPRESS_CONFIG_EXTRA', '')) {
	eval($configExtra);
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// Forçar HTTPS no WordPress
define('FORCE_SSL_ADMIN', true);
$_SERVER['HTTPS'] = 'on';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';