<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aabc_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Fw:_pPc9!NJC@P^PJek#wFY)uiOcbfEtF<PR(U<&(*j;3`0?24zz8QUKJU<%jGN%');
define('SECURE_AUTH_KEY',  '*L([($]Ms:>CgzB}chlif-!R9e-,`,OS}r/EOm@{S)R QQn`t.*/;^(/dU[Un&=z');
define('LOGGED_IN_KEY',    'M)WOE$_1|hA;qw/b<-%PIbFI$g4INSEuadf~4de8k~Zkl=T*S;cUs+AG5D&+C!yK');
define('NONCE_KEY',        '6EtGs_apj8fPKBn8KIv@LtrgU3^I-2ShS^V-H3sxH8UV-,Sdx=htw>MA%_S#e U^');
define('AUTH_SALT',        'P0eKP|g  zR3/>x($nqBJSbK.gXlG`@}m<OtBadWY/tNRaT]d{s}R2E1tO { N^n');
define('SECURE_AUTH_SALT', 'KoT%`E`qk$$&OL|m]hoI4TA~2+@1.8yu|nfeEXpzvW)@9czL4,dJEIRY{!_H(H@|');
define('LOGGED_IN_SALT',   'cDs$O)J$<xo,zJp$:xc>y#rc)*Z9c /-,Cey%_8dx+t>QpIhi$IYW7;5},0L)D~f');
define('NONCE_SALT',       'mZ~U6mJMe~-o06V_!^9=CRvuTmPB1Z+?y*hxL+=jAE^|.Ue/uQKVKF5,^TSLC|J!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
