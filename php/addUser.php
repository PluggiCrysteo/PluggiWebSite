<meta charset="utf-8">

<?php

include_once('Database.php');
include_once('Identification.php');
$compteur=0;
$testAdresseMail=0;
$testPluggi=0;
$testUser=0;
$first_name=$_POST['first_name'];
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];


 if (empty($name) || empty ($first_name) || empty ($number) || empty ($email) || empty ($password )) {
		
	if ($_GET["lang"]=='fr') {
		// on affiche un petit message
		echo '<body onLoad="alert(\'Au moins une information manque...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
	}
	else {
		// on affiche un petit message
		echo '<body onLoad="alert(\'Au moins une information manque...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
	}
	
    } else {
       
            $reponse = $bdd->query('SELECT name FROM users WHERE email="'.$_POST['email'].'"');

            while ($donnees = $reponse->fetch())
            {
                $testAdresseMail=$testAdresseMail+1;
            }
            if ($testAdresseMail!=0) {

					if ($_GET["lang"]=='fr') {
						// on affiche un petit message
						echo '<body onLoad="alert(\'Tu es déjà dans la base de données\')">';
						// puis on le redirige vers la page d'accueil
						echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
					}
					else {
						// on affiche un petit message
						echo '<body onLoad="alert(\'Tu es déjà dans la base de données\')">';
						// puis on le redirige vers la page d'accueil
						echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
					}
				
                } 
				
				//on vérifie ensuite que le numéro de série de Pluggi exite bien et qu'il n'a pas déjà été pris
				else {
						$reponse = $bdd->query('SELECT pluggi_number,user_id  FROM pluggi_profile WHERE pluggi_number="'.$_POST['number'].'"');
						 while ($donnees = $reponse->fetch())
						{
							$testPluggi=$testPluggi+1;
							if ($donnees['user_id']!=NULL) {

								if ($_GET["lang"]=='fr') {
									// on affiche un petit message
									echo '<body onLoad="alert(\'Votre Pluggi a déjà été identifié\')">';
									// puis on le redirige vers la page d'accueil
									echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
								}
								else {
									// on affiche un petit message
									echo '<body onLoad="alert(\'Votre Pluggi a déjà été identifié\')">';
									// puis on le redirige vers la page d'accueil
									echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
								}

								exit();								
							}
						}
						if ($testPluggi==0) {

							if ($_GET["lang"]=='fr') {
								// on affiche un petit message
								echo '<body onLoad="alert(\'Le numéro de votre Pluggi est incorrect\')">';
								// puis on le redirige vers la page d'accueil
								echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
							}
							else {
								// on affiche un petit message
								echo '<body onLoad="alert(\'Le numéro de votre Pluggi est incorrecte\')">';
								// puis on le redirige vers la page d'accueil
								echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
							}
						}
						else {
		
							$query="insert into users (name,first_name,email,number,password) values (:name,:first_name,:email,:number,:password)";
							$req=$bdd->prepare($query);
							$req->execute(array(
								"name"=>$_POST['name'],
								"first_name"=>$_POST['first_name'],
								"email"=>$_POST["email"],
								"number"=>$_POST["number"],
								"password"=>$_POST["password"])); 
							$userId = $bdd->lastInsertId();
							$query="insert into user_profile (id_user, id_profile) values (:id_user, :id_profile)";
								$req=$bdd->prepare($query);
							$req->execute(array("id_user"=>$userId,
								"id_profile" => 2));
							
							$queryLinkProfile="insert into user_profile (id_user, id_profile)
								select :idUser, id_profile from profile where profile_name in ('CONNECTED')";
								$req=$bdd->prepare($queryLinkProfile);
							$req->execute(array("idUser"=>$userId));
								$identification->connectUser($userId);
					
							$reponse = $bdd->query('UPDATE pluggi_profile SET user_id="'.$userId.'" WHERE pluggi_number="'.$_POST['number'].'"');
							
							if ($_GET["lang"]=='fr') {
								// on affiche un petit message
								echo '<body onLoad="alert(\'Votre compte a bien été enregistré\')">';
								// puis on le redirige vers la page d'accueil
								echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
							}
							else {
								// on affiche un petit message
								echo '<body onLoad="alert(\'Votre compte a bien été enregistré\')">';
								// puis on le redirige vers la page d'accueil
								echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
							}		
						}
					}
				}

?>