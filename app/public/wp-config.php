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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');
/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Gr2Apg9KETjfyzyD6qiZy9SRD7uDUK1OojtWKtiaQF7W4oZi9nYZgiRZjlp7rC9XSLxB4I/ipd8anyUWz8WRFg==');
define('SECURE_AUTH_KEY', 'ZLgmxw7HrcNm+w916Z5WM5tbGBO0E1s5r3moqgHMOjhp1JK5qvE/o43Q0yrRcEsQvka6N27GBEuqKBd07hLCJA==');
define('LOGGED_IN_KEY', 'IWNy35mtJanQYfXj4X06meCEMZPCoFbkPzdfvBzrAgH7NII0TD/WaNNJFbUZNS2lgCojnPdnnfXUXLiiAeGjgQ==');
define('NONCE_KEY', '5O9cjAJg8MOIP9E6RzD4Uo0cspI1tPHJ+YOt3L6jFYEoRKrSNEngfMWHN4SK5WO1N6N2AWEHrYuZ/d3dawrC3g==');
define('AUTH_SALT', 'sx70+LFLWePeuSBfW4TZBEh8kcKzXCCRZgD9eVZohYuwp/CNojDOXZPvgchVcnT16muEEC9pCqBra55OoyUrPg==');
define('SECURE_AUTH_SALT', 'cHH5sb07EcyPzboKJ2os1SDtRurDWA+yPLSrH8ox3pCC4LQgNvu3I/Zi/kA6XmA2i4rgLs/dm6W4Vt0EZj58wA==');
define('LOGGED_IN_SALT', '/L0ucpRH+zOvv9lUU2FTgL8+Jd8niHN1OHGM9kJHqbhINfLdE70/I6neO/2lwx44lS1p4mo/VIbP2xXK/DgInA==');
define('NONCE_SALT', 'aebw8heUpcpWbvs756rLNyxE4J4164OKz4iWyQ3Xq/n9hBkHUTf/nRiiksjNV2rGoXZ2Yxomyv0xTTVEy+XUgA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_wp';




/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
