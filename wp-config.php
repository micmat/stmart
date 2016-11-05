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
define('DB_NAME', 'stdb_stmart');

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
define('AUTH_KEY',         ' a%{y7yJA.7d7u&<Q<lcqn7)1NR)Zeo0g]E;GsixX%4RWyd(39kJkTW6:T{hjD`k');
define('SECURE_AUTH_KEY',  '_M|R9xFq+^jJk]o|{u(X|bRtp8$Lsd<ZuL)-0[56bhEJ#MERvN@2@ sI2z35Z3#0');
define('LOGGED_IN_KEY',    '&Q# GVs>A>bqd$bPyJ13z*FCWs fQ =)ij%Dt|~@z`FLfqTuT5$RLZieQe:OwWTV');
define('NONCE_KEY',        'UGu}uI!pLEhTd>I&F7odu9)=E*50asaSQ305z5Q7~-(4p@tkV7>w%^O#kvQQ<Dko');
define('AUTH_SALT',        '/t+Q`ROAdU(s(bb(C42HrtEX+CLsvA8shDPKi7~wTuz2azd@K8fO`seT;]P:|0Q_');
define('SECURE_AUTH_SALT', '=E,>k*$ ?H_&)DUKZ5z^MUh|EF&~R(IwM}4g#AOcS-d?C/ g@W>[qaI(amn}#Ge.');
define('LOGGED_IN_SALT',   'K30Ne]#=X_d1ba@RQl%G?Y)_(TefV%NXPm[SGXeh3>s1yC9Emj|:^P]r^wpaM8+r');
define('NONCE_SALT',       'H56)`gWU4E|x{iD)pz5fa}O6B?Husnu6&T_ds_q_:mx>av]_R= 2s1n~},<~/hJ3');

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
