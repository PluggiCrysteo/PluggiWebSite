
<meta charset="utf-8">


<?php

// submitted to server through form

// build the email message by using
// info received by the HTML form
$msg = htmlspecialchars('Name: ' .$_POST['name'] .
	'Email: ' .$_POST['email'] .
	'Comment: ' ."\n" .$_POST['comment']);

// send email using PHP's built in 
// command, mail()
mail('helene.mazars@isen-lille.fr', 
	'Sample Comments', $msg);
	
mail('crysteo@isen-lille.fr', 
	'Sample Comments', $msg);	

//on affiche un petit message
			echo '<body onLoad="alert(\'Merci de votre message, on vous répondra dès que possible\')">';
			
			// puis on le redirige vers la page d'accueil	
			echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';

?>