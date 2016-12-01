<?php 

function connexion() {

	$db = new mysqli('localhost', 'root', 'root', 'internationalHelp');

	if($db->connect_errno > 0){
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}	

	return $db;
}



 ?>