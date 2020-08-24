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
define('AUTH_KEY',         'cXuUKYjGu+XWsborYtbZ8lkqXwJG/hhd7aYK3INUtaOELHeIGFqbUNPX8e0rmK6gATI3PX3umXX2f7uuG1tzWQ==');
define('SECURE_AUTH_KEY',  'RrFiqVlsK/lJlNKnA9U+QEobX5KQq3ZyL+1B1TegETpZjDoPGqjyiVnIj2HFafQq83eRZUZXdX/QUO3GSIjofw==');
define('LOGGED_IN_KEY',    'kc04zi/+y2YTxHa/XYXvnW9CzEPp5k8woSGhWg1h8q8Mq+z/chGc6N+4rExnl45Fk2hbHgGY6/8w+mV0No5UoA==');
define('NONCE_KEY',        'UhQSIgFrArk47LQQhBbo26ESMLD0dkR5OrYkCMQxXSDmn/A3OBtJpBabgUE1/sVQgOc72/xpO05Q4lCo+xVFsg==');
define('AUTH_SALT',        '9PrYaJDka/e2gc3UyYIi8i1G9DISfgIAdxZp+N6YMOTqv8MpYUikb9uCTTrekcrOj+AfrVufywt2U2WDp85TBg==');
define('SECURE_AUTH_SALT', '/3Wkp4KTkJQzvOxmHYMi8x2t/PnS/pYiM3kRh/5cWtT7pV+uMD4XcZXASW7FRcS1+d2IBFc39HWFkda1unuCjg==');
define('LOGGED_IN_SALT',   'q135ICYl2pw1C0gL3941Zff6uRf/W9DO8FP+fmXIUZ7XrxK/lvykGpUp/Mi0Cj5gEhy3G1O8K8leRTtnib0rtQ==');
define('NONCE_SALT',       'G+qEVZgVeb0vzZqFzAhZpL02HJdoyKy+RZFdvCb3gbTWwPW5GJRft2SUmOOU+exLIpDEwfuTl3PFB4A8qmCMvg==');

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
