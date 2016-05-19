<?php
	$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');

     if ($openShiftVar === null || $openShiftVar == ""){
     	// Not in Openshift
     	include 'components/menu/menu.php';
     	
     }else{
     	include $_SERVER['DOCUMENT_ROOT'].'/components/menu/menu.php'; 
     }


?>