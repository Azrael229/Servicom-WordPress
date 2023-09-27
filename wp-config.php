<?php
define('WP_CACHE', true); // WP-Optimize Cache
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define('DB_NAME', 'servico1_wp804');
/** MySQL database username */
define('DB_USER', 'servico1_wp804');
/** MySQL database password */
define('DB_PASSWORD', '1pBS)5m3!x');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eucttwbiee4dqjb2uj84rhc9bdi7fbbgq1ptbmhqwnsarsunhquucicy6rr9s93i');
define('SECURE_AUTH_KEY',  'm9e14ajswabk5fckp2rgvzwwsw7yosawmljqmmvaehdrlzrj7xjx5n1rfh1py6tg');
define('LOGGED_IN_KEY',    'c5zmxqcl8hshbwgerdf139t6idym6ag0ebbtz0fppwemjyp7aqwi9jnmr8phbetd');
define('NONCE_KEY',        'zyeaojllm8ss2uath0hx6aovg7ybsutxwmvgauwkv6z5jf4fill2fpi23fbi81k8');
define('AUTH_SALT',        'fxvoc87a6gdv19rxl3wsb5cxmgpmh12jitjvcyrq9b1gda8hz1nbyi8piyd9mfzb');
define('SECURE_AUTH_SALT', 'mg01wdtp6y5llyhx6v9jhxt6yeftkcsnhkclqdt3mqhov2zvrpu9pq3rjmpv9exu');
define('LOGGED_IN_SALT',   'uenii5aav4rrrz9xewjvuqmndnynh4dlnsfxhqit3jtffyqgaelpzrwpmj7hqdhu');
define('NONCE_SALT',       'rbjo9kvxpxqlnnur5qthesaz6r4ksihmngliv8ktjn2pr60ykdxb7leeu4w8ifjo');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpm9_';
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
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');