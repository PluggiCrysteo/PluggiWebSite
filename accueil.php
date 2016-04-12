
</br>
</br>
</br>

<?php


	echo 'Bienvenue ';

	$reponse = $bdd->query('SELECT first_name FROM users WHERE id_user="'.$_SESSION['id_user'].'"');
	
	$ligne = $reponse->fetch();
	
	echo $ligne['first_name'];
	
	echo ' sur votre espace membre.';

?>