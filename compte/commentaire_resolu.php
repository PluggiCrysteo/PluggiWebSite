<?php

$id=$_POST['lign'];

echo $id;

$reponse = $bdd->query('SELECT titre,id FROM billets WHERE id="'.$id.'"');

$donnees = $reponse->fetch();

$reponse = $bdd->query('UPDATE billets SET titre="'.$titre.'", resolu=1 WHERE id="'.$id.'"');

// on affiche un petit message
echo '<body onLoad="alert(\'Votre message a bien été résolu...\')">';
// puis on le redirige vers la page d'accueil
echo '<meta http-equiv="refresh" content="0;URL=membre.php?page=Forum">';

	

?>