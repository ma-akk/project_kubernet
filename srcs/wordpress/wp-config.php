<?php

define( 'DB_NAME', 'wordpress' );

define( 'DB_USER', 'gtresa' );

define( 'DB_PASSWORD', 'yourbannywrote' );

define( 'DB_HOST', 'mysql-svc' );

define( 'WP_HOME', 'http://192.168.99.101:5050' );

define( 'WP_SITEURL', 'http://192.168.99.101:5050' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'KR.t}`YVIjL2y%z^lpgy*laLLRtm}F-&LEwS6drYAQiYr=]/Qq}KRd|p+uti[4 n' );
define( 'SECURE_AUTH_KEY',  ')6PPDM+(tijMgq:68+ZW|YJ-Vjl5O1#Sq)H8se Xy[FV/H_c|3YJo{}s ZX8ko)P' );
define( 'LOGGED_IN_KEY',    'hFQvkspnUN)*N[qo4cdV>@0tAe6x-~}U(p-yA*(&Ucb|%qhgc7TE9Ib(_>Vzr3|o' );
define( 'NONCE_KEY',        'a*dT9Y8#W<6-o|J:*UB{bsIQEp4M?,B`EoE6s&,(3uX@plWUR#oW9W$B;xO-*xX#' );
define( 'AUTH_SALT',        '/U*fa.%$9k*aV3]JN:*9]t@$hS|d&eCYy^DRcTXEcioZ]f?usP&bUxvbIaL`(x8P' );
define( 'SECURE_AUTH_SALT', 'wd$>)b|7H]:<+1<Cj+?6xs[WmaH|KmML#-fv]cM6HkSuMHWPtmON$wo8kqCYDOGO' );
define( 'LOGGED_IN_SALT',   '`kn=}awuPcz;k:@}yc;V_Oyx+^c61:>oTbu%?R)M%F)~;tqSb$Op3&+2]SjhYaBL' );
define( 'NONCE_SALT',       '<_]9j~>miCt;r;O?<BsrMf/J-WQo6,W}Z/628Fclj?-2yjVQzV$c3.t*TT9faY:a' );

/**#@-*/
$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';