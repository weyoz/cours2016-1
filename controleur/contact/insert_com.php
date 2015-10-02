<?php // CONTROLEUR SECONDAIRE CONTACT/INSERT_COM

	include('modele/contact/inserer_commentaire.php');

	if(isset($_POST['envoyer']))
	{
		$nb_caracteres = strlen($_POST['nom']);

		if($nb_caracteres < 8)
		{
			if(!inserer_commentaire())
			{
				header('location:?module=contact&action=liste&return=insert_failed');
			}
			else
			{
				header('location:?module=contact&action=liste&return=insert_succes');
			}
		}
		else
		{
			header('location:?module=contact&action=liste&return=too_long&nb= '.$nb_caracteres);
		}
	}
	else
	{
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';
		echo "vous n'avez rien à faire ici, disparaissez!!";
	} 