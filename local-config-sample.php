<?php

/*
 *
 * local admin login:
 * userfoo/passbar
 *
 */


// ** MySQL settings ** //
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

/**
 * If this is a local dev env, you might like to turn on debugging
 **/
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     false );
define( 'WP_CACHE',			true  );
ini_set( 'display_errors',  0	  );
//define( 'SAVEQUERIES',      false );

?>
