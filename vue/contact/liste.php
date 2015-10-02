<?php include("vue/layout/header.inc.php"); ?>

<div id="formulaire">
	<div id="content2">
		<h2>Les commentaires</h2>
		<div id="comment">
			<ul>
				<?php foreach ($commentaires as $commentaire) {?>
						
					<li>
						<?php if(isset($_SESSION["pseudo"]) && $_SESSION['pseudo']) { ?>

							<a onclick=" return confirm(\'Etes-vous sûr de vouloir supprimer ce commentaire??\');" class="cross" href="?module=contact&amp;action=delete_com&amp;id=<?php echo $commentaire['MINITP_ID']; ?>">X</a>
							<a class="edit" href="?module=contact&amp;action=select_to_modif&amp;id=<?php echo $commentaire['MINITP_ID']; ?>">Edit</a>

						<?php } ?>
								
						<?php echo $commentaire['MINITP_COMMENT']; ?><br/> 
						par <?php echo $commentaire['MINITP_NAME']; ?> -- <?php echo $commentaire['MINITP_MAIL']; ?>
					</li>

				<?php } ?>
			</ul>
		</div>
	</div>

	<div id="sidebar2">
		<h2>Commentez !</h2>
		<?php

			if(isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['mail']) && isset($_GET['commentaire']))
			{
				$value_id = $_GET['id'];
				$value_nom = $_GET['nom'];
				$value_mail = $_GET['mail'];
				$value_commentaire = $_GET['commentaire'];
				$action = "?module=contact&action=modif_com";
			}
			else
			{
				$value_nom = "Nom";
				$value_mail = "Mail";
				$value_commentaire = "Commentaire";
				$action = "?module=contact&action=insert_com";
			}

		?>
		<form id="formu" name="formu" action=<?php echo $action; ?> method="post">
			<div><input id="nom" type="text" name="nom" value=<?php echo $value_nom; ?>></div>
			<div><input id="mail" type="text" name="mail" value=<?php echo $value_mail; ?>></div>
			<div><textarea id="commentaire" name="commentaire"><?php echo $value_commentaire; ?></textarea></div>
			<p><input name="envoie" id="envoie" type="submit" value="Envoyer" /></p>
		</form>
	</div>
	<?php

	if(isset($_GET["return"]))
	{
		$return = $_GET["return"];

		switch ($return)
		{
			case 'insert_succes':
				echo "Votre commentaire a bien été publié!!";
				break;
			case 'delete_succes':
				echo "Le commentaire a été supprimé!!";
				break;
			case 'modif_succes':
				echo "Le commentaire a été modifié!!";
				break;
			case 'too_long':
				echo "Votre nom doit comporter moins de 8 caractères, or, il en fait ".$_GET["nb"];
				break;	
			default:
				echo "Désolé, votre action n'a pu se concrétiser";
				break;
		}
	}

?>
</div>
	
<?php include("vue/layout/footer.inc.php"); ?>