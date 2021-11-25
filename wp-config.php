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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '{wp$lg1oUuFX1dO&}{>;uhMQ[PT,cdxe]@B%P]$,5#YNx7{=Kr#oGms//HoSK]yf' );
define( 'SECURE_AUTH_KEY',  'hf/7@8nIbW9kQ^j|P))SA%@sL>ALL>w y7_[Iw:AVSx7Li3_lGuS*F;Fjd?i$+!(' );
define( 'LOGGED_IN_KEY',    '.]fj}Or<mQtTYkmcE|[9E86M-M-ZKz<,Go4YB0f~]*OC]_OKcNPEe5kBY*)<$+.{' );
define( 'NONCE_KEY',        'z3a]BwK0+UE/P:9mMh,2T_=%ruT&e[X.c=BAUirKSL+JPYGWi,<pvY<pe(1zi !%' );
define( 'AUTH_SALT',        '.pThRpbgGz`{}s3D{.]w}2jPN?JEpj;(-{/v}TZ]EM~OxovDtH^/wU)Yd~0t0u,Q' );
define( 'SECURE_AUTH_SALT', 'MF8^kIP!~q_ifZVTK[H$KB}QJ|wP@ve@ae]HqS)P.y1=&lR9;kE?slnHGM]R$m(R' );
define( 'LOGGED_IN_SALT',   'Bn=!5>*fkBZQk ?BDJeI07LD_><8D&mmkv!$q8^@djW}TVVp% AJ4?*OvbhQa~k/' );
define( 'NONCE_SALT',       'cKpqe&^u|K.S= x`8<Vk&Z`e/PEgw8[GtfQLsgk&tFBggR`o:<;{<VPLb)G^[sUj' );

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
