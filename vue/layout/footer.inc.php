<?php

	if(isset($_GET['message']))
	{
		switch ($_GET['message']) 
		{
			case 'non_reconnu':
				echo "Utilisateur non reconnu";
				break;

			case 'reconnu':
				echo "Bonjour ".$_SESSION['pseudo'];
				break;
			
			default:
				echo "Problème dans la gestion des utilisateurs";
				break;
		}
	}
?>


<div id="footer">

	<div id="formulaire_">
		
		<?php if(!isset($_SESSION["pseudo"]) || !$_SESSION['pseudo']) { ?>

				<form id="formu" action="?module=user&amp;action=login" method="post">
					<p>
						<input id="pseudo" name="pseudo" type="text" value="Pseudo">
						<input id="password" name="password" type="password" value="password"></br>
						<input name="remember" type="checkbox" value="remember">Se rappeler de moi</br>
						<input id="connect" name="connect" type="submit" value="Login">

					</p>
				</form>

		<?php } ?>
			
			<p>
				<?php

					if(isset($_SESSION["pseudo"]))
					{
						echo '<a class="deconnexion" href="?module=user&action=logout">Se déconnecter</a>';
					}

				?>
			</p>
	</div>
	<?php
		if(isset($_COOKIE['date']))
		{
			echo 'Votre dernière  visite date du '.$_COOKIE['date'].'<br/>';
		}
		else
		{
			echo "Bienvenu pour votre première visite";
		}
	?>

	<?php /*
		if(isset($_SESSION['pseudo']))
		{
			var_dump($_SESSION['pseudo']); 
		}*/
	?>
	<p>
		<a id="css1" href="#">Css 1</a> - 
		<a id="css2" href="#">Css 2</a><br/>
		Copyright (c) <span id="copyright">????</span> MonExpo.com. Exercice de formation. Design by 
		<script type="text/javascript">
		<!--
			document.write(mail("champion", "gmail", "com", "Webdesigner"));
		//-->
		</script>.
		<br/>
		<span id="date">jjjjjj JJ mmmmmm AAAA</span> à <span id="heure">HH:MM:SS</span><br />
		Page chargée en <span id="duree">????</span> ms
	</p>

	
</div>

<script type="text/javascript" src="assets/js/evt.js"></script>

</body>
</html>
