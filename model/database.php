<?php 

function connexion() {

	$db = new mysqli('localhost', 'root', 'root', 'internationalHelp');

	if($db->connect_errno > 0){
    	die('Unable to connect to database [' . $db->connect_error . ']');
	}	

	return $db;
}

function getUser($mail, $password) {

	$db = connexion();


$sql = "SELECT * from user u where u.mail=\"".$mail."\" and u.mp=\"".$password."\"";

	if(!$result = $db->query($sql)){
    	die('There was an error running the query [' . $db->error . ']');
	}

	if ($result->num_rows== 1) {
		$row = $result->fetch_assoc();
	}

	$result->free();
	$db->close();
	return $row;
}



function insertUser($nom, $prenom, $mail, $date, $nationalite, $mdp) {
	$db = connexion();


	$sql = 'insert into user(nom, prenom, dat_nais, nationalite, mail, mp) 
			VALUES ("'.$nom.'","'.$prenom.'","'.$date.'","'.$nationalite.'","'.$mail.'", "'.$mdp.'")';

	if(!$result = $db->query($sql)){
    	die('There was an error running the query [' . $db->error . ']');
	}
	$db->close();

}

 ?>