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
define('DB_NAME', 'wordpress809');

/** MySQL database username */
define('DB_USER', 'wordpressuser286');

/** MySQL database password */
define('DB_PASSWORD', 'N[*K|fkVH3fj');

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
define('AUTH_KEY',         '0Y>hPE^_fFobOb|I 6j]+y%I;tJ_@a,BnK:<~|#-QMn15d8VHp|pr5;cGT {{|[=');
define('SECURE_AUTH_KEY',  'Gt!.{RZB *+(ht)W@|PQA-mS^hy}[+;`AY~20rp;8KwZoW}]&}j-mS5p*EdBDaIp');
define('LOGGED_IN_KEY',    'ep?:UWP]RPK^6/)(!m~6E_+.ie+N{^Qd-DcH(e^~;7;^Dm&41TqV/qZu-kAJ^Hd ');
define('NONCE_KEY',        'G9UcZW@nT1eiZ1<KI]VQ.L>Hb12>/d<iJJq[s`[rf248qN^T({_1;O3{bWsiWQJH');
define('AUTH_SALT',        'D@h=-jj(XI<rZH}p<;<_rFGdp~.]e}^u?jz 2`Sa;gwFNt!>4iMeyWlcCS{IF7bN');
define('SECURE_AUTH_SALT', 'v^;~I{E-OLxUX4-r+eK.Aa0&jtly>Bm{%g0(p_WdsU61QmM.cM|!cviIGDfxUt#@');
define('LOGGED_IN_SALT',   'PJ<jw>)MS`Po!TY9N<v.N_w&#<h3CW]+LvDsSku:/h(8><`&!<]z% ZM{?iqBPc_');
define('NONCE_SALT',       'l*Qp,[!]](;s|= *l1J`,og6z|zZMz(+al;jCVsX;K7H(F6U}U/gDP3t3`tJJ4)a');

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
