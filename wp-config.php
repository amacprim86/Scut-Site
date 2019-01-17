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
define('DB_NAME', 'scut');

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
define('AUTH_KEY',         '3h]1F?rK_,P<X1,Xo0MXO+&HYMv+PurH{f~3ANiUiaV?2t.R,TgZi<B`9f_x8}Nb');
define('SECURE_AUTH_KEY',  's+GGxJ>Y_j2h*(s%j:U}sWSmJh}G(<y7+K(jQ;>Wd;gm|kP)x}CY40O(CBQ-I&Kn');
define('LOGGED_IN_KEY',    'EC**I^awi&GofV6KJUMP& Duun$M(2K4U8cCi>:V#c4%bWizk$B~8iW{C`3]4XAf');
define('NONCE_KEY',        '~VD)kP@LJ{w~*>E<60bKy!p|#p&48^HuyDS{xBRU<1:4._40V[NsqE0:ZgK#5=z9');
define('AUTH_SALT',        't70eMBJ(|o>T#4aWn06w55DB)/8t3U oj:88)z0Wx~2rlTsbBVTh_iyk88ltTmmi');
define('SECURE_AUTH_SALT', 'RaxrKhMmb+vWzu&;K?8/7+p^Ea@=eMvoEgDfMz!I+2wX#aC {hPAA&M}J94;Vn-a');
define('LOGGED_IN_SALT',   'i%,w{hOSzO(T&KD=C*cfe4/?J>iNATK@E[oPfyQ&PIBe</-kN6[$@9(FznfFxo5Q');
define('NONCE_SALT',       '&1XO=]?H;#FC:xO4`k~9u{9/Dg^*^3+lu`g4v=B.T7%)zjqE&g=88k+~P~rgcOe|');

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
