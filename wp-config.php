<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#V87H-=@RI O ):l|]_,|=s#.As|>IA-FCs}s5*|CW=5<77/Y[:rb0xr3My5W@xj');
define('SECURE_AUTH_KEY',  '`)dTs)v%PE~qyiXNNkl,+J+@4PP<]@_Qc[)7((YT|!Kc1e>-R+ok}lAL2nIQrg8A');
define('LOGGED_IN_KEY',    ':^fLbhw4_gAUd+b[T:2;WcH>jOp:SE-h^A~S^0xe44Wrp:G_{?JLh:(ta:y2mMOx');
define('NONCE_KEY',        ';yx5 ^_vQP<dCXZf_%?<`@Fg,R#VRw0RuDhZ2v35iIewG5{?<n1pssM4fjbAos:*');
define('AUTH_SALT',        '0Q5@m:j9Y^Ah>Z(b]+D@4+|)ZZW&9tD&S-UEIz<8#>@Z/`Q$KJ)Y$,-u|Q.|it0@');
define('SECURE_AUTH_SALT', '|{eZ5Lo<dpum?yC?}o>|P~MsT.C7x-+JDj~5>`G#HxP{m?Ph$@gV![7DQ[Zgjk)w');
define('LOGGED_IN_SALT',   'WK)je*QpliMknK0nfu/Kn(g@5z;ZKD6U~C^>IKsL]8U;lEVPvGe+DlV]w<1;U`j&');
define('NONCE_SALT',       '-lHXqULc|A_,?yrR3is%hMP9V!n-PHKG/cGfzLG29c8bTq%:Q~}xBpd-o97Ay=XC');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
