<?php // CONTROLEUR SECONAIRE USER/LOGIN

	include('modele/user/login.php');

	if(isset($_POST['connect']))
	{
		$pseudo = $_POST['pseudo'];
		$password = $_POST['password'];

		$referer = explode("?", $_SERVER['HTTP_REFERER']);

		switch (verif_admin($pseudo, $password)) 
		{
			case 0:
				header('location: '.$referer[0].'?message=non_reconnu');
				exit;
				break;

			case 1:
				if(isset($_POST['remember']))
				{
					if(!setcookie('remember', $pseudo.'|'.$password, time()+60))
					{
						die('cookie impossible');
					}
				}
				header('location: '.$referer[0].'?message=reconnu');
				exit;
				break;
			
			default:
				header('location: '.$referer[0].'?message=erreur');
				exit;
				break;
		}
	}