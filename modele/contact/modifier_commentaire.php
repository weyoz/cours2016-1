<?php
	
	function select_to_modif($id)
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM minitp WHERE MINITP_ID=:id');

			$select -> bindValue(':id', $id, PDO::PARAM_INT);

			$select -> execute();

			$commentaire = $select -> fetch();
			
		}
		catch(exception $e)
		{
			die($e->getMessage());
		}

		return $commentaire;
	}


	function modifier_commentaire($id, $nom, $mail, $commentaire)
	{
		global $bdd;

		try
		{
			$edit = $bdd -> prepare('UPDATE minitp 
										SET MINITP_NAME =:nom,
											MINITP_MAIL =:mail,
											MINITP_COMMENT =:commentaire 
											WHERE MINITP_ID=:id');
			$edit -> bindValue(':id', $id, PDO::PARAM_INT);
			$edit -> bindValue(':nom', $nom, PDO::PARAM_STR);
			$edit -> bindValue(':mail', $mail, PDO::PARAM_STR);
			$edit -> bindValue(':commentaire', $commentaire, PDO::PARAM_STR);

			$edit -> execute();
			return true;
		}
		catch(exception $e)
		{
			die($e->getMessage());
			return false;
		}
	}