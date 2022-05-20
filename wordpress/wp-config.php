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
define( 'DB_NAME', 'a2_db' );


/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         'HULFb<f/k@i^6z)bxC`rk~<MFLhKo5-eD&ia7-RLOut#v|FRl(Umr3hi{?A[oQJd' );
define( 'SECURE_AUTH_KEY',  'A8)#?BB|YncmWVCW2!@5yc5V4$S8i6Rc$Q.G$Q&]Pc8q3Z=r)+@;SY1<q$EAJMBd' );
define( 'LOGGED_IN_KEY',    'nuk7(_K=K0xu=,?ntj>Z&Ke*?nJ ~rnrGgw i<GL?)t.-X>-u58m4wEU{57W0jRf' );
define( 'NONCE_KEY',        'uG/A^w2syJ$QZeeSYhEJmf~LqZ?~tEN2DU}fmd{_PHu@+^bd^K/X_G.[L}hCq/x3' );
define( 'AUTH_SALT',        'Z5p==R!cww5b[X^ge`T~j?hj[uk&|i[1CN@^o<hfB})[FMje&Q-zt.ZkF3K6Rn)h' );
define( 'SECURE_AUTH_SALT', 'KFH#b{Fyb~<X!Fg(?0@%|OTEY3}/)kEiq|t$so.2ri#+#-=5>mx2l5@S]l%-eS7(' );
define( 'LOGGED_IN_SALT',   'KuX!Bozd3xx_~521Z*QfPe&c`[&tYVgNau;^Ip^~]`Z.`2-@4xw!}$2wGwH9zz!8' );
define( 'NONCE_SALT',       '>2`D%Hw:lI>o<-}y|hDjG/TROq)izk/+y/g+7 +bjDH,&GqVa fRG*nH/qIkLcRv' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
