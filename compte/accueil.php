
</br>
</br>
</br>

<?php


	echo TXT_1_ACCUEIL;

	$reponse = $bdd->query('SELECT first_name FROM users WHERE id_user="'.$_SESSION['id_user'].'"');
	
	$ligne = $reponse->fetch();
	
	echo $ligne['first_name'];
	
	echo TXT_2_ACCUEIL;

?>