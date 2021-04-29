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
define('DB_NAME', 'wvtestdatenbank');

/** MySQL database username */
define('DB_USER', 'wvtestdatenbank');

/** MySQL database password */
define('DB_PASSWORD', 'wvtestdatenbank');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '7B*w3IpgXF#166hY1I3kkoGEUOa3hYnmRvIh*EwZLA8jvWFs2yZtWtyGhBElm%ry');
define('SECURE_AUTH_KEY',  'iEddp7P6eKDKEbx4^4wn27aB7@MMsylh9@w(J1lMRqTjfJtWcBl9px3Xbzu9AkR1');
define('LOGGED_IN_KEY',    'wk^ZjBLgmpZnQA(AYjwqqkTjA%eoXc6yxzCqbQcPo1kQSL(!vUrpT)lQmRb9&&Es');
define('NONCE_KEY',        'txrk7FD@iSdHykfKm#(!u9oxkxRcHX3DJ9O^JO)pkMF9MX%YIf@#cYFx5FSIAIbJ');
define('AUTH_SALT',        'hvKS*BTSt8azdLC23%4^%FHygBCchWvjsEgKzmD%nJarc3NoafPYlJto#4VHIHwx');
define('SECURE_AUTH_SALT', 'Fa)^QJ)HLHW%VjQRpaoXPnP(Jq3N9v#^5pwZa3YQ4tG!cPaeX^z%p5VgRpAst)UA');
define('LOGGED_IN_SALT',   'qK1G!#t5hhmn&XTmNIY^RwWnnaXXyH@eh2bxZGLv7nj@oHHW#vGnTBn5cF3QjWZE');
define('NONCE_SALT',       'd5vv9dY!eL8Y6PlQWFf6YijD7zvk^oAz7yV&q3CmKEn14CTc!^^e8EVGz9MpP%hY');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dslJAtP_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
