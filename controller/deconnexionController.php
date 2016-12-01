<?php 

	if(isset($_GET['user'])) {
		$_SESSION = array();
		session_destroy();
		session_unset();
	}

	header("Location: ../vues/index.php");
	die();

 ?>