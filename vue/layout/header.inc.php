<?php 

	$la_date = date("Y/m/d H:i:s");

	if(!setcookie('date', $la_date, time()+3600*24*31))
	{
		echo("Cookie impossible");
	}

	if(!isset($_SESSION["pseudo"]) || !$_SESSION["pseudo"])
	{
		if(isset($_COOKIE["remember"]))
		{
			$data = explode("|", $_COOKIE["remember"]);
			$pseudo = $data[0];
			$password = $data[1];
			/*
			echo "<pre>";
			var_dump($data);
			echo "</pre>";
			*/
			include('modele/user/login.php');
			verif_admin($pseudo, $password); // crée maintiens la session (session admin = true)
		}
	}

	if(isset($_COOKIE['style']))
	{
		$fichiercss = $_COOKIE['style'];
	}
	else
	{
		$fichiercss = "style1.css";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Mon expo photo</title>
	<link href="assets/styles/<?php echo $fichiercss; ?>" rel="stylesheet" type="text/css" media="screen" id="css" />

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/ajax.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>

	</head>

<body>

<div id="header">
	<div id="logo">
		<h1><a href="page_index.php">MonExpo.com</a></h1>
		<p>Exercice de formation</p>
	</div>
	
	<form id="form_recherche" name="form_recherche" action="recherche.php" method="post">
		<input id="recherche" type="text" name="recherche" value="">
		<input name="search" id="search" type="submit" value="Search">
	</form>
	
	<div id="menu">
		<ul>
			<li class="current_page_item">
				<a id="lien1" href="?action=index">Accueil</a></li>
			<li><a id="lien2" href="#">Blog</a></li>
			<li><a id="lien3" href="?action=galerie">Photos</a></li>
			<li><a id="lien4" href="#">A propos</a></li>
			<li><a id="lien5" href="?module=contact&amp;action=liste">Contact</a></li>
		</ul>
		<div id="aide">Aide contextuelle</div>
	</div>
</div>
