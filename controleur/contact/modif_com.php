<?php // CONTROLEUR SECONDAIRE CONTACT/MODIF

	include('modele/contact/modifier_commentaire.php');
	
	if(isset($_POST['envoyer']))
	{
		$id = $_POST['hidden'];
		$nom = $_POST['nom'];
		$mail = $_POST['mail'];
		$commentaire = $_POST['commentaire'];


		if(!modifier_commentaire($id, $nom, $mail, $commentaire))
		{
			header('location:?module=contact&action=liste&return=modif_failed');
		}
		else
		{
			header('location:?module=contact&action=liste&return=modif_succes');
		}
	}
	else
	{
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';
		echo "vous n'avez rien à faire ici, disparaissez!!";
	}