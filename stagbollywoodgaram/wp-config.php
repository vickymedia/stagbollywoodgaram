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
define('DB_NAME', 'stagbollywoodgaram');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '34wITL3mC&r98t_(%opta&%3~Qfds3-{`YN-b^d-&,xD(dKZ0|;lUL+SrR|]LfGb');
define('SECURE_AUTH_KEY',  '5(Ej9IW)i.H7#s~4>{emNB&e6mS)ajt@2<+(E#E#GNoIKtSM%GX((o+OWccgSZT.');
define('LOGGED_IN_KEY',    '~|,,B}3G7JjgTb)>&es=G(Z&W2(}<0kZZU_QdivhPihpC.w.gZnAs[n*w%,weq&7');
define('NONCE_KEY',        '1D0+>U=eR[wr9)u3~Cya| #T)zGwnN@nnkxrHvm(*{xnlG>@ar`CStI0LhS4e^Sg');
define('AUTH_SALT',        'OnNCF3}U[R#a AwW^jZ a8&4@vwxdS^:3+4eF<^UAp38&!6jIh:Ys[(GsBCq;v?^');
define('SECURE_AUTH_SALT', 'JWDpQy_#W.EZ)? dW3T}lmkK8Z /kFfwv+M<_61#z=7Q0.Re,4l/n5D/&p2`i_{B');
define('LOGGED_IN_SALT',   'K:9e#3w<uw|U3Ck}Sq8>1(z5I-q]u.k5;0^*l[Iu_@pfK$YoV@W;Tb(lrcY*Ff`H');
define('NONCE_SALT',       '{klgs0)[.s(~6cP>KcS.*s?lb&(D.JzwSELUz[(Dk+;c{wvdN-jZkT]QX(rBaQR_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
