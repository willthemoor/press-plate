<?php
/*
 *
 * admin login:
 * foo/bar
 *
 */


/*
 * ____ Let's Get Local (and set a few other defaults) ____
 *
 **********************************************************/

	define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/app');
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/app');
	define('UPLOADS',		 '/app/media' ); 
	//define('UPLOADS', '../media' ); 

	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
	
	define('WP_DEFAULT_THEME',			'roots'); // folder name of default theme to skip admin setup
	define('WPLANG',					''     ); // Defaults to English
	define('WP_MEMORY_LIMIT',			'256M' ); // Greedy
	define('AUTOMATIC_UPDATER_DISABLED', true  );	



/*
 * ____ Database Information ____
 *
 *********************************/

	// store actual credentials in local-cofig.php, not here (local-config is ignored by git)
	if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) :
		include( dirname( __FILE__ ) . '/local-config.php' );
	else:
		define('DB_NAME', '');
		define('DB_USER', '');
		define('DB_PASSWORD', '');
		define('DB_HOST', 'localhost');
	endif;

	// Do you *really* need to change these?
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	$table_prefix  = 'wp_'; // WordPress Database Table prefix.




/*
 * ____ Go Go Memcache! ____
 *
 ***************************/
	if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
		$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );




/* 
 * ____ Authentication Unique Keys and Salts ___
 *
 * Generate this section here: https://api.wordpress.org/secret-key/1.1/salt/
 *
 ****************************************************************************/

	define('AUTH_KEY',         '>hTE@d%T W:(8i#u{pOu$P<6iiVJ8zLg`Px0W<-T)It6V%L*S [mZSZ.6ex>Tm S');
	define('SECURE_AUTH_KEY',  'r[ndR|}5x:5{Mx[I78KIuVKK7JvPO;m/n:RL#xF{3HC_`jm1cC8iF9{+1<zc{[Ht');
	define('LOGGED_IN_KEY',    'pZzd|^NWI~n&dZvhn^c+B?}I/d5}{KrvPL1A.cas)_tbmF$js$T:Rf=[un-Ci,Dm');
	define('NONCE_KEY',        'o|9$>D<J+ b-i2K/Y{*y+Xj={Z:MHG,4H2TM_UEYA==sbkh;^}T%3M$Y4|bw5EBN');
	define('AUTH_SALT',        'cE]Nq#G*6Ry;j;^|Y@kK~xqOnt1J_9SN6O3OYm4.pm9sdepWAuk+$CPtCGfli/z4');
	define('SECURE_AUTH_SALT', 'y`xK+m-dn ;Y|_PFkA$Rz`W&~C>BGKDJJqLQ(2T2)SmN.9b|ImqG6o%+)OUrQZYE');
	define('LOGGED_IN_SALT',   'LWD<RJtYR:w2W-69_%JV%v6vb5V7|+19.;A]|a&-GGuR`-:T2aQa3aPF&1<C{dHG');
	define('NONCE_SALT',       '-j-Jd@8BZu_>[30m+u/RnO!4$g+CZ1:<*i5t8K}|I)QP|EInvp.RUyDCrkw#}+~~');



/**
 * ___ It Begins: Bootstrap Wordpress ____
 *
 ******************************************/

// Absolute path to the WordPress directory. 
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');

// Sets up WordPress vars and included files. 
require_once(ABSPATH . 'wp-settings.php');
