<?php

// submitted to server through form

// build the email message by using
// info received by the HTML form
$msg = 'Name: ' .$_POST['name'] ."\n"
	'Email: ' .$_POST['email'] ."\n"
	'Comment: ' ."\n" .$_POST['comment'];

// send email using PHP's built in 
// command, mail()
mail('helene.mazars@isen-lille.fr', 
	'Sample Comments', $msg);

// redirect to the thank you page
header('location: index.html');

// exit this script - just to make sure nothing else gets run
exit(0);


?>