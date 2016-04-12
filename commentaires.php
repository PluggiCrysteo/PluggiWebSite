<!DOCTYPE html>
<html>

    <body>
        <p><a href="membre.php?page=Forum">Retour à la liste des billets</a></p>
 
		<?php
		// si un bouton like/dislike a été actionner
		if (isset($_GET["ID"])) {
			$billet=$_GET["ID"];
			if ($_GET["aime"]=="oui") {
				$bdd->exec('UPDATE commentaires SET compteur = compteur+1 WHERE billet="'.$billet.'"');
			}
			else 
			{
				$bdd->exec('UPDATE commentaires SET compteur = compteur-1 WHERE billet="'.$billet.'"');
			}
		} 


		// Récupération du billet
		$id=$_GET['billet'];
		$req = $bdd->prepare('SELECT billets.id_user,users.id_user, first_name, name, id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets,users WHERE id = "'.$id.'" AND billets.id_user=users.id_user');
		$req->execute(array($_GET['billet']));
		$donnees = $req->fetch();
		?>

		<div class="news">
		<h5>
			<em>
			le <?php echo $donnees['date_creation_fr']; ?>
			par <?php echo $donnees['first_name']; ?>
			<?php echo $donnees['name']; ?></em>
		</h5>
    
		<p>
		<?php
			echo nl2br(htmlspecialchars($donnees['contenu']));
		?>
		</p>
		</div>
		<!--On va maintenant afficher les commentaitres-->
		
		<h2>Commentaires</h2>

		<?php
		$req->closeCursor(); // On libère le curseur pour la prochaine requête

		// Récupération des commentaires
		$req = $bdd->prepare('SELECT billet,compteur,auteur,commentaire, photo, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id="'.$id.'" ORDER BY date_commentaire');
		$req->execute(array($_GET['billet']));
		?>

		<?php
		while ($donnees = $req->fetch())
		{
			?>
			<div class="news">
			<h5>
				<em>le <?php echo $donnees['date_commentaire_fr']; ?></em> <!-- on utilise htmlspecialchars pour bien afficher les caractères spéciales-->
			</h5>
			<p align="center">
			<?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?>
			<br/>
	
			<!-- On ajoute maintenant la photo si elle existe -->
			<?php 
				$image=$donnees['photo'];
				if (empty($donnees['photo'])) {			
				}
				else 
				{
					?><img src=<?php echo $image ?> style="width:50%;height:50%"><?php
				}
			?>
			<div class="note">
				<form action="membre.php?page=commentaires&billet=<?php echo $_GET['billet']?>&aime=oui&ID=<?php echo $donnees['billet']?>" method='post' enctype="multipart/form-data">
					<table align="center" border="0">
					<td colspan="2" align="center"><input type="submit" class="button button-default" value=" Aimer le commentaire "></td>
					</table>
				</form>
	
			<center><?php echo "Nombre de likes : ".$donnees['compteur']; ?></center>
	
			<form action="membre.php?page=commentaires&billet=<?php echo $_GET['billet']?>&aime=pas&ID=<?php echo $donnees['billet']?>" method='post' enctype="multipart/form-data">
				<table align="center" border="0">
				<td colspan="2" align="center"><input type="submit" value=" Ne pas aimer le commentairer " class="button button-default"></td>
				</table>
			</form>
	
			</div>
	
			</p>
			</div>
			<?php
			} // Fin de la boucle des commentaires
			$req->closeCursor();
			?>

			<center>
			<form action="membre.php?page=commentaires_traitement" class="contact-form" method='post' enctype="multipart/form-data">
				<table align="center" border="0">
				Entrer un nouveau commentaire : <TEXTAREA name="contenu" class="form-control" rows=4 cols=40></TEXTAREA>
				<input type ="hidden" class="form-control" name = "billet" value=<?php echo $id ?>><br />
				Joindre une photo : <input type="file" name="monfichier" /><br />
				<td colspan="2" align="center"><input type="submit" class="button button-default" value="   Valider   "></td>
				</table>
				
			</form>
			</center>


			<!-- l'auteur de la question peut marquer que le sujet a été résolu avec l'ajoue de la notion [Resolu]-->
	
			<?php 


				$id=$_GET['billet'];


				$reponse = $bdd->query('SELECT id_user,id,resolu FROM billets WHERE id="'.$id.'"');

				while ($donnees = $reponse->fetch())
				{
					if ($donnees['id_user']==$_SESSION['id_user'] AND $donnees['resolu']==NULL ) 
					{
						//alors il peut marqué que le sujet est résolu
						?>
						<form action="membre.php?page=commentaire_resolu" method='post'>
							<input type=hidden name="lign" value="<?php echo $id ?>"> 
							<td colspan="2" align="center"><input type="submit" class="button button-default" value="   Mon sujet a été résolu   "></td>
						</form>
						<?php	
					}
				}
$reponse->closeCursor();
?>


</body>
</html>