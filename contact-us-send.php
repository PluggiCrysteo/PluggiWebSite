<?php


if(isset($_POST['submit'])) {
  $msg='Name: ' . $_POST['name'] . "/n" 
  .'Email: ' . $_POST['email'] . "/n" 
  .'Comment: ' . $_POST['comment'];
  mail('helene_mouton@hotmail.fr', 'Sample Contact Us', 'coucou');
  header('location: index.html')
}
else {
  // do other code block
  header('Location: index.html');
  exit(0);
}


?>