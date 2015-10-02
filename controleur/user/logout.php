<?php
	session_destroy();
	session_unset();

	setcookie('remember', '', time()-1000); // On vide et on périme le cookie

	// unset($_COOKIE);

	$referer = explode("?", $_SERVER['HTTP_REFERER']);
	header('location:'.$_SERVER['HTTP_REFERER']);
	exit;
?>