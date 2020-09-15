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
define('AUTH_KEY',         'baV9yUokAh5XWvKgxnuY1SEgjV56rCdSIV1wv10Bc4B9sOOsShxIpGFetqUQ0LvagmgT5KnBYomXlvJXD7JAKw==');
define('SECURE_AUTH_KEY',  'VKN+icVFbg3a0/AREJMzr5C3yun+7R0i6R+qzcLnFT4ziQJH6m8ktxXTq8jzstulm5a734tyT1ZECE77LfkXcg==');
define('LOGGED_IN_KEY',    'DLKeU3fhG5UDe/HpqNVpz9o8HxtPPk1x2cSFxNVQZnVUBB9hdMqfQcvpOnEWcTytCHFYjT41CDOZey/Ji0rJEg==');
define('NONCE_KEY',        '+5aD5f5gDeM7zjm9wmOUx5LXf70LI3g4rWKVmdReFGbVEcVphWsoRcAdh+MEGlWsI978EDsOutU6x6w0voUtuA==');
define('AUTH_SALT',        'mBix8TMQ9UTFy1WQ6CiH8CE7y5bOZaJT9oYAalqILjiYQXYiOahyU9b8EZ+wE69uWjscHk/caaRi+7YSXh8csw==');
define('SECURE_AUTH_SALT', 'dPxIvhZEvLKaj4j3tM3c3pdVpVUKzchKwiqH1i9mZkpvblzzEUnQZVPKJXF2f+MyLeTmjr5EewQv8Di+s0KvoA==');
define('LOGGED_IN_SALT',   's76DQgH6I0ZGvqpzFklwKyMjuguqhJBCyxWzbwvGag/h/GAO4wUuSWBAUq0qGNY6Qm4V8pqPzF5fviaqOtON9g==');
define('NONCE_SALT',       'N52BtgcHkBHUmS5ghVvj0jFK3hqnpAJMyQEGvWmv/Fq2MBF52GXQJ9k3vlpOUGBe6z+p9eE/MkG8zOzN2PTJug==');

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
