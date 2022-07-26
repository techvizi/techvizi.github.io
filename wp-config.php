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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techvizi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aKGneD1MQ7cPDit([mM)<ni>wX}N9,.Y0xK##Hn=z1gZ:>X WWj.WY;gB5O`VYZa' );
define( 'SECURE_AUTH_KEY',  'n..zr,x!b;7kI#zrHpDt|(T)+2rcfscN^%;IidE<*}.:X3Yc>9IO1OQ/QO)q&!=d' );
define( 'LOGGED_IN_KEY',    'Si)]$B&QRw=SuVKk~jLgM^n|G#QqOPL4+:T1pxoTg;gMK3}vcbHSV%&8{6_N1=>?' );
define( 'NONCE_KEY',        '-R1u!i*,8+BBVpQu&T#TaZI4=&l/G_90!0P!tZbIV&sEt] #M,G48lu7!Mcnkbaw' );
define( 'AUTH_SALT',        'B0zT.*(J-YJDFlI+bizo!cDq;t,9[bz;o9-?9wxlb<Bv3+*b*q%Kv/S)qt98%?<@' );
define( 'SECURE_AUTH_SALT', 'ILA+j3#$uPG4P>y.hB^NqQ@m<:*EAm@M@BRf6@EGJ+-PBi<7uo^`3F+r]!]i!:-R' );
define( 'LOGGED_IN_SALT',   'j$|-VK.s)%VNiO/Il[D+(AAS;GfY=&999brd.tkBW!*X,D/?/*i{)513Wim5gte<' );
define( 'NONCE_SALT',       '5%S9t`mt0}wIXX ,zR>BaXP$Ibt?c?E?[[aNCY-H[+,W`3o:WaNHpm~1#*W; ;B*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
