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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'PYdlPh9GrdjniPyXEKsTtCYeZ9u/ecvAk2PNr3mHXgXW7DdXadqwS2x6dCwODo6EGpctJCyG7OpUY1HkVNBhpQ==');
define('SECURE_AUTH_KEY',  '2g7eOETM7dtFIO9hjJVesyOgo6uGQuqUdkwqSPHev+yhamaRpOjx+dxOGicib2Agerh3l+4E2DhIMGtn5jEWSA==');
define('LOGGED_IN_KEY',    'LVK/pfQ1ePj1Tb+X2wFKMCIUg8iB5Q8f3acZDVWLSrGJKdstjYvrhLhdorDBfXRQI2mIxdPiUzb4Ck1dcqRNew==');
define('NONCE_KEY',        'ln0ZDV5Y5WF5F7DvrREXhu2bAFKWbEAjZou6wkoFGSRuMKDbvjS8gRwG/7MLhzGt+gqaSPklDL5NpEkB1yMRAg==');
define('AUTH_SALT',        'KmJsI+zFiNy0ZCse+k4ZaZ4fCnB3P2jNk+kkRzREV3pKYCrV7EsB9jB670aDbekrQlxQKXHmxYwONsUAmggJ6w==');
define('SECURE_AUTH_SALT', '89umg6LrSq6Knba29V0FJNEFtDvoAEC+iLvkDQ6F1PV9lMHV11YWr//AoOWnPDUqcdoTopa+6n7F4Zd3D1DFWw==');
define('LOGGED_IN_SALT',   'N/nYRGt1bJHtH91p56w57KCO4Lt9np/MOl26F7OAfqngGr97a8rczoMoxa9eHG28ZlSAbqOEENfavKc6qvjjCg==');
define('NONCE_SALT',       '1PW/qsynLv9EW3IvSbh/pC9Esw6U0oNzAsG6KRR72zP8Ujv6cDR8RTNOyS53DG4YvKZ4CpTea21WYQ0enAKj5w==');

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
