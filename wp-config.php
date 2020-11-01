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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lzQjx4G4clTcShdp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':jbT-1&66zGIYF]*V/B4FbqF@*|iG:P96Ka)InTsj#&ZU#0Unup2Q([I?zSqUp=&' );
define( 'SECURE_AUTH_KEY',  'Fj]/JFV[`500+Yyi>%4WIFW3aLCz2;e`r&MaF{$;4mj[a<sf+/7iQC iQ2G8~zeu' );
define( 'LOGGED_IN_KEY',    '*4hIoyi_?]L7o&UP2~M|GV;ptL}M>=dY&H#I]G_H;l*^z@>+pX.khcO|x -^ZNT^' );
define( 'NONCE_KEY',        'X]9}{PDg4,x>l)^(hs<v6|: O#L6!CH76b5Q3FQAQa1oAL%KbF&3ouYgnO EHDL ' );
define( 'AUTH_SALT',        '(ex|,lDEFu455buY3i(b%,@0smf)/uFqI9j>e!_G3N/Vifi6k:oD:XeHUKhZ2sNG' );
define( 'SECURE_AUTH_SALT', 'l/HgDsh_`GEa-Nnkk:&Ypi^9]}Fwe3H!A?O!MG9VQ1H*PXi0c:U`5:-!y$P`q0TZ' );
define( 'LOGGED_IN_SALT',   'Lz9&K?j#P2J mF1A?)}5Wr5wMS|-)pifdw8]`GEp/ |{OU3HL3tRbA8nkO6M<#jS' );
define( 'NONCE_SALT',       '$oT~%.d{J9RXUg7}P1Of}V?.W/2/x8W23f >BOwpI&I!g8EaM@~gq/cu9KMys8Sw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
