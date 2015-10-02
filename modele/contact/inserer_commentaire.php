<?php 

	function inserer_commentaire()
	{
		global $bdd;

		try
		{
			$insert = $bdd -> prepare("INSERT INTO minitp (MINITP_NAME, MINITP_MAIL, MINITP_COMMENT)
										VALUES (:nom, :mail, :commentaire)");

			$insert -> bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
			$insert -> bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
			$insert -> bindValue(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);

			$insert -> execute();

			return true;
		}
		catch (Exception $e)
		{
			die($e->getMessage());
			return false;
		}
	}