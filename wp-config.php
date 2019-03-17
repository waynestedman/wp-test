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
define('DB_NAME', 'test-wp');

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
define('AUTH_KEY',         'Ww/`70msD!`+R/1PyJwb}Pwh|^HTc]JpY`OuHON%xGt(Q3r9LGa$UqAE~n.h&UUM');
define('SECURE_AUTH_KEY',  'dU?Unazz8==4f.)21vI><!5VLZ;6MozE:R]sL=t}8Gi1Zs;K3]n-G*`W$LB^o]35');
define('LOGGED_IN_KEY',    'jDu?0o$wE:hFk~G`W$U.W(U26bO;<ecI~HC+U~|6l5y[~c|X~Qg>:Cg{ F:a7R2,');
define('NONCE_KEY',        '[vTNQ[*DJ@$1@3UA5a oa:+Sf/}Et[OQ@~]h$v/+4P^g?Hz1:U*:3T/Z%gE>G?<d');
define('AUTH_SALT',        'e5pluw~Lom*K@yqip`tN2nfUt{;<7K;FU)v,Ha@pm ^UB2Wuis)IX262u?n`^D=B');
define('SECURE_AUTH_SALT', 'yq{dDK?WKTR1oTodH5gbJ3J:QS8On=.<rN:[T{JfVdWW@n4,q_K~Bottoh>uD(lP');
define('LOGGED_IN_SALT',   'Ni>rRc,G{&*=P[nzRxD-RlhcN.9fPLc2@8$p.ur0wYoJ`_}::lr`=~k7lTdXmuaq');
define('NONCE_SALT',       ';1lSrln9*a.&<fpGP2,y*jH/I~cN(q58D^/4!u5vUg (hRm_v/v~$>Wj8f@7z=BE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'test_wp_';

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
