<?php
session_start()	; 
if($_SESSION['lang'] =='ar'){
	$_SESSION['lang']='en';
}else {
		$_SESSION['lang']='ar';
}	
header("Location: ".$_SERVER['HTTP_REFERER']);
 ?>