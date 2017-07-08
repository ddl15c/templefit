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
define('DB_NAME', 'templefit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'CI2zI9{n5kTI5xUFQ6=@UfA,*_#h<X$H^PU#EhS00kGAnBz#a0yv[q@jmX#?.45z');
define('SECURE_AUTH_KEY',  's5}t<:E8.,IVL1|4c8Y2[6/DqvXBNB@{PYCMb?(2+TTsXp{[s+-$enqd0o&1T>?7');
define('LOGGED_IN_KEY',    'fVB?)MP<b4gx@ViLBK3E (.O{#?.G%2m-rIk2fP#w3wnBj>#~fZBw_%=TJ^yE_O%');
define('NONCE_KEY',        'Btvot_zI|$)/[B-BET8=o9mvzIh{8YQ[enPz}t_<J^*?Jz~au8r8$dnTTDj=y`gN');
define('AUTH_SALT',        '4H;A~<c?*#iHo)1w! h&dXU0>PPJM8epiO~nIr5GoU}]xG4ql2AP1An~JT~GlH_Y');
define('SECURE_AUTH_SALT', '3,5q&}f3P3PF*zQJ0pFeI0YM4_^>#2@m=GscOH1>z(@p>Yu8Dt-{1=}93%z0K(j(');
define('LOGGED_IN_SALT',   '8sS2IT#?`sd^8o7jyE8Fa( QmIneLQQo>VY*MY$%MVp^?)<D_@apDEwM.4MC;;NV');
define('NONCE_SALT',       'rEnQdztcz=1M%HM+?b]]@XO9:?u~,|T#$r7QLGv-)03DmO0G@)zDi8p5zotqDbpz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mo_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
