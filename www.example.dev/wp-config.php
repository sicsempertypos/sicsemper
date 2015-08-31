<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'exampleDBp5py5');

/** MySQL database username */
define('DB_USER', 'exampleDBp5py5');

/** MySQL database password */
define('DB_PASSWORD', 'l7nw4CLT4C');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'A6m.XAuI+6~Sdh5SxLW]e5S#alz}g4r>c0Bv5s[d1CwK!8gIf7rEQ,XyM^FR,YvN');
define('SECURE_AUTH_KEY',  '$>BD+Pm9i*S]e+Au*T<b+P.TqS[d-Cw:h5s[Dx;h5p]d1DwzNkBv!U>c@QwKV[c@R');
define('LOGGED_IN_KEY',    '|oO!8s4RY}f$Q,nBu{Rz0kBv}g>Fzb2P.Li6qDe2Mj7uIf3byM.#Dx9W]h5S-Ol]');
define('NONCE_KEY',        'pZ:vJg>czN,YvJczN!VvJr>c03T<bmAuLi6e+ByMj{f$Q<bya_9tL~5e1O#L*6e2T');
define('AUTH_SALT',        'kJ@f3QX{M^Tf3Y}J^U>3nBb#D+P_9i5S]e.Ai6X{e2ExLiO_Vs5o|d1k!Hp#e1l');
define('SECURE_AUTH_SALT', 'EX2im2LPn^MQ^3jy3My${bq{A*_2ix2Lx+;ae]Dpt_SWu<{Xm6Am*.Pi;2ex+Ha');
define('LOGGED_IN_SALT',   'C~:Zs8CBQU,4Un37M$^Mf}Ijy4JN@}Nc}0Fv|FY,>7nrMfjIiyIMf{euyIXx<I');
define('NONCE_SALT',       'o!Nc}BcrBFY,>Un37NLP+;beyEHu<]Xq6Am*.AU^{fySWl5Kl-Kad:DdwDGW#[Ha#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
