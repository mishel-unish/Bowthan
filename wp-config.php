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
define( 'DB_NAME', 'bowthan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5h:V3ZUr8bL?. E0Kjn- *:?T{QpqmK7n8tAsG.]c8aROl.|(*!:niY1yTLV@j%#' );
define( 'SECURE_AUTH_KEY',  'r/ U<!03J+~?6yqt2Mk,I9EO#-r5v[C;[,67+xbf{u)X5j:O!5EjKF0qy~]/I~qz' );
define( 'LOGGED_IN_KEY',    'RGi  BBJk[BO<y3DVN3^jAj?[g+4gi~D3Nh`}nKqnc^lo~4kaOlVoE{_6<Tv2C|Q' );
define( 'NONCE_KEY',        '1;aljm*ynIQQ@BGn[zn:x^uS @22P3#vzK/DpwG%ZYM!J5.z^LH;{@ D[/2;~s[5' );
define( 'AUTH_SALT',        '{HOL?(h=6:t8^Z:*zpn?LXpYx3L<u*}GL:]X]puGm?XO=>jz{n[E]JKM(;>t>t{a' );
define( 'SECURE_AUTH_SALT', 'z3@g`vUJ-wSDTO8 )2d>6aH0 lFZ[jg~n9}eM6M&1OP,+a{JY4-}sM;]fwEV:zw1' );
define( 'LOGGED_IN_SALT',   '}p8!4k~&(r.gBw0HDL2ueA9w_qbrWjxg<*J;IR}wP,GED-eN;8~-e>[$TA`I*-]@' );
define( 'NONCE_SALT',       'LgpsWLu/W#?d&E;jhYm,XKZGQ^_3A~:>SU wJ|aHf?c|ZZeS)H4Fwgq2w`:dO`)%' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
