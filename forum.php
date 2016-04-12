<!-- Cahier des charges : il faudra que je mette l'option like, résolu, et le moniteur de recherche voilà -->

<html>        
    <body>
	
		<form action="membre.php?page=Recherche sujet" method='post'>
			<table align="center" border="0">
			<label for name="recherche">Rechercher un autre sujet</label>
			<td colspan="2" align="center"><input type="text" name="recherche" value=""></td>
			<td colspan="2" align="center"><input type="submit" class="button button-default" value="   Rechercher   "></td>
			</table>
		</form>
		
		
        <p>Derniers billets du blog :</p>
 
		<?php

		// On récupère les 5 derniers billets
		$req = $bdd->query('SELECT billets.id, titre, resolu, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr, users.first_name, users.name FROM users, billets WHERE billets.id_user=users.id_user ORDER BY date_creation DESC LIMIT 0, 5');
		while ($donnees = $req->fetch())
		{
			?>
			<div class="news">
			<h5>
				<?php if ($donnees['resolu']==1) {
					echo '[Résolu]';
				}				
				echo htmlspecialchars($donnees['titre']); ?>
				<em>le <?php echo $donnees['date_creation_fr']; ?></em>
				<em> par <?php echo $donnees['name']; ?></em>
				<em>  <?php echo $donnees['first_name']; ?></em>
			</h5>
    
			<p>
				<br/>
				<?php
				// On affiche le contenu du billet la commande nl2br permet de concerver les retour à la ligne éventuelle faite dans le contenu 
				echo nl2br(htmlspecialchars($donnees['contenu']));
				?>
				<br/>
				<br/>	
			</p>
			<em><a href="membre.php?page=commentaires&billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
			</div>
		<?php	
		}
		?>
		<form action="membre.php?page=Nouveau sujet" method='post'>
			<table align="center" border="0">
			<td colspan="2" align="center"><input type="submit" class="button button-default" value="   Ajouter un nouveau sujet   "></td>
			</table>
		</form>

	</body>
</html>