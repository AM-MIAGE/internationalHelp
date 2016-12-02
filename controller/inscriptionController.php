<?php 

	include "../model/database.php";

	extract($_POST);

	insertUser($nom, $prenom, $mail, $date, $nationalite, md5($mdp));


	header("Location: ../vues/index.php");
	die();

 ?>