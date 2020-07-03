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
define( 'DB_NAME', 'onepage' );

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
define( 'AUTH_KEY',         '${b%]X$_EH{[ HuyUY0Wo@.=CkNdOwPrQfIS^fSp/7t*_C6X6mWvULbrsfDIF@|[' );
define( 'SECURE_AUTH_KEY',  'Eo$IcG Y``tf8$`mk1;l0q?-2j&bL&TYsE?Y{PvSq88:sGLc?-yOcY[i[x?J-rF_' );
define( 'LOGGED_IN_KEY',    '6m JRCl5%5L<*K}p:^e-#XJfwHsjWChAJi9adO6/}i)^GHlq&Z**Srp][&JCHXaX' );
define( 'NONCE_KEY',        'OwUwHjUvr*W%O(E<MY>W9-@o@g.4(oCbyaD`,`;cZJ4-Pt_7n98@9>?dayZj3 t*' );
define( 'AUTH_SALT',        '^,ebkF,<5w}(X:}.e{KI>Mu#Xv7VV/u&;fExmtuTW-.OIOPIVKQ#H7cnyi~LjH,I' );
define( 'SECURE_AUTH_SALT', '4r#xx OBl$O!c]VbzF.4=!nrN!unHd )KQ9:]m%EI&7WzpogLQ-0A{nQ@YId[~DZ' );
define( 'LOGGED_IN_SALT',   '>T[4KGpYrEV.jvHj&@/,{#%<~V`yaJb`~[Jm|{<2HZQkgm5g9,eY2TNNYhCv<vV&' );
define( 'NONCE_SALT',       '(DlcdP#_[~Puzh77^}+#e:V`YdHmM=/Xc6wHYKGiI?u+~{@~Fbz~rphngYU8oc1x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wssfsfp_';

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
