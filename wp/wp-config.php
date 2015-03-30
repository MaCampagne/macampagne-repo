<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'groupeac_wp2');

/** MySQL database username */
define('DB_USER', 'groupeac_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'E&XH9T]DTy51*(4');

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
define('AUTH_KEY',         'UDyGv9mWjDfFrLYhE9RVELpvlpj6PlBjRbASYJQq3DQiaCUgEbHOxos0wS33fyMQ');
define('SECURE_AUTH_KEY',  'jcfKMhpVfbZle56JcUizKWqP15zI5WUTui69RTVgeaUEQhlFi7i3cR5sfRhhg3gF');
define('LOGGED_IN_KEY',    '6TNtXVWfxeq40uXO9wpmUkNQAB5jogCSF111wA3lwqrfFYDv3aJzJdGnCoEKO0vX');
define('NONCE_KEY',        'iN97aDkRvIcX3uMgUYoDJxpvXrI4C3elds988ME3nJsgXV59EYTZtGoAnxwQIfAB');
define('AUTH_SALT',        '8Mv3Iv3rNe02xfspQiEGqnGMV0kZUwSgXEmQBn9UZlXBT1s2LPxi5jKMtte6hUjP');
define('SECURE_AUTH_SALT', 'SpvMP1PMSfGfMrGmoCRHokSpirxdTKATKumRgVA5kFrY0SK1VIBT3oukZfCr9f4f');
define('LOGGED_IN_SALT',   'JFC5m1yxQGtWf55n88NRZ6mTWrkXZrLLu31aBitnkcEHh14WbrNUnuxuQgz1cw5j');
define('NONCE_SALT',       'QwgYgqnbcBDPNI3i3Ie95sYXMKfU0Gn4haQa1L3Old2VpTPIvExQ9XUDInEtsbtc');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
