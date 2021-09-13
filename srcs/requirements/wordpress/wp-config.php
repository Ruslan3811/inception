<?php
define( 'WP_CACHE_KEY_SALT', 'aahri.42.fr');
define('WP_CACHE', true);
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'aahri' );
define( 'DB_PASSWORD', 'aahri' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
