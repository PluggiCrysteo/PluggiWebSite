<?php

// On récupère les valeurs précédentes
$commentaire=$_POST['contenu'];
$id=$_POST['billet'];
$auteur=$_SESSION['id_user'];

	
//$reponse = $bdd->query('INSERT INTO commentaires(commentaire, id, date_commentaire) VALUES ("'.$commentaire.'", "'.$id.'", now())');
		
if ($_FILES['monfichier']['error'] == UPLOAD_ERR_NO_FILE) {
    echo 'Aucun fichier';
	$reponse = $bdd->query('INSERT INTO commentaires(commentaire, id, date_commentaire,auteur) VALUES ("'.$commentaire.'", "'.$id.'", now(),"'.$auteur.'")');
} 
else {
    //on verifie qu'il n'y ai aucune erreur
	if (isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0)
	{
		//si oui on stock
		move_uploaded_file($_FILES['fichier']['tmp_name'], 'upload/'.basename($_FILES['fichier']['name']));

		$message = "le fichier à été stocker à cette adresse: http://monsite.truc/upload/".$_FILES['fichier']['name'].".";

		// si non on mais le message d'erreur
	}
	else
	{
		$message = "Le formulaire n'est pas rempli ou une erreur est survenu.";
	}
	echo $message;
}

if ($_GET["lang"]=='fr') {
	// on affiche un petit message
	echo '<body onLoad="alert(\'Merci de votre message...\')">';
	// puis on le redirige vers la page d'accueil
	echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=forum&lang=fr">';
}
else {
	// on affiche un petit message
	echo '<body onLoad="alert(\'Merci de votre message...\')">';
	// puis on le redirige vers la page d'accueil
	echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=forum&lang=en">';
}	
	
?>