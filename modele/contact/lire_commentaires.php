<?php 
	
	function lire_commentaires($offset, $limite)
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM minitp 
										ORDER BY MINITP_ID DESC
										LIMIT :offset, :limite');
			
			$select -> bindValue(':offset', $offset, PDO::PARAM_INT);
			$select -> bindValue(':limite', $limite, PDO::PARAM_INT);

			$select -> execute();
			
			$commentaires = $select -> fetchAll();
			
		}
		catch (exception $e)
		{
			die($e->getMessage());
		}
		return $commentaires;
	}