<?php


// Include Settings

require('includes/settings.php');
require('includes/functions.php');
get_xml();
// Layout Templates

require('includes/templates/layout/_footer.php');		// Footer Template
require('includes/templates/layout/_header.php');		// Header Template

// Page Templates

require('includes/templates/pages/_2257.php');			// 2257 Page Template
require('includes/templates/pages/_404.php');			// 404 Error Page Template
require('includes/templates/pages/_cams.php');			// Cam Thumbnail Display Template
require('includes/templates/pages/_home.php');			// Homepage Template
require('includes/templates/pages/_privacy.php');		// Privacy Page Template
require('includes/templates/pages/_solo.php');			// Solo Cams Template


// Command Class
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