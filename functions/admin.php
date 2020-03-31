<?php
	require_once "./functions/database_functions.php";
	if (!isset($_SESSION['admin'])) {
		redirct("index.php");
	}
	else if($_SESSION['admin'] != true  ){
		redirct("index.php");
	}
?>