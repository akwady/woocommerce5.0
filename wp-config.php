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
define('DB_NAME', 'woo50');

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
define('AUTH_KEY',         'F#[WJ_R.$a]EU=Lw.r hORfJv>ERZ<!PBYjkEUV2 D}LS)q# wqC6497h&:bO>4`');
define('SECURE_AUTH_KEY',  'J-$7IQsEDA4(]b7!`C{A/8D{wpBj{i~.M~[h4j63#Ma^nS;9 d8lsj]3Z &iK2VH');
define('LOGGED_IN_KEY',    'kp4p@$kx_?($J:|s2VATr,#?-b>[q&mJ,e^*8x:S*^$`d#D[d`1xOWZ!Y4/vlrbe');
define('NONCE_KEY',        'MrE:eFgTo<zl0#aJ)s`mjs.$Z~3s&bt$!M.@0/Zom_G>!=-U(}c8}c:%v9+ !<y<');
define('AUTH_SALT',        '+O.k(z{?(,Ki|a>d&$k%:)^4UxQyr}lp`I$R<uwPGGrRH:~.0GqE)$sPV+3;r>-F');
define('SECURE_AUTH_SALT', 'WHR`*(CyvYicUXrcX/+3`+vJu_`.uGs,_S@S?QQ49J2=$aW7:KMjD06DZr][+|>!');
define('LOGGED_IN_SALT',   'tm+:StF><u&`;tMugi?YNIa@X^|QIbn-,cbaW,;c!gy<V`| 8UAG9*z6@.bkZTn!');
define('NONCE_SALT',       '4i3{jm4,ETy{X :! u]| %ky|84(H,*20:@FbT:mux6mBB r(OQP>N~B$oJY~aaj');

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
