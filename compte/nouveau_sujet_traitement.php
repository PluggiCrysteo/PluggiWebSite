

<?php

$titre=$_POST['nom'];
$nom=$_POST['contenu'];

// il faudra ensuite récupépérer le bon code pour avoir l'ID
$id_user=$_SESSION['id_user'];

$reponse = $bdd->query('INSERT INTO billets(titre, contenu, id_user, date_creation) VALUES ("'.$titre.'", "'.$nom.'", "'.$id_user.'", now())');

//, \'%d/%m/%Y à %Hh%imin%ss\



//on affiche un petit message
echo '<body onLoad="alert(\'Votre sujet à bien été enregistrer...\')">';
// puis on le redirige vers la page d'accueil

if ($_GET["lang"]=='fr') {
	//on affiche un petit message
	echo '<body onLoad="alert(\'Votre sujet à bien été enregistrer...\')">';
	// puis on le redirige vers la page d'accueil
	echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=Forum&lang=fr">';
}
else {
	//on affiche un petit message
	echo '<body onLoad="alert(\'Votre sujet à bien été enregistrer...\')">';
	// puis on le redirige vers la page d'accueil
	echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=Forum&lang=fr">';
}

?>
