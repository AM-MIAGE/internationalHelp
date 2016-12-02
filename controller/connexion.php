<?php 


	//extract($_POST);

	extract($_POST);


	session_start();

	include "../model/database.php";

	$user = getUser($mail, md5($mdp));

	$_SESSION['user'] = $user['mail'];


	header("Location: ../vues/index.php");
	die();

 ?>