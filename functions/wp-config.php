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
define('DB_NAME', 'shefy4pk_wp128');

/** MySQL database username */
define('DB_USER', 'shefy4pk_wp128');

/** MySQL database password */
define('DB_PASSWORD', 'i348s@p7S-');

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
define('AUTH_KEY',         'h3lbvcsdijed4hebxuuhmqlrwxgnjp0wodpidthqmitqwvxxob4pvsr0qflgfhj8');
define('SECURE_AUTH_KEY',  'aiu5cguefwspmk11a9h6ddcah6pfgoelxcgqfayfvqxxlgf115v62jq0dgyfmld0');
define('LOGGED_IN_KEY',    'mgc9per3kctgpxidclgskd1nau7mmwrhgos0ejplxwnlqvntj9htenosj8mkga9d');
define('NONCE_KEY',        'nox4hrbgsqjyvgw737cpwkkzc9pkwivxrpsfsoueucbaqv8jubttnbupuxldsn3p');
define('AUTH_SALT',        'rqwrbyy4p1orl4ijkzcgrafcojyzjvctocjcawlquiynik2oz6ikcm9xk529n1cu');
define('SECURE_AUTH_SALT', 'b8jyisdggiddpmuslz1pykpslbzkox2qlw9w0mpionfyrwaaidbzwdf3almssj1k');
define('LOGGED_IN_SALT',   'o8bipld9xd4srjcdvbgepicaopra7flhtiqk4mri0jdhnmx7wcuxkv7khf8w7ceu');
define('NONCE_SALT',       'udjj4yo8fwg7gnh5jszgzzyqvrouw0xswnjmds9c95mp4s2apvybwwtpaq6que6l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpru_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
