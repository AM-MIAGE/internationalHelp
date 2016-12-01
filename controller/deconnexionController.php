<?php 

	session_start();

	if(isset($_GET['user'])) {
		$_SESSION = array();
		session_destroy();

	}

	header("Location: ../vues/index.php");
	die();

 ?>