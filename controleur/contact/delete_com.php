<?php // CONTROLEUR SECONDAIRE CONTACT/DELETE

	include('modele/contact/supprimer_commentaire.php');

	if(isset($_GET['id']))
	{
		if(!supprimer_commentaire($_GET['id']))
		{
			header('location:?module=contact&action=liste&return=delete_failed');
		}
		else
		{
			header('location:?module=contact&action=liste&return=delete_succes');
		}
	}	