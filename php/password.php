<meta charset="utf-8">

<?php

include_once('Database.php');
include_once('Identification.php');
$email=$_POST['email'];
$testAdresseMail=0;

$reponse = $bdd->query('SELECT name FROM users WHERE email="'.$_POST['email'].'"');
while ($donnees = $reponse->fetch())
{
    $testAdresseMail=$testAdresseMail+1;
}
if ($testAdresseMail==0) {
	if ($_GET["lang"]=='fr') {
		// on affiche un petit message
		echo '<body onLoad="alert(\'Aucun compte n existe avec cette adresse mail.\')">';
		echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
		

		
	}
	else {
		// on affiche un petit message
		echo '<body onLoad="alert(\'Aucun compte n existe avec cette adresse mail.\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
	}
}	
else {

	$reponse = $bdd->query('SELECT email,name,first_name,password FROM users WHERE email="'.$_POST['email'].'"');
	
	$ligne = $reponse->fetch();

	if ($_GET["lang"]=='fr') {	
		$msg = htmlspecialchars('Bonjour ' .$ligne['first_name']. ', voici votre mot de passe : '.$ligne['password']. '. L\'équipe de Pluggi.');
		
		echo $msg;
		mail($email, 'Sample Comments', $msg);

		// on affiche un petit message
		echo '<body onLoad="alert(\'Un mail vous a été envoyé. Vérifiez également vos spams.\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
	}

	else {
		$msg = htmlspecialchars('Bonjour ' .$ligne['first_name']. ', voici votre mot de passe : '.$ligne['password']. '. L\'équipe de Pluggi.');
		
		echo $msg;
		mail($email, 'Sample Comments', $msg);

		// on affiche un petit message
		echo '<body onLoad="alert(\'Un mail vous a été envoyé. Vérifiez également vos spams.\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
	}
} 
?>