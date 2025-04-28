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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joalison_wp355' );

/** Database username */
define( 'DB_USER', 'joalison_wp355' );

/** Database password */
define( 'DB_PASSWORD', 'T0g075@!pS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'hqvwvsso2wt0nz0nudfuqxfscbrgnoljrmayqb1fve58qv0wqt9odtfpwwllnjr2' );
define( 'SECURE_AUTH_KEY',  'iibpbitjapq1k6rodzybzplll6eq6azmige0qaalzap4gtfqglryloyscvbkbo3o' );
define( 'LOGGED_IN_KEY',    '1hmjfysweypdtjnvhm0m43fhfe90m32hv8p25pp6nq5badl177ci75jwjchdjp3v' );
define( 'NONCE_KEY',        'nrghxv3xzgkm9sd80iu7z7bmacwnzyt3lze6j3vetd1vcnbboeddb84loguqwagu' );
define( 'AUTH_SALT',        'hhomic0xnfrazhmeq3prrkji7vvjzp7xbputae2t6fyxhvv6qkzor6fsn75lpxrv' );
define( 'SECURE_AUTH_SALT', 'msw5tpfer4qjwgoxaefvf4ppuegti0innwjwhg4b40m3bcihaqkmiti0wwputlpe' );
define( 'LOGGED_IN_SALT',   'rnuewrrwgyj4pytnnc7pww9asox9dgyrvtz7is7arc9h6xprv8sbg1g0kygi81pz' );
define( 'NONCE_SALT',       'bobxsktkylj3c3dbsatld5nwkwr2z563a55assctwghokrplwigjgsjyl1sddgjb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpki_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
