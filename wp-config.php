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
define('DB_NAME', 'jahid_new');

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
define('AUTH_KEY',         'I;1|kpX^q3mG ;UOtZr1+>y<4C7m1!y=us]+~J~N><l<w#rFZ{.;!<f/Ovm{BW?U');
define('SECURE_AUTH_KEY',  'z+l+B)9%#$*oy>4Vw]G/E_AL8Rf9 |zW{%=]|rYOjt<mUQHH#7}-aX3B=|T}6?Lt');
define('LOGGED_IN_KEY',    'sYqsQam|2YEvHu>B&z]N;-BAOBXZCmI%P,&9Qw&<UFot*g6vwx,{9D;44e]R_^JI');
define('NONCE_KEY',        'hieFb1y2|0l@QQ/?%!rLjs1g5NA(q^-E/&ZnF%us_aKaWxeN_F(Ft6@-h?N+hcuc');
define('AUTH_SALT',        ',#Dqi9z5o+wopr+1?+e%8Hzhg!`/Hw$*T2PCvC#x[s~aGp#%;+H`73rK_DFt8_;j');
define('SECURE_AUTH_SALT', '&byy4JHvqrb8:>`U3-j>+b5ClWxB?TfIgn$b|T|d~q>|o59~?n{N{$s*h-]A+7zQ');
define('LOGGED_IN_SALT',   'd`Tnwznf$/2pB8CG92:Qa,m%LW[Bf7bsU%gGwU9*w6M]W/VG]wnW+fJWBM({e+K>');
define('NONCE_SALT',       'B-ZZdL[4!KdbH<Q/C]+2D$R{<MvX/;@SDv(K2iVO+,+N`E?Q}c{n|k}YoOK95U0]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jp_';

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
