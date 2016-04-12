<?php

// On récupère les valeurs précédentes
$commentaire=$_POST['contenu'];
$id=$_POST['billet'];
$auteur=$_SESSION['id_user'];

	
//$reponse = $bdd->query('INSERT INTO commentaires(commentaire, id, date_commentaire) VALUES ("'.$commentaire.'", "'.$id.'", now())');
		
if ($_FILES['monfichier']['error'] == UPLOAD_ERR_NO_FILE) {
    echo 'Aucun fichier';
	$reponse = $bdd->query('INSERT INTO commentaires(commentaire, id, date_commentaire,auteur) VALUES ("'.$commentaire.'", "'.$id.'", now(),"'.$auteur.'")');
} else {
    echo 'Fichier envoyé';
	echo $_FILES['monfichier']['name'];
	$nomFichier=$_FILES['monfichier']['name'];
	$reponse = $bdd->query('INSERT INTO commentaires(commentaire, id, date_commentaire,photo) VALUES ("'.$commentaire.'", "'.$id.'", now(),"'.$nomFichier.'")');
	
	//on le met ensuite dans le dossier
	move_uploaded_file($_FILES['monfichier']['tmp_name'], basename($_FILES['monfichier']['name']));
	
	// Il faudra tout de même contrôler ce qui vous est envoyé
}


// on affiche un petit message
echo '<body onLoad="alert(\'Merci de votre message...\')">';
// puis on le redirige vers la page d'accueil
echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=Forum&lang=fr">';



if ($_GET["lang"]=='fr') {
	// on affiche un petit message
	echo '<body onLoad="alert(\'Merci de votre message...\')">';
	// puis on le redirige vers la page d'accueil
	echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=Forum&lang=fr">';
}
else {
	// on affiche un petit message
	echo '<body onLoad="alert(\'Merci de votre message...\')">';
	// puis on le redirige vers la page d'accueil
	echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=Forum&lang=en">';
}	
	
?>