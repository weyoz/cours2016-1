<?php // CONTROLEUR SECONDAIRE LISTE CONTACT
	
	include('modele/contact/lire_commentaires.php');

	$commentaires = lire_commentaires(0, 5);

	include('vue/contact/liste.php');