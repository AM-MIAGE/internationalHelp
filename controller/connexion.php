<?php 


	//extract($_POST);

	extract($_POST);


	session_start();


	$_SESSION['user'] = $mail;


	header("Location: ../vues/index.php");
	die();

 ?>