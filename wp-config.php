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
define( 'DB_NAME', 'deepak' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{TtS|Q{KEFk!4Dhfz4S+TYgr2li5yuk&^GU v<Jr|-v*Q@Xi`QSYv_YBSYF%U3`/' );
define( 'SECURE_AUTH_KEY',  'pi!_40H6N`K#o.6fY6!)j-.I0zXOle`XuM!YPU;U%c@Og.A0N7aM)/H/tGaA,(TY' );
define( 'LOGGED_IN_KEY',    'zl3vG389!27s$I+n[H$3S?+42qC[N=zJqTE|f!]o`N?8CgAN>ztm+-eal^%-CYqV' );
define( 'NONCE_KEY',        '0$`3{|;xe<B*a<6NDv4+I0L5_<C/X6p_4p(3l*x& =*7MEDF +,i)j.{/PyfSPUV' );
define( 'AUTH_SALT',        'w)$<L2#f{yCMvKl4m*>W) yEw`hXkVc6U(TK%MIQx/#PZb%pjl]TC%ERGK6l3cC.' );
define( 'SECURE_AUTH_SALT', 'w^dhOS`-^RyHYD ?jVtY!U?Ygr=)W5hzkF5z07x@wK$8O)}aU&-cx6i_X%KKx);w' );
define( 'LOGGED_IN_SALT',   'g1?!Rk;jfrtyOc<=L6FlI38E2xx?gBAehmsl4UP+~uW~d5BH;}B<vD<@R852Po/,' );
define( 'NONCE_SALT',       '0?Ee]?d[yXF-COdk{;[|4Mb~HJ%tV{ -lsd#^b. &hv5)O<c<7=y0!N5r6K`cJ%x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'de';

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
