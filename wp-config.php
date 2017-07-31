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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id2255678_wp_954d84b3e472c923158c04cb588efccc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AKy17GbXX}KkD0yB<F16Yf39b+TZ7|R(50XEQ+.aFmo]sr1(sJUKTI`GR*lCMlly');
define('SECURE_AUTH_KEY',  '1ppV<8eniZ-V+vvKREaTl8Vq,!10j!6:}xKV?!u]g7j1vJBkM3=o(R!?2bb1:)l>');
define('LOGGED_IN_KEY',    'j|eyP*J+*|;~mi_Y>*L-oL]~gP~F|=~z@u]Y.Y3mz3)~Y| (n.`&A7GR0!zJAzE|');
define('NONCE_KEY',        'd9J$*@XB4!r2!24n&:m;ao*F&84U?MPr~ILd%*zl+Q7~x!+s|7.KO^DU<^m^XD4*');
define('AUTH_SALT',        '2}y%|vw~^#ED:75=qD-<>Pg;1h(sQN~pU-Gb^D`g<AQ{M_:4igF6+K?ekO0`=B6a');
define('SECURE_AUTH_SALT', 'V/n7=4RWk7<;W:k{<q-pq_+u+V-J  +f8L[19om5a!eVfXzQxHq||^a*ne?M~vqw');
define('LOGGED_IN_SALT',   'AuK^IJVo@1F)w23H!+;sl&0J><-Qi=7OmC^t>[$Qwc0,D)()Tj6!l$RM%2uJjjCX');
define('NONCE_SALT',       ']Zq4zr>%ne?_zsuo|Vma9e/I3Od;*R9SUCN@-@]-`JoI3`r%dD^Ilv:I-99mSYd+');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
