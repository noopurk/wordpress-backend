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
define( 'DB_NAME', 'noopurke' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'noopurkewebs@1' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'bll5F8XhXel8T4QUesK;hFw`FjBizfGJ^g51t,.!/`KhOUiaX@rM9-dyC{wcpk+d' );
define( 'SECURE_AUTH_KEY',  'utS1ZhQ3g}5/+>+mj=0le`KDE0>z4qiSe.]wlkd}`_oniqb@ZZo.A!ds~rDO(p3j' );
define( 'LOGGED_IN_KEY',    '+|bU9/tq2JR;JQI+-FiccP)u=)2Ouau/@;;-lqMk5+Vv?fmDj3p!=87@Qey{30zz' );
define( 'NONCE_KEY',        'v4MJj$2Ja.k*x<XbdEY6NrIT*-pse;~ o <6?Jujo(~Az#Ytg?=hv)U.C);5j~IL' );
define( 'AUTH_SALT',        '(tueh1bxW3> :~1@hxo<s@JEh-@N*Li*yV^W..1.DuOkMe&v=6F0Yhbrh>}E,m/X' );
define( 'SECURE_AUTH_SALT', '-k}Qv.hnr=(/qj!2f`{o^=>}4m3mdyCnWX8{M`D$->XJA?DZpK:dk^S <HcaDh<$' );
define( 'LOGGED_IN_SALT',   't~TO.kIJyx~kJoC3<R((G7jP4A1HQY~VV?EnWp/vx,=+x,Tm#>)}N`8gpN{y?E?K' );
define( 'NONCE_SALT',       '2=GeG&$DVAQmhzj/iAcY9E+k8*)d&UfhWv0vmmRa z>y][&*{<@`.|s~pt+h<>rn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wps_';

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';

