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
define('DB_NAME', 'word');

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
define('AUTH_KEY',         '~dIpObL*okE4:Ix~s,pzeJ]1,&bW+6y1dx4;HaGDG|iy%u]Q(}1<tMp?xet!k21=');
define('SECURE_AUTH_KEY',  '$IVH_bMDF2M-4>&5 #}L8>H)Uxe!?&<t#zUL8WYP)ikll kF8vd,3H^8F;;N3Gsu');
define('LOGGED_IN_KEY',    '%-YX&vCuBP37MeV<Q26x%@4=Cq!AFq=Ugp[oG~boUoVj?8fY*uS:x,ND;]F)#+w!');
define('NONCE_KEY',        'j@o6zT/r+yx3_vBC>lNJMEeJOhGV,mIfq*qz<pVdzxkC#B(xEg<n22;FN`~+j]6Y');
define('AUTH_SALT',        'pwY0*~^Qua,T#rfE?u9p-@rYoeQ)AmMaS/%.uodoGr}er4me.s^@q=?_}+p(Obt;');
define('SECURE_AUTH_SALT', 'qqWNejzOqc wEpaH1Q%I~p,6K])0; =53L9r,ETe]xN ]t>3k#5.Y~?80IxqU<iP');
define('LOGGED_IN_SALT',   'qiTW180OUwU_D+:yliKkMtf]J=SsWlBJb5C~nuc${P9pgBU;N68Y=$xKz 1imMW{');
define('NONCE_SALT',       '(eJ4m4~C<6;<<AYxQHs{y>o7*l)|cc.JO[zhYje6~=ubg&C}D-`e(8%!S<q.*?}o');

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
