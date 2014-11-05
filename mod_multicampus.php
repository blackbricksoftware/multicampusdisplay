<?php defined( '_JEXEC' ) or die( 'Restricted access' );

//~ function pre($var) { return "<pre>".print_r($var,true)."</pre>"; }
//~ error_reporting(E_ALL&~E_NOTICE);
//~ ini_set('display_errors',1);

require_once __DIR__ . '/helper.php';

$helper = new ModMultiCampusHelper($params,$module);
$helper->display();


