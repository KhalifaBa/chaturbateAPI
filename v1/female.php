<?php

require('includes/settings.php');
require('includes/functions.php');
require('includes/templates.php');
require('classes/arix.class.php');


// Compress with gzip

if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) {
    ob_start( "ob_gzhandler" );
}
else {
    ob_start();
}

$arg1 = array_key_exists('arg1', $_GET) ? $_GET['arg1'] : null;

$core = new axl_Core();

$core->setHeaderFunc('tpl_header');

$core->setFooterFunc('tpl_footer');



$core->addCommand('home', 'tpl_home', SITENAME . '', 'Description', 'Keywords');
$core->start();

?>