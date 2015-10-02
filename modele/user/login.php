<?php

	function verif_admin($pseudo, $password)
	{
		global $bdd;

		try
		{
			$select = $bdd -> prepare('SELECT * FROM minitp_users WHERE USER_LOGIN=:pseudo AND USER_PASSWORD=:password');
			
			$select -> bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
			$select -> bindValue(':password', $password, PDO::PARAM_STR);
		
			$select -> execute();

			$nb_reponses = $select -> rowCount();

			if($nb_reponses == 0)
			{
				$_SESSION["pseudo"] = false;
				return 0;
			}

			elseif($nb_reponses == 1)
			{
				$_SESSION["pseudo"] = $pseudo;
				return 1;
			}

			else
			{
				$_SESSION["pseudo"] = false;
				return 2;
			}
		}
		catch(exception $e)
		{
			die($e -> getMessage());
		} 
	}
