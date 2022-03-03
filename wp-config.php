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
define( 'DB_NAME', 'yourcraf_wp197' );

/** Database username */
define( 'DB_USER', 'yourcraf_wp197' );

/** Database password */
define( 'DB_PASSWORD', '31V.q8pS6@' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'u7xptbmijicaq8jwgsoelu9lzzwcela2xxdccth4bwmky8bsgjegpz2vnds0tl3w' );
define( 'SECURE_AUTH_KEY',  'tlwuiukpinpvoru7u9zuy3vyjpofu6qw2fwkzqccgvw1y4zh7z4u5i3bcccgmu43' );
define( 'LOGGED_IN_KEY',    'i6gnkdjptiyk6eatawpyrhgaw0ioralr8cfbw5awgydvdfxfwzkhsnaycsfub6e7' );
define( 'NONCE_KEY',        'mfhomtabsmyznsqeeqlyatvytdzb6hvp3uhukqe7gnkopmvsnqyf8xpvupahqdly' );
define( 'AUTH_SALT',        'eknfoew3mwejwmjclmxkrjudkgqiyfdto8iq5fl5jkucnyw3mt7oi7qcqcl4ruev' );
define( 'SECURE_AUTH_SALT', 'omszyl5h4awozagvav7onedzqkj2jjk6kktzkpse5wly2irxwc67hwsk4sn70of4' );
define( 'LOGGED_IN_SALT',   'bufvel1e6clxc7usztanybjptmgftxgebcabvttglzdcdihizvjdu5zscpuxgbxr' );
define( 'NONCE_SALT',       'scnsetq5szvnwaowp4jkurzwsdymgzsb24hh6qia8o2tzl5n649c6r5r7xqr71pg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuf_';

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
