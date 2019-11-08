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
define( 'DB_NAME', 'wpcurso' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o_Fu5gO9$I_L5lw/WvnN&gA^b-sPg$E{/$l0}B7/8u(M{v3!,C%qi@2SHO|As~:o' );
define( 'SECURE_AUTH_KEY',  '4}_yem;8(s6NLVr4-.aC@r+b-M+3/=]&3n@Zvbhw8-)p2X(><FKWtQESI[VM&~&8' );
define( 'LOGGED_IN_KEY',    ':QE3gAm{%^jI35kcY(A:7fqa9{/7(*q,v%1ipJ?:^bqcJlS?o;tf( e[e+IdhzOs' );
define( 'NONCE_KEY',        'X^@%o__k*As$T~n_eVB;Ro7{?$o,6-kY%0$h8_)H+QYy h1E65(InYWir5,ZWbSx' );
define( 'AUTH_SALT',        '|z~Ya4!~RS<lr>;e*TrjY{#=d<e&hE0mh)T+F]W%F$sTOCK!NUT*FvTl37?)HH2!' );
define( 'SECURE_AUTH_SALT', '`o56H-rwwr4CtMJ-1%e58p,(T~CJU[#N@GcSlT2af~g&yvb6k#F1WyRuD&alj{D0' );
define( 'LOGGED_IN_SALT',   '8oxZyKy`0xB>_nl_R&/ }b~5L.E!>}XSkH ?p3X6vA2Y=7hm@O) XG^sN?NVT!dY' );
define( 'NONCE_SALT',       'mEDs!AD`CN!%[R5)3b^s9P)a^!8SiiR/ZhmdPWF6 %1+$S2Puz{GTa2o5)tX:p=5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcrs_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
