<html>        
    <body>
	
	</br>
	</br>
	
		<form action="membre.php?page=recherche_sujet&lang=<?php echo $_GET['lang']; ?>" method='post'>
			<table align="center" border="0">
			<label for name="recherche"><?php echo TXT_1_FORUM; ?></label>
			<td colspan="2" align="center"><input type="text" name="recherche" value=""></td>
			<td colspan="2" align="center"><input type="submit" class="button button-default" value="   Rechercher   "></td>
			</table>
		</form>
		
		
        <p><?php echo TXT_2_FORUM; ?></p>
 
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
				<em><?php echo TXT_4_FORUM; ?> <?php echo $donnees['date_creation_fr']; ?></em>
				<em> <?php echo TXT_5_FORUM; ?> <?php echo $donnees['name']; ?></em>
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
			<em><a href="membre.php?page=commentaires&billet=<?php echo $donnees['id']; ?>&lang=<?php echo $_GET['lang']; ?>"><?php echo TXT_3_FORUM; ?></a></em>
			</div>
		<?php	
		}
		?>
		<form action="membre.php?page=nouveau_sujet&lang=<?php echo $_GET['lang']; ?>" method='post'>
			<table align="center" border="0">
			<td colspan="2" align="center"><input type="submit" class="button button-default" value="   Ajouter un nouveau sujet   "></td>
			</table>
		</form>

	</body>
</html>