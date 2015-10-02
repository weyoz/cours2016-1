<?php

	function supprimer_commentaire($id)
	{
		global $bdd;

		try
		{

			$delete = $bdd -> prepare('DELETE FROM minitp WHERE MINITP_ID = :id');

			$delete -> bindValue(':id', $id, PDO::PARAM_INT);

			$delete -> execute();

			return true;
		}
		catch(exception $e)
		{
			die($e -> getMessage());
			return false;
		}
	}