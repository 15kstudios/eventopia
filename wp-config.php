<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eventopia_se' );

/** MySQL database username */
define( 'DB_USER', 'eventopia_se' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Incubus' );

/** MySQL hostname */
define( 'DB_HOST', 'eventopia.se.mysql.service.one.com' );

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
define( 'AUTH_KEY',         'yoaZq4ZZkPdJ4Tg06tSa2PZf39d_5jevnZzVeuEVtWA=' );
define( 'SECURE_AUTH_KEY',  '_p784p3Yo9mWU-HEmBKD_8cuJe1xOVdPDSWgTEMiG3A=' );
define( 'LOGGED_IN_KEY',    'zsn0qKfniR_zBOgOFZ-__3o9LxUEYpS-OMUNju5zCkQ=' );
define( 'NONCE_KEY',        'Zu9gyNXM-EafWqvw-InJnhaTr74P-j8m9mAs19WfzQU=' );
define( 'AUTH_SALT',        'BuSptUTY1Zq4XY-FZbJ5aL2776_KflMmm5JWUYZ0yw4=' );
define( 'SECURE_AUTH_SALT', 'RK0bRNqPqccs5UFj2Gc28qyJsSWCkR3FZTFbPN7atKg=' );
define( 'LOGGED_IN_SALT',   'SlcTOWi11iOy4C6hxXlUs6_JIbOmCDlifrzW44SSNkg=' );
define( 'NONCE_SALT',       'T9dK4vu5gVipHurfW8sZzCqtsSGlclSYg7PpeyXDr9U=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'www_';

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

define( 'WP_AUTO_UPDATE_CORE', false );
define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '5000M');
define('DISALLOW_FILE_EDIT', false);
define( 'WPLANG', 'sv_SE' );
define( 'WPEMAIL', '' );

/**
 * API for One.com wordpress themes and plugins
 */
define('ONECOM_WP_ADDONS_API', 'https://wpapi.one.com');

// wp rocket

define ('WP_ROCKET_WHITE_LABEL_FOOTPRINT', true);
define ('WP_ROCKET_WHITE_LABEL_ACCOUNT', true);

if ( ! defined( 'WP_ROCKET_KEY' ) ) {
  define( 'WP_ROCKET_KEY', '901deec4');
}

// Your email, the one you used for the purchase

if ( ! defined( 'WP_ROCKET_EMAIL' ) ) {
  define( 'WP_ROCKET_EMAIL', 'support@15kstudios.com' );
}

/**
 * Client IP for One.com logs
 */
if (getenv('HTTP_CLIENT_IP')){$_SERVER['ONECOM_CLIENT_IP'] = @getenv('HTTP_CLIENT_IP');}
else if(getenv('REMOTE_ADDR')){$_SERVER['ONECOM_CLIENT_IP'] = @getenv('REMOTE_ADDR');}
else{$_SERVER['ONECOM_CLIENT_IP']='0.0.0.0';}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';