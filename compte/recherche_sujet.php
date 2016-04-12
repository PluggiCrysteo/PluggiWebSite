<html>
        
    <body>
		</br>
		</br>
		</br>
		</br>
        <p>D<?php echo TXT_1_RECHERCHE; ?></p>
 
<?php
$recherche=$_POST['recherche'];


if (isset($recherche))
{
//on a lancé une recherche
//$reponse = $bdd->query("SELECT type, nom, lieu, tuto_eventuel, empruntable, observation FROM materiel WHERE ".$colonne." LIKE '%". $valeur."%'");
$req = $bdd->query("SELECT billets.id, titre, contenu, users.first_name, users.name FROM users, billets WHERE billets.id_user=users.id_user AND billets.titre LIKE '%". $recherche."%' ORDER BY date_creation DESC LIMIT 0, 5");
while ($donnees = $req->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
		<em> par <?php echo $donnees['name']; ?></em>
		<em>  <?php echo $donnees['first_name']; ?></em>
    </h3>
    
    <p>
    <?php
    // On affiche le contenu du billet la commande nl2br permet de concerver les retour à la ligne éventuelle faite dans le contenu 
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br />
    <em><a href="membre.php?page=commentaires&billet=<?php echo $donnees['id']; ?>&lang=<?php echo $_GET['lang']; ?>"><?php echo TXT_2_RECHERCHE; ?></a></em>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
}
?>
