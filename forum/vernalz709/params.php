<?php
if( isset($_REQUEST['gConf']) ) die; // globals hack prevention
require_once ($gConf['dir']['layouts'] . 'base/params.php');

$gConf['dir']['xsl'] = $gConf['dir']['layouts'] . 'vernalz/xsl/';	// xsl dir

$gConf['url']['img'] = $gConf['url']['layouts'] . 'vernalz/img/';	// img url
$gConf['url']['css'] = $gConf['url']['layouts'] . 'vernalz/css/';	// css url
$gConf['url']['xsl'] = $gConf['url']['layouts'] . 'vernalz/xsl/';	// xsl url

?>
