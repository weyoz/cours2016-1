<?php // CONTROLEUR SECONDAIRE CONTACT SELECT TO MODIF

	include('modele/contact/modifier_commentaire.php');

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		if(select_to_modif($id))
		{
			$comment = select_to_modif($id);

			$value_id = $id;
			$value_nom = $comment['MINITP_NAME'];
			$value_mail = $comment['MINITP_MAIL'];
			$value_commentaire = $comment['MINITP_COMMENT'];
			
			header('location: ?module=contact&action=liste&id='.$value_id.'&nom='.$value_nom.'&mail='.$value_mail.'&commentaire='.$value_commentaire);
		}
	}
	else
	{
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';
		echo "vous n'avez rien à faire ici, disparaissez!!";
	} 